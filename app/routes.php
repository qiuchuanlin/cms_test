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
 * －－－－－－－－－－
 * 后台分类管理
 * －－－－－－－－－－－
 */
Route::controller('admin/category','CategoryController');

/**
 * －－－－－－－－－－－－
 *后台栏目管理
 * －－－－－－－－－－－－
 */
Route::controller('admin/section','SectionController');

/**
 * －－－－－－－－－－－－
 *后台内容管理
 * －－－－－－－－－－－－
 */


//因为用uploadify传的图片经过route转到控制器后无法正常工作.
//所以只好在Route里处理图片
//-------------------------------------------------------------------
//注意:
//		添加新闻已经用ckeditor来做.那个编辑器可以选择图片url的方式在文章中插入图片
//		所以已经不需要自己去安排图片.那么这个上传图片,仅仅就是上传,然后将url弹窗一下.
Route::post('newsphotos',function(){
	if(Input::hasFile('Filedata')){
		$file=Input::file('Filedata');	//file对象
		//获得缩放规则,在下面的缩放函数中使用:
		$rule=Config::get('image.dimensions2');
		//调用自定义的Facade,Image类来上传和缩放
		$result=Image::upload($file,true,'uploads/news',null,$rule,true);
		if(is_array($result)){
			//此时为上传成功,返回的数组中包括上传图片以及缩放后的url
			//本来想把该数据放到session,然后控制器的方法(处理其他的上传数据)能够调用.
			//但测试表明,Route里的session,控制器里根本接收不到.有那个键,没有值.
			//所以,只好写入文件,让控制器方法去文件中读取.
			//也许可以用redirect::to转到其他数据的方法中去.
			// $txt='../app/config/local/1.txt';
			// touch($txt);
			// $h=fopen($txt,'ab');
			// if(fwrite($h,serialize($result))){
			// 	echo 1;
			// }else{
			// 	echo 2;
			// }
			// exit;
			
			// 现在只需要表明上传成功就行了.
			return 1;
		}else{
			//此时为错误信息
			return $result;
		}
	}
	//上传文件发生错误.
	return '未知错误!';
});

//----------------------------------------------------------------------------
//测试:

/*Route::get('test',function(){
		$txt='../app/config/local/1.txt';
			touch($txt);
			$h=fopen($txt,'ab');
			if(fwrite($h,'a')){
				echo 1;
			}else{
				echo 2;
			}
}); */

//测试returnDate函数
/*Route::get('test',function(){
	$arr=ReturnDate::doit(array(1,2,3));
	var_dump($arr);
});*/

Route::get('test',function(){
	return View::make('front/news');
});

//其他的新闻处理操作,都在controller里面
Route::controller('admin/content','ContentController');

//处理前台相关输出
Route::controller('admin/front','FrontUnionController');

/**
 * －－－－－－－－－－－－－
 * 后台首页以及一些杂项(如工具)
 * －－－－－－－－－－－－－
 */
Route::controller('admin','BackManPageController');








/**
 * ～～～～～～～
 * 前台相关路由*
 * ～～～～～～～
 */
	
Route::controller('/','FrontUserController');


