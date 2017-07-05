<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <h1>Mis películas</h1>
      <h2>
        <a href="/peliculas/agregar">Agregar Película</a>
      </h2>
      <ul>
        @foreach ($movies as $movie)
          <li>
            <a href="/peliculas/{{$movie->id}}">
              {{$movie->imprimirParaMostrar()}}
            </a>
          </li>
        @endforeach

        {{$movies->links()}}
      </ul>
    </div>
  </body>
</html>
