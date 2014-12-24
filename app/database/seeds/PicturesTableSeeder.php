<?php

class PicturesTableSeeder extends Seeder {

	public function run()
	{
		// 1	Larkin
		// 2	Sandy
		// 3	Doug
		// 4	Devin
		// 5	Chris
		// 6	Porter
		// 7	Bailey
		// 8	Erin
		// 9	Angie
		// 10	Jacob
		// 11	Paisley

		// Just Larkin
		foreach(range(1, 43) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(1);
		}

		// Larkin & Porter
		foreach(range(44, 46) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(1);
			$picture->people()->attach(6);
		}

		// Bailey
		foreach(range(47, 52) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(7);
		}

		// Angie & Porter
		foreach(range(53, 54) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(6);
			$picture->people()->attach(9);
		}

		// Erin and Bailey
		foreach(range(55, 59) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(7);
			$picture->people()->attach(8);
		}

		// Bailey, Doug, Jacob, Larkin
		foreach(range(60, 60) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(1);
			$picture->people()->attach(3);
			$picture->people()->attach(7);
			$picture->people()->attach(10);
		}

		// Bailey, Jacob
		foreach(range(61, 61) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(7);
			$picture->people()->attach(10);
		}

		// Just Chris
		foreach(range(62, 62) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(5);
		}

		// Chris, Devin
		foreach(range(63, 66) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(4);
			$picture->people()->attach(5);
		}

		// Chris, Devin, Porter
		foreach(range(67, 71) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(4);
			$picture->people()->attach(5);
			$picture->people()->attach(6);
		}

		// Just Devin
		foreach(range(72, 74) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(4);
		}

		// Doug, Devin
		foreach(range(75, 75) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(3);
			$picture->people()->attach(4);
		}

		// Doug, Devin, Sandy
		foreach(range(76, 76) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(2);
			$picture->people()->attach(3);
			$picture->people()->attach(4);
		}

		// Erin, Devin, Sandy
		foreach(range(77, 77) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(2);
			$picture->people()->attach(4);
			$picture->people()->attach(8);
		}

		// Devin, Larkin
		foreach(range(78, 78) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(1);
			$picture->people()->attach(4);
		}

		// Devin, Paisley
		foreach(range(79, 79) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(4);
			$picture->people()->attach(11);
		}

		// Devin, Porter
		foreach(range(80, 82) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(4);
			$picture->people()->attach(6);
		}

		// Devin, Sandy
		foreach(range(83, 83) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(4);
			$picture->people()->attach(2);
		}

		// Just Doug
		foreach(range(84, 84) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(3);
		}

		// Doug, Porter
		foreach(range(85, 85) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(3);
			$picture->people()->attach(6);
		}

		// Doug, Sandy
		foreach(range(86, 86) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(2);
			$picture->people()->attach(3);
		}

		// Just Erin
		foreach(range(87, 87) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(8);
		}

		// Erin, Porter
		foreach(range(88, 90) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(6);
			$picture->people()->attach(8);
		}

		// Just Jacob
		foreach(range(91, 93) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(10);
		}

		// Paisley, Porter
		foreach(range(94, 94) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(11);
			$picture->people()->attach(6);
		}

		// Just Porter
		foreach(range(95, 103) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(6);
		}

		// Porter, Sandy
		foreach(range(104, 105) as $index)
		{
			$picture = new Picture;
			$picture->save();
			$picture->people()->attach(2);
			$picture->people()->attach(6);
		}
	}

}