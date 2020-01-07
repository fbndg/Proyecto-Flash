<?php
session_start();
require_once 'controladores/controladorValidacion.php';
$erroresEnAvatar = [];
if($_FILES) {
    $erroresEnAvatar = validarAvatar();
    if(count($erroresEnAvatar) == 0) {
      $extension = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      $archivoTemporal = $_FILES["avatar"]["tmp_name"];
      $nuevaRuta = dirname(__file__);
      $nuevaRuta = $nuevaRuta . "\avatars/";
      $nombreArchivo = "avatar_" . $_SESSION["avatar"] . "." . $extension;
      move_uploaded_file($archivoTemporal, $nuevaRuta . $nombreArchivo);
      eliminarExFoto();
      header("Location: usuario.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/999ad7145f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilos-usuario.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
  <div class="container">

    <?php require_once "partials/nav.php" ?>


      <div class="col-lg-4 offset-lg-4 col-sm-4 col-12 main-section text-center entero">
      	<div class="row profile-header">
      		<div class="col-lg-2 col-sm-2 col-2">
      			<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
      		</div>

      		<div class="col-lg-8 col-sm-8 col-8">
      			<span>Perfil</span>
      		</div>

      		<div class="col-lg-2 col-sm-2 col-2">
      			<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
      		</div>
      	</div>

      	<div class="row user-img">
      		<div class="col-lg-12 col-sm-12 col-12 div1">
      			<img style="width:210px;height:210px;" src="avatars<?=avatar()?>" class="rounded-circle img-thumbnail">
            <form action="usuario.php" method="post" enctype="multipart/form-data">

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
                  <h5><?=nombreUsuario()?></h5>
                  <i class="fas fa-map-marker-alt"></i>
      			  <span>Direccion</span>
      		</div>
      	</div>

      	<div class="row user-social-detail">

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


    <?php require_once "partials/footer.php" ?>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
