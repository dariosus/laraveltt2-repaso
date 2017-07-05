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

Route::get("/generos", "GenerosController@listar");

Route::get("/peliculas", "PeliculasController@listar");

Route::get("/peliculas/genero/{idGenero}", "PeliculasController@listarPorGenero");

Route::get("/peliculas/agregar", "PeliculasController@agregar");

Route::post("/peliculas/agregar", "PeliculasController@guardar");

Route::get("/peliculas/{id}", "PeliculasController@detalle");
