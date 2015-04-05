<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//things a user can change
	//Allows these to be mass assigned
	protected $fillable = ['title','body','published_at'];

}
