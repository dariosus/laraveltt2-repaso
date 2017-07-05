<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <h1>{{$movie->title}}</h1>
      <ul>
        <li>Rating: {{$movie->rating}}</li>
        <li>Premios: {{$movie->awards}}</li>
        <li>Duración: {{$movie->length}}</li>
        <li>Genero: {{$movie->genre->name}}</li>
      </ul>
    </div>
  </body>
</html>
