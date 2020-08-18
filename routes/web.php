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
    return view('welcome');
});
Auth::routes();

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/nosotros', function() { // Vista, Agregar Contacto
	return view("nosotros");
});
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/comentarios', function() {  // Vista
	return view("comentarios");
});
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/crearcomentario', function(){ // Vista
	return view("crearcomentario");
});
Route::post('/crearcomentario', );
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/calendario', function(){
  return view("/calendario");
});
// Route::get('/calendario', 'CalendarioController@datosCalendario');
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/crearevento', function(){
  return view("crearevento");
});
Route::post('/crearevento', );
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/mievento', function(){ //Vista de los eventos creados
	return view("mievento");
});// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/vistaevento', function(){ //Vista del evento seleccionado, con opcion B y M
	return view("vistaevento");
});
Route::post('/vistaevento', );
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/miperfil', function(){  // CON OPCION DE EDITAR Y GUARDAR CAMBIOS
  return view("miperfil");
});
Route::post('/miperfil',);
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/galeria', function(){ //Vista de las fotos en galeria
  return view("galeria");
});
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/creargaleria', function(){ //Vista del Formulario
  return view("creargaleria");
});
Route::post('/creargaleria', );
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/admin_eventos', function(){
  return view('admin_eventos');
});
Route::post('/admin_eventos', );
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/admin_mozos', function(){
  return view('admin_mozos');
});
Route::post('/admin_mozos', );
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/admin_entret', function(){
  return view('admin_entret');
});
Route::post('/admin_entret', );
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/admin_catering', function(){
  return view('admin_catering');
});
Route::post('/admin_catering', );

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/prueba', function(){
  return view('prueba');
});

Route::get('/menu', function(){
  return view('layouts.menu');
});



// Route::post('/mievento', ) AGREGAR CONTROLADOR
