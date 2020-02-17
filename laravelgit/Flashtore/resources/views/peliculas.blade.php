<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($arrayPeliculas as $id => $pelicula)
        <li>
         Titulo: {{$pelicula["titulo"]}}<br>
         Rating: {{$pelicula["rating"]}}
       </li>
        @unless ($pelicula["rating"] < 8)
          RECOMENDADO
        @endunless
      @endforeach
    </ul>
    <ul>
      @forelse ($arrayPeliculas as $id => $pelicula)
        <li>
          Titulo: {{$pelicula["titulo"]}}<br>
          Rating: {{$pelicula["rating"]}}
      </li>
      @empty
        No hay peliculas2
      @endforelse
    </ul>
  </body>
</html>
