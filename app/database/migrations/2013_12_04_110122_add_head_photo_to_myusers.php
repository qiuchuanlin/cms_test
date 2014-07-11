<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddHeadPhotoToMyusers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('myusers', function(Blueprint $table) {
			$table->string('head_photo');
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
			$table->dropColumn('head_photo');
		});
	}

}
