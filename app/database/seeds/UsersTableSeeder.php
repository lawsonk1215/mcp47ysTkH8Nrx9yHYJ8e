<?php


class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'username' => 'family',
			'password' => Hash::make('test')
		]);
	}

}