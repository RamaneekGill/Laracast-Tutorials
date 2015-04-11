<?php

//remember NOT to show errors while in production
//in development it is good!
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

/*
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');

Better to do:
*/
Route::resource('articles', 'ArticlesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

/*
Route::get('foo', function() {
	return 'bar';
});

*/