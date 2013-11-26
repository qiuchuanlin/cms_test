<?php

/**
 * 后台控制器
 */

class AdminController extends BaseController{

	/**
	 * 构造函数
	 */
	public function __construct() {
		//用内置filter验证登陆,token等
		$this->beforeFilter('auth',array('except'=>array('dologin','login')));	

	}

	/**
	 * login
	 * @return 后台登陆页面 
	 */
	public function login(){
		return View::make('admin.login');
	}

	/**
	 * 验证登陆
	 * @return  
	 */
	public function dologin(){
		$name=Input::get('name');
		$password=Input::get('password');
		$logged=Input::get('logged')?true:false;

		if (Auth::attempt(array('name' => $name, 'password' => $password),$logged))
		{
		    	return Redirect::intended('admin/index');
		}else{
			return '验证失败！';
		}
	}

	/**
	 * 后台首页
	 */
	public function index(){
		return View::make('admin.index');
	}
}