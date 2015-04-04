<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about() {
		//return 'About Page';
		//$name = 'Ramaneek <span style="color: red;">Gill</span>';
		//two ways of passing $name into the view
		//return view('pages.about')->with('name', $name);
		//to pass more than one variable use an array!

		$people = [
			'Crosby', 'Ovechkin', 'Sedins'
		];

		return view('pages.about', compact('people'));

		//third way:
		//pass data as an arr in the 
		//second arg in the view() function

		//how to make arr in PHP quickly:
		/*
		$var1 = 'mario';
		$var2 = 'luigi';
		$arr = compact('var1', 'var2');
		return view('pages.about', $arr);
		*/
	}

	public function contact() {
		return view('pages.contact');
	}

}
