<?php

class HomeController extends BaseController {

	public function dbSearch() {
		$searchTerms = $_GET["q"];

		if (!is_numeric($searchTerms) && !is_int($searchTerms))
		{
			$query = DB::select(DB::raw("
			SELECT
				isbn, title, fname, lname
			FROM
				author_book
			INNER JOIN
				books
			ON
				books.id=author_book.book_id
			INNER JOIN
				authors
			ON
				author_book.author_id=authors.id
			WHERE
				title = '$searchTerms'
			OR
				fname = '$searchTerms'
			OR
				lname = '$searchTerms'
				"));
		} else {
			$query = DB::select(DB::raw("
			SELECT
				isbn, title, fname, lname
			FROM
				author_book
			INNER JOIN
				books
			ON
				books.id=author_book.book_id
			INNER JOIN
				authors
			ON
				author_book.author_id=authors.id
			WHERE
				isbn = '$searchTerms'
				"));
		}




		return $query;
	}
}
