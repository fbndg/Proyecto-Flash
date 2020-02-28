@extends('plantilla')
@section('css')
  <link rel="stylesheet" href="/css/formstylereg.css">
@endsection


@section('titulo') FLASHTORE | {{$producto["nombreProducto"]}} @endsection

@section('principal')

  <section class="main">
    <section class="articles">

      <div class="flex-container indeximg">

        <article>
          <h2>{{$producto["nombreProducto"]}}</h2>
          <div class="d-flex flex-row bd-highlight mb-3"><!--04/01: Agregué este div para encolumnar la img-->
            <div class="p-2 bd-highlight">
              <a href="canasta.php" class="nav-link"><img style="width:438px;height:425px" src="/storage/{{$producto->imagen->imagen}}" alt="AMD APU A6 7480"></a>

            </div>
            <div class="d-flex p-2 bd-highlight"><!--04/01: Agregué estos divs para encolumnar el p-->
              <div class="parrafos">
                <div class="d-flex justify-content-end">
                  <p>La Pc ideal para una estación de trabajo rápida, eficiente y duradera.<br>La mejor opción para tu oficina o estudio.
                    Instalá los programas necesarios <br>y aumentá tu productividad. Hacé todo más rápido con la tecnología <strong>SSD</strong>.<br><br>
                    <strong>Características.</strong><br><br>
                    <strong>ALMACENAMIENTO. Capacidad:</strong> 120 Gigas. <strong>Interfaz:</strong> Sata III. <strong>Disco Sólido:</strong> WD.<br>
                    <strong>CONECTIVIDAD. Ethernet:</strong> Sí.<br>
                    <strong>MEMORIA RAM. Capacidad:</strong> 4 Gigas. <strong>Tipo:</strong> DDR3.<strong> Formato:</strong> DIMM. <strong>Expandible:</strong> Sí.<br><br>
                    <strong>OTRAS CARACTERISTICAS.</strong><br><br>
                    <strong>Parlantes:</strong> Sí. <strong>Teclado:</strong> Sí.<strong> Mouse:</strong> Sí.<br>
                    <strong>PROCESADOR. Núcleos:</strong> 2 (2 Subprocesos).<strong> Frecuencia:</strong> 3.50Ghz. <strong>Cache:</strong> 2Mb SmartCache.<br>
                    <strong>AMD:</strong> APU A6. <strong>Modelo:</strong> 7480.<br>
                    <strong>PUERTOS. Usb 2.0:</strong> Sí. <strong>Hdmi:</strong> Sí. <strong>Audio/Mic 3.5:</strong> Sí.<br>
                    <strong>SISTEMA OPERATIVO.</strong> Sin Windows: Compatible.<br><strong>USO RECOMENDADO.</strong> Hogar, Oficina: Básico.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-primary" href="http://localhost:8000/Editar/{{$producto["idProducto"]}}">edit</a>
        </article>
      </section>
    </section>


@endsection
