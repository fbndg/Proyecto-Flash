@extends('plantilla')

@section('css')
  <link rel="stylesheet" href="css/estilos-usuario.css">
@endsection

@section('titulo') FLASHTORE | Perfil @endsection

@section('principal')

    <div class="col-lg-4 offset-lg-4 col-sm-4 col-12 main-section text-center entero">
    	<div class="row profile-header">
    		<div class="col-lg-2 col-sm-2 col-2">
    			<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
    		</div>

    		<div class="col-lg-8 col-sm-8 col-8 pt-1">
    			<span>Perfil</span>
    		</div>

    		<div class="col-lg-2 col-sm-2 col-2">
    			<a href="http://localhost:8000/Crear"><i class="fab fa-buy-n-large" aria-hidden="true"></i></a>
    		</div>
    	</div>

    	<div class="row user-img">
    		<div class="col-lg-12 col-sm-12 col-12 div1">
    			<img style="width:210px;height:210px;" src="avatars" class="rounded-circle img-thumbnail">
          <form action="usuario.php" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="form-group">
                <label for="avatar">Cambiar avatar</label> <br>
                <?php if (isset($erroresEnAvatar["avatar"])) {
                  foreach ($erroresEnAvatar["avatar"] as $error) {
                    echo '<small class="text-danger">' . $error . '</small><br>';
                    }
                  }
                  ?>
                <input type="file" name="avatar" class="form-control-file d-none" id="avatar">
                <button type="submit" name="button">Hola! Soy un botón</button>
              </div>
          </form>
                <h5>{{ Auth::user()->name }}</h5>
                <i class="fas fa-map-marker-alt"></i>
    			  <span>Direccion</span>
    		</div>
    	</div>

    	<div class="row user-social-detail pt-3">

    		<div class="col-lg-4 col-sm-4 col-4">
				  <a href="canasta.php"><i class="fas fa-shopping-cart"></i></a>
				  <div class="d-sm-none d-md-block">
  					<p><a href="canasta.php">Compras</a></p>
				  </div>
  			</div>

    		<div class="col-lg-4 col-sm-4 col-4">
				  <a href="#"><i class="fas fa-envelope"></i></a>
				  <div class="d-sm-none d-md-block">
  					<p>Mensajes</p>
  				</div>
  			</div>

    		<div class="col-lg-4 col-sm-4 col-4">
				  <a href="#"><i class="far fa-heart"></i></i></a>
  				<div class="d-sm-none d-md-block">
  					<p>Favoritos</p>
  				</div>
  			</div>

    	</div>

    </div>

@endsection
