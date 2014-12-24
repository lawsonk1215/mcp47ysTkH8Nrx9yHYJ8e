<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		User::truncate();
		Person::truncate();
		Picture::truncate();
		DB::table('person_picture')->truncate();

		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('PeopleTableSeeder');
		$this->call('PicturesTableSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
