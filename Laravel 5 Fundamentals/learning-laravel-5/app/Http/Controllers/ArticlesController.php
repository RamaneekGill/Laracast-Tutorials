<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function __construct() {
		//$this->middleware('auth', ['only' => 'create']);
		//refers to the Authenticate.php $routeMiddleware
		//only run it for the articles/create route
		//can also do $this->middleware('auth', ['except' => 'create'])
		$this->middleware('auth', ['except' => 'index']);
	}

	public function index() {
		//get authenticated user
		\Auth::user();

		//get the articles that are published by current time
		//in descending order
		$articles = Article::latest()->
			where('published_at', '<=', Carbon::now())->get();
		
		//newest articles first
		//$articles = Article::latest()->published()->get();
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

	//by type hinting the validation will run before this function
	public function store(Requests\ArticleRequest $request) {
		//$input = Request::all(); //fetch all input, from get and post
		//$input = Request::get('title');

		$article = new Article($request->all());
		\Auth::user()->articles()->save($article); 
		//get this users articles eloquent model and save a new one
		//remember we setup the eloquent relationships earlier 
		return redirect('articles');
	}

	public function edit($id) {
		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

	public function update($id, Requests\ArticleRequest $request) {
		//type hinting ArticleRequest lets us do validation
		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('articles');
	}
}
