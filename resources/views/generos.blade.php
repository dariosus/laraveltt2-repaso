<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <h1>Mis Generos</h1>
      <ul>
        @foreach ($genres as $genre)
          <li>

              {{$genre->name}}
              <ul>
                @foreach ($genre->moviesByRating() as $movie)
                  <li>
                    {{$movie->title}}
                  </li>
                @endforeach
              </ul>
          </li>
        @endforeach

        {{$genres->links()}}
      </ul>
    </div>
  </body>
</html>
