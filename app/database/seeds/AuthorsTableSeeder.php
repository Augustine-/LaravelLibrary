<?php

class AuthorsTableSeeder extends Seeder {

	public function run()
	{

			Author::create([
				"fname" => "Charles",
				"lname" => "Dickens"

			]);

			Author::create([
				"fname" => "James",
				"lname" => "Joyce"

			]);

			Author::create([
				"fname" => "Craig",
				"lname" => "Clevenger"

			]);

			Author::create([
				"fname" => "Roger",
				"lname" => "Zelazny"

			]);

			Author::create([
				"fname" => "George",
				"lname" => "Martin"

			]);
	}

}
