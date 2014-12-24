<?php

class PeopleTableSeeder extends Seeder {

	public function run()
	{
		$names = [
			'Larkin',
			'Sandy',
			'Doug',
			'Devin',
			'Chris',
			'Porter',
			'Bailey',
			'Erin',
			'Angie',
			'Jacob',
			'Paisley'
		];

		foreach ($names as $name) {
			Person::create([
				'name' => $name
			]);
		}
	}

}