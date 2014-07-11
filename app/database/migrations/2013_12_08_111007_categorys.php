<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Categorys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorys', function(Blueprint $table) {
			$table->increments('id');				//自增id
			$table->string('category_name');		//类名
			$table->integer('pid');					//父id
			$table->string('path');					//path[类似'0,']
			$table->string('alias');				//用于首页导航栏输出[分类的别名]
			/**-----------------------------------------------------------
			 * 注意一点:
			 * 		这里打算用分类和内容表以一对多的方式来写.
			 * 		比如新闻分类,对应新闻内容表是一对多.
			 * 			本地新闻分类->本地新闻内容多条
			 * 			国际新闻分类->国际新闻内容多条
			 * 		分类表->新闻内容表=一对多
			 * 		分类表->商城内容表=一对多
			 * 			现在尝试一下是否可以对多个内容表生效.
			 *    	这样的话,内容表就要有个外键:category_id
			 * -----------------------------------------------
			 */
			//虽然找的时候,并不需要知道内容表名,因为有hasOne(),但通过分类表来查内容表然后输入内容时,
			//还是得知道,需要的是哪个表,所以还是有个字段来保存关联内容表名为好.
			$table->string('relation');			

			$table->integer('nav');					//是否显示到导航栏
			$table->integer('model')->default(0);	//对应后台添加顶级分类表单的radio值．在内部将对应到relation字段．
			$table->string('model_readable');		//和model代表的含义是一样的，其实最终内部用的都是relation字段，只是这个为该字段的书面表达，可以让用户明白是什么．
			$table->integer('final')->default(0);	//以这个确定是否为最终分类，最终分类可写内容．[0:否,1:是]
			
			//[后加] 添加一个字段用来记录每个分类的url
			//		这是在前台页面的导航栏循环输出类名时,需要用到.
			$table->string('navurl')->default('');
			
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categorys');
	}

}
