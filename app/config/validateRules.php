<?php

/**
 * 自定义验证规则
 */
return array(
	//后台添加用户的验证规则
	'rule1'=>array(
		'name'=>'required|alpha_dash|min:6|unique:myusers,name',
		'password'=>'required|confirmed|min:6',
		'email'=>'required|email|unique:myusers,email',
		'more_infomation'=>'max:100'
	),	
	//编辑用户信息的验证规则，因为设定用户名不能改，所以去掉name
	'rule2'=>array(
		'password'=>'required|confirmed|min:6',
		'email'=>'required|email|unique:myusers,email',
		'more_infomation'=>'max:100'
	),
	//前台注册
	'rule3'=>array(
		'name'=>'required|alpha_dash|min:6|unique:myusers,name',
		'password'=>'required|min:6',
		'email'=>'required|email|unique:myusers,email'
	),
	//添加顶级分类	
	'rule4'=>array(
		'category_name'=>'required|unique:categorys,category_name',
		'model'=>'required',
		'alias'=>'unique:categorys,alias'	
	),
	//添加二级分类,添加子类
	'rule5'=>array(
		'category_name'=>'required|unique:categorys,category_name'
	)
);