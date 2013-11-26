<?php
/**
 * ===
 * 前台
 * ===
 */

Route::get('/', function()
{
	return '前台首页';
});


/**
 * ===
 * 后台
 * ===
 */
Route::group(array(
	'prefix'=>'admin'
	),
	function(){
		Route::get('login','AdminController@login');
		Route::post('dologin','AdminController@dologin');
		Route::get('index','AdminController@index');
	}
);



