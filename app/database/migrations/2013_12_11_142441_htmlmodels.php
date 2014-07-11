<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * －－－－－－－－－－－－－－－－－－－－－－－－－
 *说明：该表主要是用来存放html页面各个栏目的信息
 *		比如每个栏目或者说版块，它绑定的分类信息，
 *		从而根据这个信息去输出对应的内容，
 *		还有版块名字等等．．．．
 *		也就是对版块进行整体规划，此处尚未涉及具体内容．
 * －－－－－－－－－－－－－－－－－－－－－－－－－
 */
class Htmlmodels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('htmlmodels', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id');		//与版块内容相应的分类id，最终将由分类找到对应的内容表产生输出
			$table->integer('page');			//对应的是哪个页面(0:首页,1:新闻)	
			$table->string('model_name');		//版块书面名字,如('推荐文章')
			$table->string('section');			//laravel内部模板继承用的section名字，此名字用于手动替换某版块内容
			$table->string('loop');				//得到当前循环数据所使用的循环名字，用来帮助手动替换．
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
		Schema::drop('htmlmodels');
	}

}
