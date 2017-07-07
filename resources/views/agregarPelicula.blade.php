<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <h1>Agregar Película</h1>
      <ul>
        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
      <form class="" action="/peliculas/agregar" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="">
          <label for="">Título</label>
          <input type="text" name="title" value="{{old("title")}}">
        </div>
        <div class="">
          <label for="">Rating</label>
          <input type="text" name="rating" value="{{old("rating")}}">
        </div>
        <div class="">
          <label for="">Premios</label>
          <input type="text" name="awards" value="{{old("awards")}}">
        </div>
        <div class="">
          <label for="">Duración</label>
          <input type="text" name="length" value="{{old("length")}}">
        </div>
        <div class="">
          <label for="">Fecha de Estreno</label>
          <input type="date" name="release_date" value="{{old("release_date")}}">
        </div>
        <div class="">
          <label for="">Poster</label>
          <input type="file" name="poster">
        </div>
        <div class="">
          <label for="">Genero</label>
          <select name="genre_id">
            @foreach ($genres as $genre)
              @if ($genre->id == old("genre_id"))
                <option value="{{$genre->id}}" selected>
                  {{$genre->name}}
                </option>
              @else
                <option value="{{$genre->id}}">
                  {{$genre->name}}
                </option>
              @endif

            @endforeach
          </select>
        </div>
        <div class="actores">
          <label>Actores:</label>
          <select name="actores[]">
            @foreach($actors as $actor)
              <option value="{{$actor->id}}">
                {{$actor->first_name}} {{$actor->last_name}}
              </option>
            @endforeach
          </select>
        </div>
        <div>
          <button id="otro-actor" type="button" name="button">Agregar Otro Actor</button>
        </div>

        <div class="fin-actores">
          <input type="submit" value="Agregar película">
        </div>
      </form>
    </div>
  </body>
</html>

<script>
  document.querySelector("#otro-actor").onclick = function() {
    var actores = document.querySelectorAll(".actores");
    var actores = actores[actores.length - 1];
    var clon = actores.cloneNode(true);
    var form = document.querySelector("form");
    var fin = document.querySelector(".fin-actores");
    form.insertBefore(clon, actores);

  }
</script>
