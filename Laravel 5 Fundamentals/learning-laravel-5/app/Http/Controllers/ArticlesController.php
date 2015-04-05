<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller {

	public function index() {
		$articles = Article::latest()->get();
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
		$input = Request::all(); //fetch all input, from get and post
		//$input = Request::get('title');
		$input['published_at'] = Carbon::now();
		Article::create($input); //created and saved to db
		return redirect('articles');
	}
}
