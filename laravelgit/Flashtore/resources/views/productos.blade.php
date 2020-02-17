@extends('plantilla')

@section('titulo') FLASHTORE | Store @endsection

@section('principal')

  <section class="main">
          <section class="articles">
            <div class="flex-container prodct">
              <article>
               <h2>TODOS LOS PRODUCTOS</h2>

               @foreach ($productos as $producto)
                 <a href='producto.php?id={{$producto["idProducto"]}}'><img src='/storage/{{$producto["imagenP"]}}'></a>
               @endforeach


              </article>
            </div>
          </section>
        </section>

@endsection
