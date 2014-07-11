<?php

/**
 * 验证用户的规则
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
	)
);