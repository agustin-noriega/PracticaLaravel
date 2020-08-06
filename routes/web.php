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

Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/nosotros', function() {
	return view("nosotros");
});

Route::get('/contacto', function() {
	return view("contacto");
});

Route::get('/comentarios', function() {  /*POST*/
	return view("comentarios");
});

Route::get('/calendario', function() {  /*POST-- */
	return view("calendario");
});

Route::get('/reserva', function(){
	return view("reserva");
});

Route::get('/mievento', function(){
	return view("mievento");
});

// Route::post('/mievento', ) AGREGAR CONTROLADOR
