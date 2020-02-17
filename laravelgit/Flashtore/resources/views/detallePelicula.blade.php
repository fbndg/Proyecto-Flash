<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
    <ul>
      @while ($id)

      @endwhile
      {{-- @foreach ($arrayPeliculas as $idP => $pelicula)
        @if ($idP == $id)
          <li>
            Titulo: {{$pelicula["titulo"]}}<br>
            Rating: {{$pelicula["rating"]}}
          @unless ($pelicula["rating"] < 8)
            RECOMENDADO
          </li>
          @endunless
        @else
          No existe esta pelicula
        @endif
      @endforeach --}}

      @forelse ($arrayPeliculas as $idP => $pelicula)
        @if ($idP == $id)
          <li>
            Titulo: {{$pelicula["titulo"]}}<br>
            Rating: {{$pelicula["rating"]}}
          </li>
        @endif
      @empty
        No existe esta pelicula manito
      @endforelse
       {{-- @forelse ($arrayPeliculas as $idP => $pelicula)
        @if ($idP == $id)
          <li>
            Titulo: {{$pelicula["titulo"]}}<br>
            Rating: {{$pelicula["rating"]}}
          </li>
        @endif
          @empty
          <em>No existe esta pelicula.</em>

      @endforelse --}}
    </ul>
  </body>
</html>
