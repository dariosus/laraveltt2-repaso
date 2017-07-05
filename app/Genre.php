<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genres";

    public function movies() {
      return $this->hasMany("App\Movie", "genre_id");
    }

    public function moviesByRating() {
      return $this->movies->sortBy("rating");
    }
}
