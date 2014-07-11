<?php

/**
 * －－－－－－－－－－－－－－－－－－
 *前台页面及用户注册等功能 
 *－－－－－－－－－－－－－－－－－－
 */
class FrontUserController extends BaseController {

	/**
	 * 构造函数：主要进行csrf验证
	 */
	public function __construct(){
		$this->beforeFilter('csrf',array('only'=>'postRegister'));
	}
	
	/**
	 * 前台首页
	 *
	 * @return Response
	 */
	public function getIndex(){
		//查询分类信息，输出导航
		$navigator=Category::where('pid','=',0)->get();

       	return View::make('index')->with('navigator',$navigator);
	}

	/**
	 * 输出验证码图片			
	 * 
	 */
	public function getVerify(){
		//生成图片
		$response=Response::make(Verify::show(),200);
		$response->header('Content-type','image/jpeg');
		return $response;
	}

	/**
	 * 处理注册[这里前台是用ajax注册的]
	 * @return response
	 */
	public function postRegister(){

		/**
		 * 接收数据并验证
		 */
		$data=Input::except('veristr','remember','_token');

		/**
		 * 单独检查验证码
		 * 说明：在类里面生成验证码图片的时候就已经将验证码字符串放到session里面
		 */
		if(strtolower(Input::get('veristr'))!=strtolower(Session::get('veristr'))){
			return '验证码错误！';
		}

		//验证其他项
		$rule=Config::get('validateRules.rule3');
		$validator=Validator::make($data,$rule);
		if($validator->fails()){
			$message=$validator->messages();
			$errorArray=$message->all();
			//这里只返回一项错误报告，用于js弹窗，多了没必要
			return $errorArray[0];
		}

		//写入数据库
		$data['password']=Hash::make($data['password']);
		try{
			//插入数据的同时获得insert id
			$id=DB::table('myusers')->insertGetId($data);
		}catch(\Exception $e){
			Log::error($e->getMessage().DB::getQueryLog());
			return '注册失败！';
		}

		//让当前用户登陆
		Auth::loginUsingId($id);
		
		//给ajax一个成功提示
		return 1;
	}

	/**
	 * 登录
	 */
	public function postLogin(){
		//获得数据
		$data=Input::except('veristr','remember');

		//检查验证码
		if(strtolower(Input::get('veristr')!=strtolower(Session::get('veristr')))){
			return '验证码错误！';
		}

		//检查其他表单数据			*
		$remember=Input::get('remember')?true:false;	//是否记住密码
		if(!Auth::attempt($data,$remember)){
			return '验证失败！请检查帐号信息';
		}else{
			return 1;
		}
	}

	/**
	 * 登出
	 */
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	/**
	 * ＊新闻分页----[显示方法]＊
	 */
	public function getNews(){
	//1,查询属于新闻的二级分类.作为新闻分页的导航栏,以relation字段为news来判断.
		//查二级分类有很多方法,可以拼接顶级分类path,pid,然后查找path等于这个字符串的类.
		//-------------------------------------------------------------------
		//也可以查出所有分类,然后用substr_count看有几个逗号.
		//--------------------------------------------
		//这里尝试另一种方法,用pid来查,先查出新闻顶级分类的id.它的二级子类pid就等于这个
		//--------------------------------------------------------------------
		
		try{
			//A:查顶级分类
			$top=Category::where('relation','news')->orderBy('path')->first();
		}catch(\Exception $e){
			Log::error($e->getMessage());
			return '网页正在建设中...';
		}

		//或者查了没数据,同样报错
		if(!count($top)){
			return '暂无数据!';
		}

		//B:用顶级分类的id,去查它的二级分类
		$pid=$top->id;

		try{
			$second=Category::where('pid',$pid)->get();
		}catch(\Exception $e){
			return '暂无二级分类!';
		}
		if(!count($second)){
			return '暂无二级分类!';
		}

		//C:将内容表的数据传到新闻首页.事实上用到的只是id和title,content,那是个列表页,
		//										---------------------------
		//根据那个页面的布局,是分成五个版块,国内新闻,国际新闻,娱乐新闻,以及体育新闻,军事新闻
		//所以后台这边分开来查,避免模板上过多的php
		//这里其实所有内容都可能会变.包括类名,id这些每次删除数据然后再添加都会改变.
		//相比来说,类名肯能更好一些,因为类名可以自己写,就算删除数据,下次添加同样的类名,
		//这里以类名查找,那同样是可以对应上的.而id反而每增删一次,就发生改变而且是自动改变,自己无法预料.
		//所以这里用类名来查找.
		
		/*写到这里的时候有个想法,应该在内容列表页增加一个头条的功能.
			每个版块都应该有一个头条,这个头条在页面上可以表现为粗体,字体也大一些吸引人注意.
			那么要去数据库增加字段,以及增加内容列表的操作.

			现在已经增加了头条功能,所以每个版块需要查一个头条出来.
			因为添加头条没有做数量限制,所以可能有很多个头条,那么取的时候应该排序一下,排序的条件有两个.
			一个是一级头条优先于二级头条,第二个是如果两个一样,那么取最新的那条,也就是更新时间也要排一下.


			-------------------------------------------------------------------
			写到这里的时候,再次出现一个问题,原来的数据库头条,和推荐字段的数字是这样安排的:
			0是不推荐或者不头条.1是一级头条,2是二级头条.
			那么查询的时候很难用一条语句就给他们排序.因为1>0,它优先输出,但是2>1,二级头条却不能比一级头条先输出.
			那么排序方面就不好做.应该改成倒序.不头条的为3,二级为2,一级为1,那么就是一个递增的关系了.
			这样一排序,1的先输出,2的接着,3再往后.关键原因在于不管推荐不推荐,头条不头条,内容都得输出.
			所以先去改下模板上头条推荐的select值..
			
			-----------------------------------------------------------------------------------------
			＊其实仔细思考过后,要改默认值是更不推荐的.因为所有内容都有默认值,为0,如果要改成3,如果以后又增加一个头条选项,则又要改成4.
			---------------------------------------------------------------------------------------------------
			现在不改这个,而是改select的值,比如1级推荐,值为8,8级推荐,值为1,那样的8-1-0,也就可以排序了.
			---------------------------------------------------------------------------
			改select的值要比改整个表的默认值好的多.
			------------------------------------------------------------------------
		*/


			//国内
			//1,用hasMany来直接查.先得出category表对应的数据,然后去内容表获得内容.
			try{
				$guonei=Category::where('category_name','国内')->first();	
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:国内分类查询出错!';
			}
			
			if(!count($guonei)){
				return '没有国内分类!'; 
			}

			try{
				//根据上面的思路,需要对所有数据进行一次排序.
				//排序的规则有两个,一个是toutiao 按倒序排,第二个是更新时间.后来写的时候,最前面加了一个推荐
				//---------------------------------------------------------------------------
				//也就是说如果都是一级头条,那么以后添加的那条排在前面
				//----------------------------------------------
				//同时,类表页面的版块容量是有限的,所以一个小版块,要限制条数.
				//有这么多条件的话,用laravel orderBy总是出错,那么用原生语句来写.
				
				//A:先得出分类表的id,然后去匹配内容表的category_id
				$gn_id=$guonei->id;
				//国内新闻比较特殊,它总共有三个版块在列表页.第一个版块我是设计为推荐.
				//那么这样的话,排序条件还得加一个,那就是推荐,另外推荐还能上整个网站的首页.
				//思路是:推荐>头条>更新时间
				//-----------------------
				//具体输出时,第一个版块到第三个版块都是按照那样的优先级输出,然后特定的几行用粗体显示.
				$guoneiNews=DB::select("select * from news where category_id = '$gn_id' order by tuijian desc,toutiao desc,updated_at desc limit 10");
				//第二个版块,5条.注意要跳过第一此查询的10条
				//				---------------------
				$guoneiNews2=DB::select("select * from news where category_id = '$gn_id' order by tuijian desc,toutiao desc,updated_at desc limit 10,5");
				//第三个版块6条.
				$guoneiNews3=DB::select("select * from news where category_id = '$gn_id' order by tuijian desc,toutiao desc,updated_at desc limit 15,6");
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:国内分类查询内容出错!';
			}
			
			if(!count($guoneiNews)){
				return '国内分类下没有内容!'; 
			}
			
			//2,国际,同样的方法和流程:
			try{
				$guoji=Category::where('category_name','国际')->first();	
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:国际分类查询出错!';
			}
			
			if(!count($guoji)){
				return '没有国际分类!'; 
			}

			try{
				$gj_id=$guoji->id;
				//第一个版块取6个.
				$guojiNews=DB::select("select * from news where category_id='$gj_id' order by tuijian desc,toutiao desc,updated_at desc limit 9");
				//第二个版块也取6个
				$guojiNews2=DB::select("select * from news where category_id='$gj_id' order by tuijian desc,toutiao desc,updated_at desc limit 9,9");
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:国际分类查询内容出错!';
			}
			
			if(!count($guojiNews)){
				return '国际分类下没有内容!'; 
			}

			//3,体育
			try{
				$tiyu=Category::where('category_name','体育')->first();	
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:体育分类查询出错!';
			}
			
			if(!count($tiyu)){
				return '没有体育分类!'; 
			}

			try{
				$ty_id=$tiyu->id;
				//第一版块取9个
				$tiyuNews=DB::select("select * from news where category_id='$ty_id' order by tuijian desc,toutiao desc,updated_at desc limit 9");
				//第二版块取6个
				$tiyuNews2=DB::select("select * from news where category_id='$ty_id' order by tuijian desc,toutiao desc,updated_at desc limit 9,6");
				//第三版块取6个
				$tiyuNews3=DB::select("select * from news where category_id='$ty_id' order by tuijian desc,toutiao desc,updated_at desc limit 15,6");
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:体育分类查询内容出错!';
			}
			
			if(!count($tiyuNews)){
				return '体育分类下没有内容!'; 
			}

			//4,娱乐
			try{
				$yule=Category::where('category_name','娱乐')->first();	
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:娱乐分类查询出错!';
			}
			
			if(!count($yule)){
				return '没有娱乐分类!'; 
			}

			try{
				$yl_id=$yule->id;
				//第一版6个
				$yuleNews=DB::select("select * from news where category_id='$yl_id' order by tuijian desc,toutiao desc,updated_at desc limit 6");
				//第二版6个
				$yuleNews2=DB::select("select * from news where category_id='$yl_id' order by tuijian desc,toutiao desc,updated_at desc limit 6,6");
				//第三版6个
				$yuleNews3=DB::select("select * from news where category_id='$yl_id' order by tuijian desc,toutiao desc,updated_at desc limit 12,6");

			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:娱乐分类查询内容出错!';
			}
			
			if(!count($yuleNews)){
				return '娱乐分类下没有内容!'; 
			}

			//5,军事
			try{
				$junshi=Category::where('category_name','军事')->first();	
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:军事分类查询出错!';
			}
			
			if(!count($junshi)){
				return '没有军事分类!'; 
			}

			try{
				$js_id=$junshi->id;
				//第一版取6条
				$junshiNews=DB::select("select * from news where category_id='$js_id' order by tuijian desc,toutiao desc,updated_at desc limit 6");
				//第二版取6条
				$junshiNews2=DB::select("select * from news where category_id='$js_id' order by tuijian desc,toutiao desc,updated_at desc limit 6,6");
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '新闻:军事分类查询内容出错!';
			}
			
			if(!count($junshiNews)){
				return '军事分类下没有内容!'; 
			}
				

		//生成页面	
		return View::make('front/news')->with('second',$second)				//二级新闻分类用作新闻首页导航
										->with('guoneiNews',$guoneiNews)	//国内新闻第一个版块
										->with('guoneiNews2',$guoneiNews2)	//第二版块
										->with('guoneiNews3',$guoneiNews3)	//第三版块
										->with('guojiNews',$guojiNews)		//国际第一版块
										->with('guojiNews2',$guojiNews2)	//第二版块	
										->with('tiyuNews',$tiyuNews)		//体育	
										->with('tiyuNews2',$tiyuNews2)		//第二版块
										->with('tiyuNews3',$tiyuNews3)		//第三版块
										->with('yuleNews',$yuleNews)		//娱乐
										->with('yuleNews2',$yuleNews2)		//第二版块
										->with('yuleNews3',$yuleNews3)		//第三版块
										->with('junshiNews',$junshiNews)	//军事	
										->with('junshiNews2',$junshiNews2);	//第二版块
	}

	/**
	 * ＊搜索列表页面---[全部前台的搜索共用,显示方法]＊
	 *
	 * 
	 * 		概念还是要清楚,列表页就只是一些标题和内容简介组成的列表.
	 * 		----------------------------------------------
	 * 		列表上的某个url点击,就会到详情页面去.
	 * 		---------------------------------
	 *   	这里考虑用同一个页面做所有类型搜索的列表页,也就是说如新闻,商城等都在这个页面.
	 *   	当然不同的类型排版应该是不一样的,所以需要传进来一个type,表示是哪种类型的搜索.
	 *   	而前台模板上,则根据这个type来显示或者隐藏某一类型的内容.
	 *   	
	 * @参数: 	
	 * 		$type 	可以是内容表的名字,category表有个relation字段,就是对应内容表名,
	 * 				而每个前台页面都有category的数据,都有导航条...所以取这个值也方便.
	 */
	public function getSearch($type){
		//显示哪一个类型的数据,并非在这里判断,传过去到模板上来判断.
		return View::make('front/search')->with('type',$type);
	}	

	/**
	 * ＊新闻分页:搜索---[操作方法]＊
	 * 		该方法没有参数,是通过form表单传递数据过来.
	 * 		但是有个特别之处,在submit()事件的时候,js改变了form的action,挂载了一个参数过来:
	 * 		---------------------------------------------------------------------
	 * 			http://cms/search?table=..
	 * 		所以它能接收到两个数据:
	 * 			①searchText:	form自身的input输入框传过来的搜索文本
	 * 			②table:			js获取的数据挂在在form的action上,这个表示的是搜索范围,在哪个表搜索.
	 */
	public function postSearch(){
	//1,接收数据
		$searchText=Input::get("searchText");		//搜索文本
		$table=Input::get("table");					//表名

	//2,查询匹配数据
		//这里只有表名,也就是全字段匹配.但我发现别的网站都是只匹配title和content这样的文本字段.
		//------------------------------------------------------------------------
		//那我这里也这样做.目前只有新闻页,所以先做新闻.
		//js那边已经做了文本框为空的验证,这里就不做了.
		if($table='news'){
			//A:新闻的标题和内容都有全文搜索的索引,所以用全文搜索
			try {
				$result=News::whereRaw("match(title,content) against('*$searchText*' in boolean mode)")->get();
			} catch (\Exception $e) {
				Log::error($e->getMessage());
				//查询出错直接回原页面,报错
				return Redirect::to('news')->with('msg','查询失败!');
			}

			//B:得出结果集中有多少条数据,这个不用报错,有没有数据最后都得去搜索列表页,
			//--------------------------------------------------------------
			//并且告诉用户搜索结果是多少条.而且有这个$count也可以判断是否需要循环结果集
			//-------------------------------------------------------------
			$count=count($result);

			//C:因为看百度新浪等的搜索列表页,标题或者内容的匹配文本都是会高亮的,
			//----------------------------------------------------------
			//所以应该对数据进行一下处理,将搜索文本都用正则匹配出来,然后给它加上一个span,和颜色高亮.
			//-------------------------------------------------------------------------
			
			//先循环数据,循环之前还是先判断下,如果没有数据就不用循环了.也是直接返回到搜索结果的显示页面.
			//显示页面需要一个type参数,对应数据库表.这里直接就是$table.
			//---------------------------------------------------
			//这个就不要用msg变量名了,因为这个count是需要用的.不要混淆了.
			//----------------------------------------------------
			if(!$count){
				return Redirect::to('search/'.$table)->with('count',$count);
			}

			//D:然后循环数据,针对title和内容匹配
			//先写出正则表达式,这是通用的,title和content都用同一个匹配
			//这个正则一般来说应该就是搜索文本,但是有可能这个搜索文本带有正则关键字,那么需要先转义一下.
			//-------------------------------------------------------------------------
			$regexp='/'.(preg_quote($searchText)).'/';
			foreach($result as $k=>$v){
				//[后加] 这里差点忘了内容添加时是用ckeditor添加的,含有很多标签,
				//							----------------------------
				//这里的话,只要内容简介那点文字,并不需要标签,所以直接全部去掉.
				//这个正则写起来就比较麻烦了...但是其实并不需要正则,只需要strip_tags,就会将标签去掉,留下文本.
				//								------------------------------------------------			
				//\r\n也是要去掉.
				//-------------
				$content=strip_tags($v->content);
				$content=str_replace('\r\n','',$content);
					

				//匹配title,并加上span.应该用preg_replace,用反向引用来做替换.但替换前先判断有没有
				//----------------------------------------------------
				//其实后面写了多余的代码,本来是用全文搜索匹配出来的结果集,title或者content肯定是有一个有匹配的.[是最下面那些代码]
				//当然判断多,也更保险,没有坏处.
				if(mb_strpos($v->title,$searchText)!==false){
					//上面的正则是带了小括号的,所以可以用子模式,或者称为反向引用来做.
					$title=preg_replace($regexp,'<span style="color:red">\\0</span>',$v->title);
					//将新的title替换掉原来的.
					$result[$k]->title=$title;

					//当title匹配的时候,它的文本也是肯定要显示的.不管有没有匹配内容.
					//但是如果内容也有匹配的话,则需要将匹配那部分也加个颜色.
					//其实一个文章中可能会有很多匹配,而列表页中不会全显示,只会显示一部分.
					//--------------------------------------------------------
					//那么可以用strpos来匹配一下,strpos是找匹配的第一位置,那么就刚好符合需求,
					//---------------------------------------------------------------
					//就只要第一个,然后用substr,从这个位置往前取一点文字,往后也取一点文字.拼成一个简介.
					//-------------------------------------------------------------------
					//对于中文的字符串处理,最好用mb的函数.
					//-------------------------------
					
					//1:判断内容中有没有匹配,简化操作,判断时顺便赋值
					if(($position=mb_strpos($content,$searchText))!==false){
						//那么这是有匹配的情况,而且得到了位置.
						//设定,总共只要100个字符.
						//a:先取前面的.比如50个,还要判断下,也许前面没有50个字符
						
						/*
						－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－
						 注意,这里有一个被忽略的大问题:中文不能用substr,而应该用mb_substr,
						否则截取出来的字符是会乱码的,因为中文是3个字节组成,按一个字节截取就会不成字了.
						而且字符数量上也是只有1/3
						－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－
						*/
					
						//[后加]: 	因为内容只会输出一点,所以后面加个省略号'...',让用户知道后面还有东西.

						if($position>=50){
							//前面字符够的情况.注意第三个参数正数就是个数.
							$str_before=mb_substr($content,$position-50,50,'utf-8');
							//b:后面就从$position往后数50个,因为strpos取的是符合的第一个字符位置,
							//所以这样取的话,可以直接包括匹配文本.
							$str_after=mb_substr($content,$position,50,'utf-8');
							//c:将这个字符串拼起来.
							$str=$str_before.$str_after.'...';
							//d:做正则替换.将匹配文本改颜色高亮
							//注意,如果最后的结果输出文本时发现并没有数字限制,而是全文出来了,
							//----------------------------------------------------
							//得看看preg_replace这里是不是把原来的content带进去了.那样就是匹配全文,
							//-------------------------------------------------------------
							//应该拿现在拼接出来的$str去替换.
							//--------------------------
							$str=preg_replace($regexp,'<span style="color:red">\\0</span>',$str);
							//e:反正已经循环了,那么可以直接将数据拼成数组.以title为键,以内容为值.	
							//注意,都是用替换好的,而不是原来的.
							//另外,这些数据还需要一个链接到详情页面,所以内容id也要,以拼接url
							//所以这里应该是二维数组,id关联到一个关联数组array(title=>content)
							//但二维数组的话,就不如还是直接将改动后的content,title直接放到当前的结果集对象中.
							//--------------------------------------------------------------------
							//这个比二维数组还更好获取.而且结果集对象有更多数据可用.
							//-------------------------------------------------------------------
							$result[$k]->content=$str;
						}else{
							//这里还有前面不够50个的情况.那么直接从开始取100个就好了.	
							$str=mb_substr($content,0,100,'utf-8').'...';
							//正则替换,高亮
							$str=preg_replace($regexp,'<span style="color:red">\\0</span>',$str);
							//直接放回到原对象中
							$result[$k]->content=$str;	
						}
					}else{
						//如果文章内没有匹配的话,直接从开头截取100个字符就好了.
						$str=mb_substr($content,0,100,'utf-8').'...';
						//直接放回到原对象中
						$result[$k]->content=$str;	
					}
				}else{
					//如果title没有匹配,那么应该去查一下内容是否匹配
					//注意,这里使用了mb_strpos,如果是使用strpos的话,则是针对英文字母,
					//--------------------------------------------------------
					//那么它取出的字符位置,很可能并不是一个完整的汉字位置,
					//--------------------------------------------
					//那么后面按照这个位置去用mb_substr的话,取不到东西.
					//------------------------------------------
					//原来不知道这个mb_strpos函数,既然有针对中文的,那就全套用中文就好了.
					//----------------------------------------------------------
					if(($position=mb_strpos($content,$searchText))===false){
						//内容也不匹配.那么直接跳过此次循环.
						continue;
					}else{
						//内容匹配.还是按上面的做法,拼接,并高亮
						//a:首先拼接字符串前面50个字符:
						//这次先做前面字符不够的情况
						if($position<50){
							//直接取100个字符
							$str=mb_substr($content,0,100,'utf-8').'...';
							//替换高亮
							$str=preg_replace($regexp,'<span style="color:red">\\0</span>',$str);
							//直接放回到原对象中
							$result[$k]->content=$str;
						}else{
							//也就是匹配文本前面有足够字符的情况.还是用老办法,前面取50个,后面取50个拼接起来
							$str_before=mb_substr($content,$position-50,50);
							$str_after=mb_substr($content,$position,50);

							//拼接成一个整体.
							$str=$str_before.$str_after.'...';
							//替换
							$str=preg_replace($regexp,'<span style="color:red">\\0</span>',$str);
							//放到当前对象中.
							$result[$k]->content=$str;
						}
					}
				}
			}

			//现在可以返回列表页面,并把数据带过去.记得显示方法需要的参数是表名
			return Redirect::to('search/'.$table)->with('result',$result)			//匹配的数据结果集,但某些文本和title已经替换过
													->with('count',$count);			//数据总数,这个前台也要显示出来
			
		}

		
	}

	/**
	 * ＊新闻详情页面----[显示方法]＊
	 * 
	 * 说明:
	 * 		所有新闻的详情页面都从这里生成,
	 * 		-------------------------
	 * 		因为同一类的详情页面格式都相同,
	 * 		可以用同一个前台模板.所不同的只是内容.
	 * 		-----------------------------------
	 * 		内容的改变取决于传进来的内容id.
	 * 		------------------------------------
	 * 		
	 * 		
	 * @参数:
	 * 		①$id 	对应内容表的id
	 */
	public function getNewsDetail($id){
	//1,这个还是带顶级分类过去生成导航
		$top=Category::whereRaw("pid=0 and nav!=0")->get();

	//2,根据内容id查询相关内容数据
		try{
			$news=News::find($id);
		}catch(\Exception $e){
			Log::error($e->getMessage());
			//详情页面如果查询错误就该报404了.
			return View::make('front/404');
		}
		if(!count($news)){
			return View::make('front/404');
		}

		return View::make('front/newsDetail')->with('top',$top)->with('news',$news);	
	}
	



}
