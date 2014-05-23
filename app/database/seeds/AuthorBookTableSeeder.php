<?php


class AuthorBookTableSeeder extends Seeder {

	public function run()
	{

			DB::table('author_book')->insert(array(
				array('author_id' => 1,'book_id' => 1),
				array('author_id' => 2,'book_id' => 1),
				array('author_id' => 3, 'book_id' => 2),
				array('author_id' => 3, 'book_id' => 3),
				array('author_id' => 4, 'book_id' => 4)
			)
		);
	}
}
