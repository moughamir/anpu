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



Route::get('/', function () {
    $links = \Anpu\Link::all();
    return view('welcome', ['links' => $links]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//
Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', 'HomeController@SubmitLink');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Socialite
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');