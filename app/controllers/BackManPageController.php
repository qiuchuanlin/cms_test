<?php

/**
 * －－－－－－－－－－－－－－－－－
 *该控制器用来处理后台首页以及一些杂项，登出，工具等
 * －－－－－－－－－－－－－－－－－
 */
class BackManPageController extends BaseController{

	/**
	 * 构造函数，filter验证登陆
	 */
	public function __construct(){
		$this->beforefilter('auth');
	}

	/**
	 * 显示后台首页
	 */
	
	public function getIndex()
	{
		//layout 是后台基本框架，就是所有页面通用的部分
		
		/**
		 * 用途:查询分类信息
		 * 说明:在后台左边栏只显示顶级分类和二级分类
		 */
		$top=Category::where('pid','=','0')->get();							 	//顶级分类
		$second=DB::table('categorys')->where('path','like','0,__')->get();		//二级分类,注意这种写法'0,__',mysql的下划线是代表任意字符,但是数量是1个,这里是两个下划线,也就是匹配像'0,1,'这样的二级分类.

		//左边栏：栏目管理，html模板		[注意:这个思路改了,代码以后得改]
		$htmlmodel=Config::get('common.htmlmodel');

		//左边栏:　内容管理，输出的还是顶级分类

		return View::make('admin.layout')->with('top',$top)->with('second',$second)
															->with('htmlmodel',$htmlmodel);
	}

	/**
	 * 注意：这个其实才是主要的后台首页内容,
	 * 上面的Index是主要的框架，或者说清楚点,就是包括上边和左边栏目.而内容改变在这，通过layout里面放一个iframe实现
	 */
	public function getIndexContent(){
		/*添加所需变量*/
		$arr['user']=Auth::user()->name;						//用户名
		$arr['time']=date('Y-m-d h:i:s',time());				//当前时间
		$arr['frequency']=Auth::user()->frequency+1;			//登录后台次数	

		$last_login=Auth::user()->updated_at;					//上次登录时间
		$arr['last_login']=get_object_vars($last_login)['date'];

		//detect if the user are first time login
		if(!(Auth::user()->frequency)){
			$arr['last_login']='这是您首次登陆!';
		}

		$arr['ip']=$_SERVER['REMOTE_ADDR'];							//登陆ip
		$arr['server_software']=$_SERVER['SERVER_SOFTWARE'];		//获得apche2版本
		$arr['os']=PHP_OS;											//操作系统
		$arr['php_version']=PHP_VERSION;							//php版本

		$data=DB::select('select version()');						//查询mysql版本
		$arr['mysql_version']=array_values(get_object_vars($data[0]))[0];	

		$arr['upload_allow']=ini_get('file_uploads')?'允许':'不许';	//是否允许文件上传
		$arr['upload_max_filesize']=ini_get('upload_max_filesize');	//允许上传的最大文件
		$arr['post_max_size']=ini_get('post_max_size');				//表单上传最大size
		$arr['domain']=$_SERVER['SERVER_NAME'];						//域名
		$arr['head_photo']=Auth::user()->head_photo;				//用户头像信息
		$arr['email']=Auth::user()->email;							//用户邮箱

		return View::make('admin.index',$arr);
	}


	/**
	 * 给图片缩放那个iframe创建视图
	 */
	public function getResize(){
		return View::make('admin.resizer');
	}

	/**
	 * 专门缩放图片
	 */
	public function postResize(){
		//接收数据
		$data=Input::all();
		//处理宽高，只要数字		其实验证数字,laravel也有一个专门的规则numeric
		$reg='/(\d)+/';
		if(!preg_match($reg, $data['width'],$arr)){
			return Redirect::to('admin/resize')->with('msg','宽度必须有数字!');	
		}elseif(!preg_match($reg, $data['height'],$arr2)){
			return Redirect::to('admin/resize')->with('msg','高度必须有数字!');
		}

		//处理图片和路径
		if(!Input::hasFile('pic')){
			return Redirect::to('admin/resize')->with('msg','没有图片被上传!');
		}elseif(!$data['folder']){
			return Redirect::to('admin/resize')->with('msg','没有指定目录!');
		}
		//处理图片缩放
		$file=Input::file('pic');
		$back=Image::upload($file,true,null,$data['folder'],array($data['width'],$data['height']),true);
		
		//返回信息
		if(is_array($back)){
			//成功
			return Redirect::to('admin/resize')->with('msg','缩放成功,路径:'.$back[1]);
		}else{
			//失败
			return Redirect::to('admin/resize')->with('msg',$back);
		}
	}

	/**
	 * 登出
	 */
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('admin/login');
	}

}