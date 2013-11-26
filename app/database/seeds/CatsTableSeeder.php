<?php

class CatsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('cats')->truncate();

		$cats = array(
			array('name'=>'小黄','age'=>'3'),
			array('name'=>'小黑','age'=>'1')
		);

		// Uncomment the below to run the seeder
		DB::table('cats')->insert($cats);
	}

}
