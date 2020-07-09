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

Route::get('/', function () {
	
    return view('home');

});

Route::get('/prueba', function () {
	
    return view('prueba');

})->name('prueba');

Route::get('/epidemiologia', function () {
	
    return view('epidemiologia');

})->name('epidemiologia');

Route::get('/seguimiento', function () {
	
    return view('seguimiento');

})->name('seguimiento');

Route::resource('users', 'UserController');



Route::get('/home', 'HomeController@index')->name('home');
