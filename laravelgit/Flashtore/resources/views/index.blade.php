@extends('plantilla')

@section('titulo') FLASHTORE @endsection

@section('principal')

  <section class="main">
    <section class="articles">
      <div class="flex-container indeximg">
       <article class="col-12">
          <h2>Combos completos</h2>
          @foreach ($desk as $producto)

              <a href='http://localhost:8000/Producto/{{$producto["idProducto"]}}'><img style="width:308px;height:294px;" src="/storage/{{$producto->imagen->imagen}}"></a>

          @endforeach
       </article>
     </div>

     <div class="flex-container indeximg">
       <article class="col-12">
          <h2>Notebooks</h2>
          @foreach ($note as $producto)

              <a href='http://localhost:8000/Producto/{{$producto["idProducto"]}}'><img style="width:308px;height:294px;" src="/storage/{{$producto->imagen->imagen}}"></a>

          @endforeach
       </article>
     </div>

     <div class="flex-container indeximg">
       <article class="col-12">
        <h2>Impresoras</h2>
        @foreach ($imp as $producto)

            <a href='http://localhost:8000/Productos/{{$producto["idProducto"]}}'><img style="width:308px;height:294px;" src="/storage/{{$producto->imagen->imagen}}"></a>

        @endforeach
       </article>
      </div>

    </section>
  </section>


@endsection
