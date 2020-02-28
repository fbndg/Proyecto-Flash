@extends('plantilla')

@section('titulo') FLASHTORE | Store @endsection

@section('principal')

  <section class="main">
          <section class="articles">
            <div class="flex-container prodct">
              <article>
               <h2>TODOS LOS PRODUCTOS</h2>

               @foreach ($productos as $producto)
                  @if (!$producto->borrar == 1)

                   <a href='http://localhost:8000/Producto/{{$producto["idProducto"]}}'><img style="width:440px;height:425px" src='/storage/{{$producto->imagen->imagen}}'></a>


                 @endif
               @endforeach


              </article>
            </div>
          </section>
        </section>

@endsection
