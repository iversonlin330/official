<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::controller('forum', 'ForumController');
Route::controller('game', 'GameController');
Route::controller('player', 'PlayerController');
Route::controller('oauth', 'OauthController');
Route::controller('auth', 'Auth\AuthController');
Route::controller('user', 'UserController');
Route::get('temp1', function(){
	return view('temp.temp1');
});
Route::get('temp2', function(){
	return view('temp.temp2');
});
Route::get('temp3', function(){
	return view('temp.temp3');
});
Route::get('temp4', function(){
	return view('temp.temp4');
});
Route::get('temp5', function(){
	return view('temp.temp5');
});
Route::get('temp6', function(){
	return view('temp.temp6');
});
Route::get('temp31', function(){
	return view('temp.temp31');
});

