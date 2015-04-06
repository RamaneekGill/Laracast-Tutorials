<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller {

	public function index() {
		//get the articles that are published by current time
		//in descending order
		//$articles = Article::latest()->
			//where('published_at', '<=', Carbon::now())->get();
		
		$articles = Article::latest()->published()->get();
		return view('articles.index', compact('articles'));
	}

	public function show($id) {
		$article = Article::findOrFail($id);
		//dd stands for die dump
		//dd($article);
		return view('articles.show', compact('article'));
	}

	public function create() {
		return view('articles.create');
	}

	public function store() {
		//$input = Request::all(); //fetch all input, from get and post
		//$input = Request::get('title');
		
		Article::create(Request::all()); //created and saved to db
		return redirect('articles');
	}
}
