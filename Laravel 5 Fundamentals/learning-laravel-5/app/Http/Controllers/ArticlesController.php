<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function index() {
		$articles = Article::all();
		return view('articles.index', compact('articles'));
	}

	public function show($id) {
		$article = Article::findOrFail($id);
		//dd stands for die dump
		//dd($article);
		return view('articles.show', compact('article'));
	}

}
