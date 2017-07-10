<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class TestController extends Controller
{
    public function api() {
      $pelicula = Movie::find(3);
      $pelicula->load("genre", "actors");
      return $pelicula;
    }
}
