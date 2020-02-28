@extends('plantilla')

@section('css')
  <link rel="stylesheet" href="/css/formstyle.css">
@endsection

@section('titulo') FLASHTORE | Store @endsection

@section('principal')

  <div class="row ">
    <div class="col-lg-12 mx-auto entero">
      <div class="card card-signin flex-row my-5">

        <div class="card-body">
          <h5 class="card-title text-center">Contáctanos</h5>
          <form class="form-signin">

            <div class="form-label-group">
              <textarea id="comentario" rows="8" cols="80" class="form-control" placeholder="En qué podemos ayudarte?"></textarea>

            </div>

            <div class="form-label-group">
              <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
              <label for="inputUserame">Nombre Completo</label>
            </div>

            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
              <label for="inputEmail">Dirección de Email</label>
            </div>

            <hr>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar</button>
            <a class="d-block text-center mt-2 small" href="login.php">Ingresar</a>
            <hr class="my-4">

          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
