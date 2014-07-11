<?php

/**
 * ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
 * 分类管理
 * ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
 */
class CategoryController extends BaseController{

	/**
	 * 构造函数，验证登录
	 */
	public function __construct(){
		$this->beforeFilter('auth');
	}

	/**
	 * 添加顶级分类||分类列表： （页面）
	 * 说明：该页面有很多东西，除了添加分类，还有分类列表等，用js切换显示．
	 * 		所以需要将所有需要用到的数据传过去
	 */			
	public function getAddTopCategory(){
		//获得所有分类
		try{	
			$list=DB::table('categorys')->orderBy(DB::raw("concat(path,id)"))->get();
		}catch(\Exception $e){
			return $e->getMessage();
		}

		//另外还需要一个不是终极类的分类组成的数据.用来作移动操作.因为终极类肯定没有子类了,也不能往里面移
		$listNotFinal=Category::where('final','<>',1)->get();

		//因为页面上要判断当前类是否有实际存在子类,所以这里先循环出来,在真正有子类的数据上用个字段标明
		//注意,这里实际上查了两次,一次查所有,让后再foreach出来筛选
		//-------------------------------------------------
		foreach($list as $k=>$v){
			$path=$v->path;
			$id=$v->id;
			$c=$path.$id;		//这个是拼接一下如0,1如果它有子类,就会like这个'0,1,....';
			
			//那这里还要再查一下看是否有子类
			$result=Category::where("path",'like',$c.'%')->get();
			//判断是否成功
			if(count($result)){
				//有数据,也就是有子类的.给它加个属性.
				$list[$k]->child=1;
			}else{
				$list[$k]->child=0;
			}

			/*[后加] 另外还有一个需求,需要知道每一个分类(不仅仅是顶级分类)的relation,对应的表是什么,因为删除子类操作的话,得删除内容,删除内容需要知道内容表.
			子类不填那个relation字段,到这里来查的话,毕竟逻辑上还是非常麻烦的.
			首先得查出所有的顶级分类,然后每个顶级分类要查它的所有子类,然后循环每个子类,再往子类上插一个relation字段.
			这样的步骤是非常繁琐了.不如直接在添加分类的时候,就给所有分类加上那个字段.所以下面的添加子类方法要改一下*/
		}

		/*下面所要查的这个,是要在删除分类时,带入到删除方法,才知道对应的内容表.
			因为所有编辑,删除功能,都是在这一个方法就显示出来,那么这是删除和编辑唯一的数据源
			下面编辑,删除需要什么东西,要来这里查到并给出
		也就是说显示方法是关联到操作放的,通常是作为数据源,当该页面上明确知道有哪些操作时,
		就该想到应该为后面的操作准备数据.
		另外说明下,在写这个方法时,只有顶级分类有对应的表这一项,后来改了,每个分类在添加时都给它加上了对应的内容表字段.
		那么下面这条如果现在写的话,就不需要了.直接在上面的数据中就可以提取出relation字段.

		错了,下面这条是说的'model_readable'这个字段,以前也只是在顶级分类才有.
		这个是为了在添加顶级分类时用来做select用的.
		*/

		//查询所有模板(内容表),在添加顶级分类,或者移动某类为顶级分类的时候得选择这个.这个是写好在配置文件里的
		$contentTable=Config::get("categoryRelationType.table");
		//但是这个数组呢是英文名和中文名的名值对.模板上是要select来使用.所以索引化一下.
		$contentTable=array_values($contentTable);

		return View::make('admin.manageTopCategory')->with('list',$list)->with('listNotFinal',$listNotFinal)->with('contentTable',$contentTable);
	}

	/**
	 * 添加顶级分类： （操作）
	 */
	public function postAddTopCategory(){
		//接收数据
		$data=Input::except('positon','_token');

		//验证数据
		$msg='';
		$rule=Config::get('validateRules.rule4');
		$validator=Validator::make($data,$rule);
		if($validator->fails()){
			$messages=$validator->messages();
			$msg=$messages->all()[0];
			return Redirect::to('admin/category/add-top-category')->with('msg',$msg)->withInput();
		}

		//模板必须选择
		if($data['model']=='default'){
			$msg='模板必须选择';
			return Redirect::to('admin/category/add-top-category')->with('msg',$msg)->withInput();
		}

		//拼接pid,path之类
		$data['pid']=0;
		$data['path']='0,';

		//获得含有所有表名的数组,但英文表名是作为键名的
			$tables=Config::get('categoryRelationType.table');
		//而传过来的是像索引一样的数字.所以先复制一个将它索引化,对应数字,
		//通过数字取得索引数组的	同名元素,然后用array_search来返回原数组的键名
			$table2=$tables;
			$table2=array_values($table2);
			$value=$table2[$data['model']];		//这个就是得出来的元素.
			$key=array_search($value,$tables);	//返回对应键名,也就是表的英文名
			$data['relation']=$key;				//放入数组写入数据库	
			$data['model_readable']=$value; 	//中文名

		// var_dump($data);exit;
		//写入数据库
		try{
			Category::create($data);
		}catch(\Exception $e){
			Log::error($e->getMessage());
			$msg='操作失败！';
			return DB::getQueryLog();
			return Redirect::to('admin/category/add-top-category')->with('msg',$msg)->withInput();
		}

		//成功
		$msg='添加成功!';
		return Redirect::to('admin/category/add-top-category')->with('msg',$msg);
	}

	/**
	 * 添加子类(ajax传过来处理的)
	 */
	public function postAddCategory(){
		//接收参数,并拼接数据
		$data['pid']=Input::get('id');											//所属顶级分类id
		$data['category_name']=Input::get('category_name');						//类名
		$data['path']=Category::find($data['pid'])->path.$data['pid'].',';		//拼接path
		$data['final']=Input::get('final');										//是否最终分类
		$data['nav']=Input::get('nav');											//是否添加到导航栏

		//[后加]	这里还是需要给每个子类都加上一个relation字段,方便删除子类时去删除内容,需要这个字段.
		//如果没有这个字段,每次都要去查顶级分类的该字段,逻辑上很繁琐.
		//那么先得出顶级分类的relation
		$top=Category::find($data['pid']);
		$data['relation']=$top->relation;
		//另外,既然加了relation,不妨再加上model和model_readable.
		//这两个字段其实和relation代表的是一样的东西,都是代表内容表,不过写法不一样:
		//①relation一般是英文字符串,如'news',直接关联'news'表
		//②model是数字,它对应一个数组,比如array(0=>'news',1=>'malls').用数字表示,主要便于在select里面输出
		//③model_readable是中文描述的内容表或者说版块.比如这里'news'就会描述成'新闻',这也是便于在前台模板上输出,让人能明了是什么东西
		//这个字段关联config/categoryRelationType这个配置文件里的数组,像这样的形式:
		//		'table'=>array('news'=>'新闻','malls'=>'商城','books'=>'书城')
		//		第二个数字model,也是通过array_values操作这个数组而演化而来.
		
		//当然现在添加子类是不需要自己去操作那个数组了.因为顶级分类里面有现成的.直接拿过来就好了
		$data['model']=$top->model;
		$data['model_readable']=$top->model_readable;

		//验证数据
		$validator=Validator::make($data,Config::get('validateRules.rule5'));
		if($validator->fails()){
			$messages=$validator->messages();
			return $messages->all()[0];
		}

		
		try{
			Category::create($data);
		}catch(\Exception $e){
			Log::error($e->getMessage());
			return '添加失败！';
		}

		//成功
		return 1;
	}

	/**
	 * 列表中添加子类
	 */
	public function postAddChildCategory(){
		//接收数据
		$data['pid']=Input::get('id');
		$data['category_name']=Input::get('category_name');
		$data['path']=Category::find($data['pid'])->path.$data['pid'].',';
		$data['nav']=Input::get('nav');
		$data['final']=Input::get('final');

		//[后加]	这里还是需要给每个子类都加上一个relation字段,方便删除子类时需要这个字段.
		//如果没有这个字段,每次都要去查顶级分类的该字段,逻辑上很繁琐
		//那么先得出顶级分类的relation
		$top=Category::find($data['pid']);
		$data['relation']=$top->relation;
		//另外,既然加了relation,不妨再加上model和model_readable.
		//当然现在添加子类是不需要自己去操作那个数组了.因为顶级分类里面有现成的.直接拿过来就好了
		$data['model']=$top->model;
		$data['model_readable']=$top->model_readable;

		//验证
		$rule=Config::get('validateRules.rule5');
		$validator=Validator::make($data,$rule);
		if($validator->fails()){
			$messages=$validator->messages();
			return $messages->first('category_name');
		}

		//写入数据库
		try{
			Category::create($data);
		}catch(\Exception $e){
			return '添加失败！'.$e->getMessage();
		}

		//成功
		return 1;
	}

	/**
	 * 编辑分类	[操作]
	 * 参数:
	 * 		从ajax拼接过来的,类似于:
	 * 				category_name&新闻&self_id&1&self_move&1&child_other&1
	 *     			因为最多只能接收5个参数,而ajax要传的不只这么多,只好拼接成一个参数.这边来做字符串处理
	 *     	解释一下各个名值对:
	 *     		①category_name:	 	希望改成这个类名
	 *     		②self_id: 			自身类的id
	 *     		③self_move: 		自身的目标类id
	 *     		④relation:			自身类如果希望改成顶级分类,需要对应的内容表.
	 *     		⑤child_move:		子类的目标类id
	 *     		⑥child_other:		这是一个radio值 	[值为1时表示删除子类,值为2时表示随父类一起移动]
	 *
	 * 			---注:⑤⑥都是子类的操作,应该是有三种选择,⑤是select.三种之中只能选一个.所以要判断一下.
	 */
	public function postEditCategory($a){
		//这边接收到数据之后,首先拆分字符串
		$arr=explode("&",$a);
		//将数组拼接一下,对应上面所指明的名/值.类似于array('category_name'=>'新闻','self_id'=>1)这样的格式
		foreach($arr as $k=>$v){
			if($k%2==0){
				//这个是名
				$list[$v]=$arr[$k+1];
			}
		}

		//多处要使用到的数据
		$self=Category::find($list['self_id']);									//自身整条数据
		$self_path=$self->path;													//自身类的path
		$child_path=$self_path.$list['self_id'].',';							//拼接一下子类的类似path
		$relation=$self->relation;												//对应的内容表.

		/**---------------------
		 * 现在就应该来处理数据了
		 * --------------------
		 */
		//数据验证的话,其实只有类名的唯一性验证:
		if(array_key_exists('category_name',$list)){
			//验证类名是否唯一
			$validator=Validator::make($list,array('category_name'=>'unique:categorys'));
			//验证失败返回错误信息
			if($validator->fails()){
				$msg=$validator->messages()->first('category_name');
				return $msg;
			}
			//更改类名
			try{
				Category::where("id",$list['self_id'])->update(array('category_name'=>$list['category_name']));
			}catch(\Exception $e){
				//出错
				Log::error($e->getMessage());
				return '修改失败!'.DB::getQueryLog();
			}
		}

		//其他情况:
		//1,自身需要移动
		if(array_key_exists('self_move',$list)){
			//因为已经写好了移动类,直接调用方法移动
			//该方法的参数为:表名,自身id,目标id
			//成功返回值是'success',

			//有一种特殊情况,使自身类变成顶级分类,这种情况并不需要移动方法,只需要改path为'0,',pid改成0,就行了
			//另外还要更改它的relation,对应的内容表.
			//在js那边已经有了验证,当选择顶级分类的时候必须有选择内容表.
			//所以这里直接获得就行了.
			if($list['self_move']=='top'){
				//内容表名.
				$relation=$list['relation'];
				//注意,这个是select的value,是数字,往表里面插入希望是英文的表名,所以得获得配置文件的数组来对应
				//为什么要用这个配置文件的数组?因为那个select就是根据这个数组来生成的.
				$tables=Config::get('categoryRelationType.table');
				//这个数组是关联数组,想要得到的是键名.复制一个数组索引化,对应提供的数字
				$table2=array_values($tables);
				$value=$table2[$relation];			//对应$tables的元素,但要的是键名,这个也有用,是表名的中文描述
				$key=array_search($value,$tables);	//这个就是最终对应的键名-表名了.

				try{
					Category::where('id',$list['self_id'])->update(array('path'=>'0,','pid'=>0,'relation'=>$key,'model_readable'=>$value));
				}catch(\Exception $e){
					Log::error($e->getMessage());
					return '更新为顶级分类时出错!'.DB::getQueryLog();
				}
			}else{
				//普通情况,移动到别的类下,调用移动方法就好了
				$result=CategoryFacade::move('categorys',$list['self_id'],$list['self_move']);
				if($result!='success'){
					//返回错误信息
					return $result;	
				}
			}
		}

		//2,子类移动到某个目标类下	
		if(array_key_exists('child_move',$list)){
			//这里所说的子类就是上面移动的自身类的子类,所以得先查出来,需要用到的是id
			
			$child=Category::where('path','like',$child_path.'%')->orderBy('path')->get();	//获得所有子类
			//找到所有id,拼成数组
			foreach($child as $v){
				$all_id[]=$v->id;
			}

			//移动
			$result=CategoryFacade::move('categorys',$all_id,$list['child_move']);
			if($result!='success'){
				//返回错误信息
				return $result;
			}
			
		}

		//3,子类的其他操作
		if(array_key_exists('child_other',$list)){
			if($list['child_other']==1){
				//这是要删除子类,直接找对应的删除就好了
				//[后加]	删除类一定要删除对应的内容,这个应该作为常识记下来.
				//A:现在应该先将子类的id,拼成数组,然后到内容表,用whereIn删除掉内容.
				$child=Category::where('path','like',$child_path.'%')->get();	//所有子类

				//B:循环拼接它们的id
				foreach($child as $v){
					$all_id[]=$v->id;
				}

				//C:得到内容表名,根据上面的自身数据的relation字段就行了.因为它的子类和它的内容表肯定是一样的
				//这个应该放到最上面去做,而且是父类移动之前,父类移动之后,对应的内容表也是改了的.[这个前面并未想起来做.应该添加到移动函数中]
				// $relation=$self->relation;

				//D:内容表删除
					//[后加]	 删除内容时,有个问题,比如才刚建了分类,而这个分类不满意,要删除,但此时尚未建立内容表.
					//		这个时候就应该判断一下是否有表.
				
				//判断表是否存在
				$check=DB::select("select * from information_schema.tables where table_name='$relation'");			
				
				if($check){
					//表存在的情况,才删除内容.否则直接删除类就好了
					try{
						DB::table($relation)->whereIn('category_id',$all_id)->delete();
					}catch(\Exception $e){
						Log::error($e->getMessage());
						return '删除子类内容失败!';
					}
				}		

				//E:删除内容成功之后,最后删除子分类.
				try{
					Category::where('path','like',$child_path.'%')->delete();
				}catch(\Exception $e){
					Log::error($e->getMessage());
					return '删除子类失败!';
				}
			}else{
				//这个radio就两个值1和2.	2表示和父类一起移动到某个类下.也就是说目标类是一样的.
				//但是父类上面已经先移动过去了.为了保持这种继承关系,所以这些子类还得移动到现在的父类下.
				
				//先得到所有子类id
				$child=Category::where('path','like',$child_path.'%')->orderBy('path')->get();
				//找到所有id,拼成数组
				foreach($child as $v){
					$all_id[]=$v->id;
				}
				
				//直接调用移动方法就行了,父类虽然移动了,但是它的id没有改过,还是原来的
				$result=CategoryFacade::move('categorys',$all_id,$list['self_id']);
				if($result!='success'){
					//错误信息
					return $result;
				}
			}
		}

		//返回成功信息
		return 1;

	}

	/**
	 * －－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－
	 *＊删除分类＊
	 *
	 * 说明:这个是$.post,ajx传过来的数据,直接用Input::get之类获取
	 * 		传过来的数据类似:
	 * 			{"category_id":"1","action":"remove"}
	 * 			{"category_id":"1","target_id":"7"}
	 * 		如果没有子类的,就只有一个category_id会传过来.
	 *    	
	 *    	①category_id: 	当前类的分类id
	 *    	②action:		这个是固定值remove,有这个就表示子类也删除
	 *    	③target_id: 	这个是子类移动的话,目标分类的id
	 *
	 * 		注:	②③只会有一个过来.
	 * 	
	 * －－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－
	 */
	public function postDeleteCategory(){
	//1,首先能肯定会有的,就是当前类的id,但是先不急着删自身,先看子类删除或者移动是否正常.
		$self_id=Input::get("category_id");		//自身id
		//子类操作肯定涉及自身path的,所以先查一下
		try{
			$self=Category::find($self_id);
		}catch(\Exception $e){
			//查询出错
			Log::error($e->getMessage());
			return '数据库操作错误!';
		}
		$self_path=$self->path;
		//成功之后,拼接下子类类似path部分.
		$like_path=$self_path.$self_id.',';
		$relation=$self->relation;					//当前对应的表.删除内容时需要用到这个


	//2,处理子类删除,
		if(Input::has("action")){
		//[后加] 删除分类,必须要删除内容,没有分类的目录对于动态显示来说没有意义.
		//那么就不要急着删分类了,先把内容给删掉.
		
		//A:拼接子类category id组成的数组,用whereIn到内容表去查所有子类对应的内容
			$child=Category::where('path','like',$like_path)->get();	//这个就不做判断了,因为既然来到这里,表明肯定有子类.
			foreach($child as $v){
				$all_id[]=$v->id;
			}
		//B:查询内容表并删除对应内容,要删除内容,首先需要对应的表名,这个是在顶级分类那条数据上有.
		//那么首先找显示页面的源头,是最顶上的getAddTopCategory()方法,那么让它传一个表名到页面上,然后放到button,js获取带过来.
		//事实上源头方法中有一个内容列表,包含全部的内容,所以页面上直接提取对应字段就好了.
		//上面说的都不需要,因为这里传了一个当前类的id进来,那么它的所有子类都是一样的relation,
		//前面已经修改过了,所有分类入库的时候都加上relation字段.那就不用去找顶级分类或者别的了.
		//直接这里查下就知道了,上面已经查出来了本身的这条数据$self,这里直接得出就好了.
		
			//删除子分类对应的内容
			//[后加]这个同样要判断下,是否有表,有的时候只建了分类,还没建内容表.
			$check=DB::select("select * from information_schema.tables where table_name='$relation'");
			if(count($check)){	
				//有内容表的时候才去删除内容,这样避免报错.
				try{
					DB::table($relation)->whereIn('category_id',$all_id)->delete();
				}catch(\Exception $e){
					Log::error($e->getMessage());
					return '删除子类内容失败!';
				}
			}
							
			//成功之后,删除子分类.
			try{
				Category::where('path','like',$like_path)->delete();
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '数据库操作错误!';
			}
		}

	//3,处理子类移动.
		if(Input::has("target_id")){
			//首先得得到所有子类id,放进一个数组,这是根据需要调用的移动方法的参数来做的.并且做了下排序,以保持继承关系
			try{
				$result=Category::where('path','like',$like_path)->orderBy('path')->get();
			}catch(\Exception $e){
				Log::error($e->getMessage());
				return '数据库操作错误!'.DB::getQueryLog();
			}

			//移动方法需要的是一个id数组,所以先循环拼成数组.
			foreach($result as $v){
				$all_id[]=$v->id;
			}

			//调用移动方法来移动,成功是返回success
			$back=CategoryFacade::move('categorys',$all_id,Input::get('target_id'));
			if($back!='success'){
				return '移动失败!';
			}
		}

	//4,子类都做完之后,剩下的情况是没有子类的,这时候其实应该先去对应的内容表把相关数据删了,
	//然后再回来删除分类.对于现在的流程来说,没有分类的内容没有意义了.

		//A:找对应内容表,这里,所有顶级分类的数据上都有一个relation字段对应它的内容表.
		//那么现在要做的是,先找到顶级分类.根据传过来的category_id可以得到自身的这条数据.
		//分类表是固定的,所以直接用Eloquent,至于查表内容,就得用query builder了,因为那个是不确定的.
		try{
			$category=Category::find($self_id);
		}catch(\Exception $e){
			Log::error($e->getMessage());
			//返回错误信息.其实这个只要没写错是没有错误的可能的,因为删除请求是从分类列表来的,表明肯定有.
			return '数据库操作错误1';
		}
		
		//B:有一种特殊情况,本身就是顶级分类,就可以直接得到它的relation对应表.
		//否则的话,就取出path的前两个数字,与父类的'path.id'比较.这个可以参看数据库.
		//顶级分类path都是'0,',它的子类都是'0,'拼接上它的id,假设这个id为5的话,
		//那表示它的子类开头两个都会是'0,5'--否则就不是它的子类了.
		//查子类可以通过父类的这个path特征往下查,现在查顶级分类,就是逆推了. 
		$path=$category->path;
		if($path=='0,'){
			//顶级分类,直接得到内容表名,这里先不急着查内容,先把查表名的操作都做完,后面一起查询.
			$relation=$category->relation;
		}else{
			//那就得取出它的前三个字符了,像上面已经说过的类似于'0,5'这样的子串
			//但是得注意一点,如果顶级分类的id是两位数以上,如15,那么就得是'0,15'才匹配了
			//当然也有可能是更多位数,所以不能按字符个数来找.应该将这个字符串拆掉,以','来分,
			//然后取两个拼接起来.
			$arr=explode(',',$path);
			$subpath=$arr[0].','.$arr[1];
			//通过这个子串,去匹配出顶级分类.写太多try/catch了,现在不写了,简单点
			//注意别漏掉了concat.只有拼接过的顶级分类path,才会像上面描述的这样
			//这个地方,还是测试了多次才通过,
			//原因:
			//		①concat是原生mysql函数,在laravel中必须用whereRaw或者DB::select之类的原始写法
			//		②原始写法就得带上引号,外面双引号,解析里面变量,变量外套单引号,字段不要引号.
			//			这样的写法和普通laravel的写法是大不一样的,可观察上下文的其他数据库操作!
			$top=Category::whereRaw("concat(path,id)='$subpath'")->first();
			//然后得到relation

			/*这一段代码写的是没错的,但是上面后来又改了,所有类都有relation字段,就不需要去顶级分类上查了.
				不过这种做法应该记住.
			*/
		
			$relation=$top->relation;
		}

		//C:有了内容表之后,先去删内容,最后回来删分类
		//同样先判断下,有没有内容表
		$check=DB::select("select * from information_schema.tables where table_name='$relation'");
		if(count($check)){
			//有内容时才删
			DB::table($relation)->where('category_id',$self_id)->delete();
		}

		//D:然后删除分类:
		try{
			$result=Category::where('id',$self_id)->delete();
		}catch(\Exception $e){
			Log::error($e->getMessage());
			return '数据库操作错误2!';
		}

		//5,所有操作做完了,返回成功信息给ajax
		return 1;
	}
	
}