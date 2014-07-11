<?php

class AdminUsers extends BaseController {

	/**
	 * 构造函数，主要实现验证是否登陆，以及CSRF
	 */
	public function __construct(){
		$this->beforefilter('auth');
		$this->beforefilter('csrf',array('only'=>'store'));
	}

	/**
	 * get admin user's profile
	 * @return profile page
	 */
	public function profile(){
		//get the current login user's information
		return View::make('admin.profile',Auth::user());
	}

	/**
	 * edit profile
	 */
	public function editProfile(){
		//用于更新数据库的数据
		$userInfo=Input::except('file','password','password_confirmation','_token');

		//图片上传
		if(Input::hasFile('file')){	
			$file=Input::file('file');
			//get uploaded file url
			$photoInfo=Image::upload($file,true);
			//determine whether the upload success or not
			if(!is_array($photoInfo) || strpos($photoInfo[1],'失败')!==false){
				//失败，返回错误信息
				$msg=$photoInfo[1]?$photoInfo[1]:$photoInfo;
				return Redirect::to('admin/profile')->with('msg',$msg)
													->withInput();
			}else{
				//编辑个人页面时需要用的头像图片
				$userInfo['photo']=$photoInfo[1];
				//更小尺寸的图片，在顶栏使用
				$userInfo['head_photo']=$photoInfo[2];
			}
		}
		
		/**
		 *---------
		 * 验证数据
		 *--------
		 */
		$data['email']=$email=Input::get('email');
		$data['password']=$password=Input::get('password');
		$data['password_confirmation']=Input::get('password_confirmation');

		//rules
		$rules=array();
		//只有更改了的才更新
		if($email!=Auth::user()->email){
			$rules['email']='required|email|unique:myusers';
		}
		//模板占位符上写的是somepassword
		if($password!='somepassword'){
			$rules['password']='required|confirmed|min:6';
			//如果密码改变，添加上密码项
			$userInfo['password']=Hash::make(Input::get('password'));
		}
		if(Input::has('more_infomation')){
			$rules['more_infomation']='max:100';
		}

		if(count($rules)>0){
			$validator=Validator::make($data,$rules);
			if($validator->fails()){
				return Redirect::to('admin/profile')->withErrors($validator)
													->withInput();
			}
		}

		//写入数据库
		DB::table('myusers')->where('id','=',Auth::user()->id)->update($userInfo);
		$suc='更新成功！';
		return Redirect::to('admin/profile')->with('suc',$suc);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('adminusers.index');
	}

	/**
	 * 添加前台用户－－表单显示页面
	 * 说明：
	 * 		前后台表单其实差不多，
	 * 		可以给个radio来选择是前台还是后台.
	 * 		只是不想改布局，所以增加一个方法，不是必须
	 */
	public function createUser()
	{
		return View::make('admin.addUsers');
	}

	/**
	 * 添加后台管理员－－表单显示页面.
	 *
	 * @return Response
	 */
	public function create(){
		//添加管理员页面
		return View::make('admin.addAdminUsers');
	}

	/**
	 * 添加用户到数据库
	 *
	 * @return Response
	 */
	public function store()
	{
		/**
		 * --------
		 * 验证数据
		 * --------
		 */
		$rule=Config::get('validateRules.rule1');
		$validator=Validator::make(Input::all(),$rule);
		if($validator->fails()){
			return Redirect::to('admin/users/create')->withInput()
													->withErrors($validator);	
		}
		
		/**
		 * -----------
		 * 添加到数据库
		 * -----------
		 */
		
		//用户数据
		$data=Input::except('_token','photo','password_confirmation');

		//处理图片
		if(Input::hasFile('photo')){
			$file=Input::file('photo');
			$ImageData=Image::upload($file,true);
			if(!is_array($ImageData)){
				//此种情况为返回错误信息
				$msg=$ImageData;
				return Redirect::to('admin/users/create')->with('msg',$msg)
														->withInput();
			}
			//添加图片url
			$data['photo']=$ImageData['1'];
			$data['head_photo']=$ImageData['2'];
		}

		//加密
		$data['password']=Hash::make($data['password']);

		//写入数据
		try{
			Myuser::create($data);
		}catch(\Exception $e){
			Log::error('***************['.$e.']*****************');
			return Redirect::to('admin/users/create')->with('msg','添加操作失败！');
		}

		return Redirect::to('admin/users/create')->with('msg','添加成功！');

	}

	/**
	 * 显示用户列表
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if($id==1){
			//后台
			//查询所有用户数据并传到模板
			$data=Myuser::where('identity','=','1')->paginate(2);
	    }else{
	    	//前台用户
	    	$data=Myuser::where('identity','=',0)->paginate(2);
	    }
	        return View::make('admin.showUsers')->with('data',$data);
	}

	/**
	 * 编辑页面
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id){
		//查询数据并显示
		$user=Myuser::find($id);
        return View::make('admin.editAdminUsers')->with('user',$user);
	}

	/**
	 * 编辑用户信息
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id){

		//接收数据
		$data=Input::except('_method','photo','_token','password_confirmation');

		//文件上传
		if(Input::hasFile('photo')){
			$file=Input::file('photo');
			$ImageData=Image::upload($file,true);
			if(!is_array($ImageData)){
				//上传失败
				$msg=$ImageData;
				return Redirect::to('admin/users/'.$id.'/edit')->with('msg',$msg)
																->withInput();
			}
			//添加图片url
			$data['photo']=$ImageData[1];
			$data['head_photo']=$ImageData[2];
		}

		
		/**
		 * -------
		 * 验证
		 * ------
		 */
		$rule=Config::get('validateRules.rule2');
		//确定是否需要验证密码
		if(!($data['password'])){
			unset($rule['password']);
			//不将密码写入数据库，如果没有改的话,模板密码栏本身是为空的
			unset($data['password']);	
		}else{
			//加密
			$data['password']=Hash::make($data['password']);
		}

		//确定是否需要验证邮箱
		//old email
		$email=Myuser::find($id)->email;
		if($data['email']==$email){
			unset($rule['email']);
			//因为email是唯一约束，如果没改，就不要更新
			unset($data['email']);
		}

		$validator=Validator::make(Input::all(),$rule);
		if($validator->fails()){
			return Redirect::to('admin/users/'.$id.'/edit')->withErrors($validator)
														->withInput();
		}

		//写入数据库
		try{
			DB::table('myusers')->where('id','=',$id)->update($data);
		}catch(\Exception $e){
			Log::error('[更改用户信息出错！]'.$e->getMessage());
			$msg='操作失败！';
			return Redirect::to('admin/users/'.$id.'/edit')->with('msg',$msg)
														->withInput();
		}

		$msg='更新成功！';
		return Redirect::to('admin/users/'.$id.'/edit')->with('msg',$msg);
	}

	/**
	 * 删除数据
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id){
		//接收ajax数据，删除某条用户数据
		if(Request::ajax()){
			try{
				DB::table('myusers')->delete($id);
			}catch(\Exception $e){
				//出错
				Log::error('删除错误'.$e);
				echo 0;
				return;
			}
			//成功
			echo 1;
		}
	}

	
}
