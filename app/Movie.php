<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    public function genre() {
      return $this->belongsTo("App\Genre", "genre_id");
    }

    public function actors() {
      return $this->belongsToMany("App\Actor", "actor_movie", "movie_id", "actor_id");
    }

    public function imprimirParaMostrar() {
      return $this->title . " - " . $this->rating;
    }
}
