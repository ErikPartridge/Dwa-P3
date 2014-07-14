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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/password/{words?}/{caps?}/{symbol?}/{number?}', function($words = 3, $caps = false, $symbol = false, $number = false){

    $url = "http://p2.erikpartridge.com/?number=".$words;
    if($caps){
        $url = $url."&capital=capital";
    }
    if($symbol){
        $url = $url."&symbol=symbol";
    }
    if($number){
        $url = $url."&num=num";
    }
    $url = $url."#";
    $html = file_get_contents($url);
    return $html;
});

Route::get('/lipsum/{words?}', function($words = 200){

});
