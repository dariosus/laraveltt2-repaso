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

Route::get("/api", "TestController@api");

Route::get("/en", function() {
    session(["idioma" => "en"]);
    return back();
});

Route::get("/es", function() {
    session(["idioma" => "es"]);
    return back();
});

Route::get("/pruebaSession1", function() {
  session(["PRUEBADARIO" => "sarasa"]);
});

Route::get("/pruebaSession2", function() {
  dd( session("PRUEBADARIO"));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get("/generos", "GenerosController@listar");

Route::get("/peliculas", "PeliculasController@listar")->middleware("auth");

Route::get("/peliculas/genero/{idGenero}", "PeliculasController@listarPorGenero");

Route::get("/peliculas/agregar", "PeliculasController@agregar");

Route::post("/peliculas/agregar", "PeliculasController@guardar");

Route::get("/peliculas/{id}", "PeliculasController@detalle");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
