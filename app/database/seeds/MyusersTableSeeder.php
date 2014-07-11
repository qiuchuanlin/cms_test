<?php

class MyusersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
			array('name'=>'lin','password'=>Hash::make('1'),'email'=>'qiuchuanlin@yeah.net','identity'=>1,'frequency'=>0)
		);

		// Uncomment the below to run the seeder
		DB::table('myusers')->insert($users);
	}

}
