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

Route::get('/', function() {
	return view('ed-2015.portada');
});

Route::get('2015', function() {
	return view('ed-2015.portada');
});

Route::get('2015/reglamento', function() {
	return view('ed-2015.reglamento');
});

Route::get('2015/localizacion', function() {
	return view('ed-2015.localizacion');
});

Route::get('2015/clasificacion', 'JugadoresController@index');

Route::get('2015/inscripcion', 'JugadoresController@create');
Route::post('2015/inscripcion', 'JugadoresController@store');