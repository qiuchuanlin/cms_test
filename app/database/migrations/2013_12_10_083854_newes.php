<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Newes extends Migration {

	/**
	 * 这个是新闻内容表,和分类表是一对多的关系,所以要有一个外键category_id
	 *
	 * 
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id');	//和分类表联系的外键
			$table->string('title');		//标题
			$table->text('content');		//内容	[这里内容一开始是varchar类型,后来意识到应该改为text]
			$table->string('author')->default('');	//作者

			//[后加] 新闻头条字段.有这个字段的新闻标题将会在列表页粗体显示.并且显示在本版块的第一条.
			//		头条有几个等级,根据版面,如新闻,有时列表页会有两块都是比如国内新闻,
			//		那么一级头条放在最上面的版块,更加醒目,二级头条在下面那块内容的第一位置.
			//		所以它可能有几个数字,有可能是0:不是头条,1:1级头条,2:2级头条.
			$table->smallInteger('totiao');	
			//后加的还有一个推荐,推荐是上整个网站首页的.
			$table->samllInteger('tuijian');	
		
			$table->engine='MyISAM';		//全文搜索,所以改变一下engine
			$table->timestamps();
		});
			
		// 这里是创建一个全文搜索的索引
		DB::statement('ALTER TABLE news ADD FULLTEXT search(title, content,author)');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//这是上面创建的全文搜索约束,这里先去除约束再删除表
		Schema::table('news',function($table){
			$table->dropIndex('search');
		});
		Schema::drop('news');
	}

}
