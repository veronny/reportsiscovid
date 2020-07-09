<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('users', function (){

	//return App\User::all();
	return datatables()
		->eloquent(App\User::query())
		->addColumn('btn', 'actions')
		->rawColumns(['btn'])
		->toJson();

});

Route::get('prueba', function (){

	//return App\User::all();
	return datatables()
		->eloquent(App\Prueba::query())
		->toJson();

});

Route::get('epidemiologia', function (){

	//return App\User::all();
	return datatables()
		->eloquent(App\Epidemiologia::query())
		->toJson();

});

Route::get('seguimiento', function (){

	//return App\User::all();
	return datatables()
		->eloquent(App\Seguimineto::query())
		->toJson();

});
