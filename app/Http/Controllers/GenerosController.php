<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function listar() {
      $genres = \App\Genre::paginate(15);


      return view("generos", compact("genres"));
    }
}
