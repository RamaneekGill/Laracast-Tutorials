var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

	mix.phpUnit();
/*
    mix.sass('app.scss').coffee(); 
    //replace with less if you want less instead of sass

    mix.styles([
    	'vendor/normalize.css',
    	'app.css'
    ], 'public/output/final.css', 'public/css');


    mix.scripts([
    	'vendor/jquery.js',
    	'min.js',
    	'coupon.js'
    ], 'public/output/scripts.js', 'publiic.js');
*/

});
