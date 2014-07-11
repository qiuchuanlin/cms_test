<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * －－－－－－－－－－－－－－－－－－－－
 *前后台用户共用uers表，
 *'Identity'字段用来区分后台管理员(值为1)
 * －－－－－－－－－－－－－－－－－－－－
 */
class Myusers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('myusers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('password');
			//用来取回密码的邮箱
			$table->string('email')->unique();
			//登录次数
			$table->integer('frequency')->default(0);
			//身份标识
			$table->integer('identity')->default(0);
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
		Schema::drop('myusers');
	}

}
