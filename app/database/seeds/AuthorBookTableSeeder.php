<?php


class AuthorBookTableSeeder extends Seeder {

	public function run()
	{

			AuthorBook::create([
				'author_id' => 1,
				'book_id' => 1
			]);

			AuthorBook::create([
				'author_id' => 2,
				'book_id' => 1
			]);

			AuthorBook::create([
				'author_id' => 4,
				'book_id' => 2
			]);

			AuthorBook::create([
				'author_id' => 4,
				'book_id' => 3
			]);
	}
}
