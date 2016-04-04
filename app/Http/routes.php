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

//=========================================================================
//Training Session

Route::get('/', function () {
    return view('welcome');
});

//=========================================================================

/*
Route::post('user/', function () {
	return "POST USER";
});

Route::put('user/', function () {
	return "PUT USER";
});

Route::delete('user', function () {
	return "DELETE USER";
});

Route::match(['get', 'post'], '/', function () {
	return 'Hello World with GET or POST';
});

Route::get('/hello/{name}', function ($name) {
	return "Hello World, $name";
});

Route::get('/sum/{value1}/{value2}/{value3?}',
			function ($value1,$value2,$value3=0) {
	$sum = $value1+$value2+$value3;
	return "Sum: $sum";
});

Route::get('/testLogin', ['middleware' => 'auth', function () {
	return "logged!";
}]);

Route::controller("user","UserController");

//Resource:
Route::resource('user', 'UserController');

//===========================================================================