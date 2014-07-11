<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFullNameToMyusers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('myusers', function(Blueprint $table) {
			$table->string('full_name');
			$table->string('photo');
			$table->string('more_infomation');
			$table->integer('gender')->default(0);
			//identifier for that user want or not to recieve the newsletter
			$table->integer('recieve_new')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('myusers', function(Blueprint $table) {
			$table->dropColumn('full_name');
			$table->dropColumn('photo');
			$table->dropColumn('more_infomation');
			$table->dropColumn('gender');
			$table->dropColumn('recieve_new');
		});
	}

}
