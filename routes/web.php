<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::get('/social', function () {
    Auth::loginUsingId(1);
    return redirect('/');
});



//Authenticate users has access
Route::group(['middleware' => 'auth'], function(){

  Route::get('/profile', 'ProfileController@index');
  Route::get('/profile/edit', 'ProfileController@edit');
  Route::post('/profile/edit', 'ProfileController@update');

  Route::get('/table/create', 'TableController@create');
  Route::post('/table/create', 'TableController@store');

});

Route::get('/game/create', 'GameController@create');
Route::post('/game/create', 'GameController@store');
Route::get('/game/{game}/edit', 'GameController@edit');
Route::post('/game/{game}/edit', 'GameController@update');
Route::get('game/all', 'GameController@index');
Route::get('game/{game}', 'GameController@show');

Route::get('profile/{profile}', 'ProfileController@show');
