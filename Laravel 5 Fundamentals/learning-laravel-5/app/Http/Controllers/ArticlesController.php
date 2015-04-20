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

	public function show(Article $article) {
		//$article = Article::findOrFail($id);
		//dd stands for die dump
		//dd($article);
		
		//don't need to fetch the article anymore because of route model binding
		return view('articles.show', compact('article'));
	}

	public function create() {
		$tags = \App\Tag::lists('name', 'id');
		return view('articles.create', compact('tags'));
	}

	//by type hinting the validation will run before this function
	public function store(Requests\ArticleRequest $request) {
		//$input = Request::all(); //fetch all input, from get and post
		//$input = Request::get('title');

		//$article = new Article($request->all());

		$article = \Auth::user()->articles()->create($request->all()); 
		//get this users articles eloquent model and save a new one
		//remember we setup the eloquent relationships earlier 
		
		/*
		session()->flash('flash_message', 'Your article has been created!');
		session()->flash('flash_message_important', true);
		return redirect('articles');

		is the same as below!

		return redirect('articles')->with([
			'flash_message' => 'Your article has been created',
			'flash_message_important' => true
		]);
		*/
		
		//now update the pivot table to associate the tags with the article
		$article->tags()->sync($request->input('tag_list'));
		$article->tags()->attach($request->input('tag_list'));

		flash()->success('Your article has been created!');
		return redirect('articles');
	}

	public function edit(Article $article) {
		//$article = Article::findOrFail($id);
		//binded the wildcard article to this controller model 
		//so don't need to fetch article
		
		$tags = \App\Tag::lists('name', 'id');
		return view('articles.edit', compact('article', 'tags'));
	}

	public function update(Article $article, Requests\ArticleRequest $request) {
		//type hinting ArticleRequest lets us do validation
		//$article = Article::findOrFail($id);
		$article->update($request->all());
		$article->tags()->sync($request->input('tag_list'));
		return redirect('articles');
	}
}
