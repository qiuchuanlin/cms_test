<?php

/**
 * ～～～～～～～
 * 后台相关路由*
 * ～～～～～～～
 */

/**
 * －－－－－－－－－－－－－－－－－－
 * 用户登陆，记住密码，密码重置
 * －－－－－－－－－－－－－－－－－－
 */
Route::group(array(
	'prefix'=>'admin'
	),
	function(){
		//登陆页面
		Route::get('login','UnionUserController@login');	

		//处理登陆		
		Route::post('dologin','UnionUserController@dologin');

		//密码重置显示页面
		Route::get('remind','UnionUserController@remind');

		//发送包含重置链接的邮件
		Route::post('remind','UnionUserController@doremind');

		//重置页面
		Route::get('password/reset/{token}','UnionUserController@passwordReset');

		//处理发过来的新密码
		Route::post('password/reset/{token}','UnionUserController@handleReset');

	}
);

/**
 * －－－－－－－－－－－－－－
 * 后台用户管理
 * －－－－－－－－－－－－－－
 */
Route::group(array('prefix'=>'admin'),function(){
		//用户资料
		Route::get('profile','AdminUsers@profile');
		Route::post('profile','AdminUsers@editProfile');
		//前台用户－－添加表单
		Route::get('adduser','AdminUsers@createUser');

		Route::resource('users','AdminUsers');
	}
);


/**
 * －－－－－－－－－－－－－
 * 后台首页以及一些杂项(如工具)
 * －－－－－－－－－－－－－
 */
Route::controller('admin','BackManPageController');





//用来做测试的一个路由
Route::any('test',function(){
	return Hash::make('1');
});


/**
 * ～～～～～～～
 * 前台相关路由*
 * ～～～～～～～
 */
	
Route::controller('/','FrontUserController');

