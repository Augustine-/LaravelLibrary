<?php


class BooksTableSeeder extends Seeder {

	public function run()
	{

			Book::create([
				"isbn" => 111111111,
				"title" => "A Christmas Wake",
				"body" => "Finnegans Wake + A Christmas Carol = fun for the whole family!",
				"published" => date_create('1911-11-11')
			]);

			Book::create([
				"isbn" => 222222222,
				"title" => "The Chronicles of Amber",
				"body" => "Noir Fantasy, the many universes and the royalty which govern them.",
				"published" => date_create('1922-02-22')

			]);

			Book::create([
				"isbn" => 333333333,
				"title" => "The Contortionist's Handbook",
				"body" => "A man folds himself into a box, and emerges again.",
				"published" => date_create('1933-03-03')
			]);
		}

}
