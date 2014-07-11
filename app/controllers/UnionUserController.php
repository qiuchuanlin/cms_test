<?php

/**
 * －－－－－－－－－－－－－－－－－－－－－－－－－－－－
 * UnionUserController：统一用户控制器
 * @用途：	用户登陆，记住密码，密码重置操作
 * @说明：	此控制器针对后台管理员用户来写，
 * 		但基本操作同样使用于前台用户，
 * 		因为前后台用户共用一张主表(Myusers)．
 * 		前台用户控制器可以继承该类，并重载某些方法
 * －－－－－－－－－－－－－－－－－－－－－－－－－－－－－	　　	
 */

class UnionUserController extends BaseController{

	/**
	 * login
	 * @return 后台登陆页面 
	 */
	public function login(){
		return View::make('admin.login');
	}

	/**
	 * 验证登陆
	 */
	public function dologin(){
		$name=Input::get('name');
		$password=Input::get('password');
		$logged=Input::get('logged')?true:false;

		if (Auth::attempt(array('name' => $name, 'password' => $password,'identity'=>'1'),$logged)){
				
				$id=Auth::user()->id;
				$user=Myuser::find($id);									//更新数据库的登录次数
				$user->frequency=Auth::user()->frequency+1;
				$user->save();

		    	return Redirect::intended('admin/index');
		}else{
			//error message
			$errorMsg='验证失败';
			return Redirect::to('admin/login')->withInput()->with('errorMsg',$errorMsg);
		}
	}

	/**
	 * 密码重置显示页面
	 */
	public function remind(){
		return View::make('admin.remind');
	}

	/**
	 * 发送邮件,附带密码重置链接
	 */
	public function doremind(){
		//接收传递过来的邮箱地址，并发送邮件
		$caredential=array('email'=>Input::get('email'));
		return Password::remind($caredential,function($message,$user){
			$message->subject('CMS密码重置');
		});
	}

	/**
	 * 显示重置密码页面			
	 * @param  string $token
	 */
	public function passwordReset($token){
		return View::make('admin.passwordReset')->with('token',$token);
	}

	/**
	 * 处理新密码
	 * @param  string $token 
	 */
	public function handleReset($token){
		//接收数据，token内部会处理
		$caredential=array(
			'name'=>Input::get('name'),
			'password'=>Input::get('password'),
			'password_confirmation'=>Input::get('password_confirmation')	
		);

		//真正的重置步骤
		return Password::reset($caredential,function($user,$password){
			$user->password=Hash::make($password);
			$user->save();

			//notice this closure property
			//give some imformation with the successful reset
			$successMsg='密码重置成功!';

			return Redirect::to('admin/login')->with('successMsg',$successMsg);	
		});

	}
}