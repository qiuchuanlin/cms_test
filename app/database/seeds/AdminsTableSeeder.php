<?php

class AdminsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('admins')->truncate();

		$admins = array(
			array('name'=>'lin','password'=>Hash::make('lin')),
			array('name'=>'admin','password'=>'admin')
		);

		// Uncomment the below to run the seeder
		 DB::table('admins')->insert($admins);
	}

}
