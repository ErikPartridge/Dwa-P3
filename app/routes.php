<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
use \Badcow\LoremIpsum as Lipsum;

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/lipsum/{paragraphs?}', function($paragraphs = 5){
    return View::make('lipsum')->with('paragraphs', $paragraphs);

});

Route::get('/user/{number?}', function($number = 1){
        return View::make('user')->with('number', $number);
});

Route::post('/user', "UserController@makeUsers");

Route::post('/lipsum', "LipsumController@makeLipsum");