<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h3>Idiomas</h3>
    <ul>
      <li>
        <a href="/en">Inglés</a>
      </li>
      <li>
        <a href="/es">Español</a>
      </li>
    </ul>
    <div class="container">
      <h1>@lang("mensajes.bienvenida", ["nombre" => $usuario->name])</h1>
      <h2>
        <a href="/peliculas/agregar">@lang('mensajes.agregar')</a>
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
