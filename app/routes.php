<?php


Route::post('results', 'HomeController@dbSearch');

Route::get('/', function () {

	return View::make('library/test');
});
