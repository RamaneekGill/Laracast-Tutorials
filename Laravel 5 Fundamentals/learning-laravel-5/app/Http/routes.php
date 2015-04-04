<?php

//remember NOT to show errors while in production
//in development it is good!
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');