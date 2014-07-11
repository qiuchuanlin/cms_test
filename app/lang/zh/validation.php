<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	|  following language lines contain  default error messages used by
	|  validator class. Some of se rules have multiple versions such
	| such as  size rules. Feel free to tweak each of se messages.
	|
	*/

	"accepted"         => " :attribute 必须要接受才能进行此项操作.",
	"active_url"       => " :attribute 不是有效的URL.",
	"after"            => " :attribute must be a date after :date.",
	"alpha"            => " :attribute may only contain letters.",
	"alpha_dash"       => " :attribute may only contain letters, numbers, and dashes.",
	"alpha_num"        => " :attribute may only contain letters and numbers.",
	"array"            => " :attribute must be an array.",
	"before"           => " :attribute must be a date before :date.",
	"between"          => array(
		"numeric" => " :attribute must be between :min - :max.",
		"file"    => " :attribute must be between :min - :max kilobytes.",
		"string"  => " :attribute must be between :min - :max characters.",
		"array"   => " :attribute must have between :min - :max items.",
	),
	"confirmed"        => "两次:attribute不匹配.",
	"date"             => " :attribute is not a valid date.",
	"date_format"      => " :attribute does not match  format :format.",
	"different"        => " :attribute and :or must be different.",
	"digits"           => " :attribute must be :digits digits.",
	"digits_between"   => " :attribute must be between :min and :max digits.",
	"email"            => " :attribute格式无效.",
	"exists"           => " selected :attribute is invalid.",
	"image"            => " :attribute must be an image.",
	"in"               => " selected :attribute is invalid.",
	"integer"          => " :attribute must be an integer.",
	"ip"               => " :attribute must be a valid IP address.",
	"max"              => array(
		"numeric" => " :attribute may not be greater than :max.",
		"file"    => " :attribute may not be greater than :max kilobytes.",
		"string"  => " :attribute may not be greater than :max characters.",
		"array"   => " :attribute may not have more than :max items.",
	),
	"mimes"            => " :attribute must be a file of type: :values.",
	"min"              => array(
		"numeric" => " :attribute must be at least :min.",
		"file"    => " :attribute must be at least :min kilobytes.",
		"string"  => " :attribute最少要:min个字符.",
		"array"   => " :attribute must have at least :min items.",
	),
	"not_in"           => " selected :attribute is invalid.",
	"numeric"          => " :attribute must be a number.",
	"regex"            => " :attribute format is invalid.",
	"required"         => " :attribute必须要填.",
	"required_if"      => " :attribute field is required when :or is :value.",
	"required_with"    => " :attribute field is required when :values is present.",
	"required_without" => " :attribute field is required when :values is not present.",
	"same"             => " :attribute and :or must match.",
	"size"             => array(
		"numeric" => " :attribute must be :size.",
		"file"    => " :attribute must be :size kilobytes.",
		"string"  => " :attribute must be :size characters.",
		"array"   => " :attribute must contain :size items.",
	),
	"unique"           => " :attribute已经存在.",
	"url"              => " :attribute格式无效.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using 
	| convention "attribute.rule" to name  lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'password'=>array(
			'confirmed'=>'两次输入的密码不相同！',
			'min'=>'密码至少需要6个字符!'
		),
		'email'=>array(
			'email'=>'邮箱格式不正确！',
			'unique'=>'该邮箱已经被使用！'		
		)
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	|  following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
			'email'=>'邮箱',
			'name'=>'用户名',
			'more_infomation'=>'个人简介',
			'password'=>'密码',
			'category_name'=>'分类名',
			'model'=>'模板',
			'alias'=>'别名',
			'title'=>'新闻标题',
			'content'=>'新闻内容'
	)
);
