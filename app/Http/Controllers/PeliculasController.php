<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function listar() {
      $movies = \App\Movie::paginate(15);


      return view("peliculas", compact("movies"));
    }

    public function listarPorGenero($idGenero) {
      $movies = \App\Movie::where("genre_id", $idGenero)->paginate(15);

      return view("peliculas", compact("movies"));
    }

    public function detalle($id) {
      $movie = \App\Movie::find($id);

      return view("pelicula", compact("movie"));
    }

    public function agregar() {

      $genres = \App\Genre::all();
      $actors = \App\Actor::all();

      return view("agregarPelicula", compact("genres", "actors"));
    }

    public function guardar(Request $req) {
      $datos = $req->only("title", "rating", "awards", "length", "release_date", "genre_id");

      $reglas = [
        "title" => "required",
        "rating" => "required|numeric",
        "awards" => "required|int|min:0",
        "length" => "required|int|min:0",
        "release_date" => "required|date",
      ];

      $this->validate($req, $reglas);


      $actores = $req->only("actores");

      $peli = \App\Movie::create($datos);

      foreach ($actores as $actor) {
        $peli->actors()->attach($actor);
      }

      $file = $req->file("poster");
      $ext = $file->extension();


      $path = $req->file("poster")->storeAs("posters", $peli->id . "." . $ext);

      $peli->poster = $path;
      $peli->save();

      return redirect('/peliculas');
    }
}
