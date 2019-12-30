<?php
session_start();
require_once 'controladores/controladorValidacion.php';
$erroresEnRegistro = [];
if($_POST) {
    $erroresEnRegistro = validarFormulario();
    if(count($erroresEnRegistro) == 0) {
        $usuarioParaGuardar = [
            "nombre" => trim($_POST['nombre']),
            "email" => trim($_POST['email']),
            "password" => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        $elJson = json_encode($usuarioParaGuardar);
        file_put_contents("usuarios.json", $elJson . PHP_EOL, FILE_APPEND);
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/999ad7145f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/formstylereg.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">

    <title>Registro</title>
  </head>
  <body>
    <div class="container">

      <?php require_once "partials/nav.php" ?>

      <div class="row cont2">
        <div class="col-lg-10 col-xl-9 mx-auto entero2">
          <div class="card card-signin flex-row my-5">

            <div class="card-body">
              <h5 class="card-title text-center">Registro</h5>
              <form class="form-signin" method="POST" action="">
                <div class="form-label-group">
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Usuario" required autofocus value="<?= persistirDato("nombre", $erroresEnRegistro) ?>">
                  <label for="nombre">Nombre de usuario</label>
                  <?php
                      if(isset($erroresEnRegistro['nombre'])) {
                          foreach($erroresEnRegistro['nombre'] as $error){
                              echo '<small class="text-danger">' . $error . '</small><br>';
                          }
                      } else {
                          echo "";
                      }
                  ?>
                </div>

                <div class="form-label-group">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Dirección de email" required value="<?= persistirDato("email", $erroresEnRegistro) ?>">
                  <label for="email">Dirección de email</label>
                  <?php
              if(isset($erroresEnRegistro['email'])) {
                  foreach($erroresEnRegistro['email'] as $error){
                      echo '<small class="text-danger">' . $error . '</small><br>';
                  }
              } else {
                  echo "";
              }
              ?>
                </div>

                <hr>

                <div class="form-label-group">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required >
                  <label for="password">Contraseña</label>
                  <?php
                  if(isset($erroresEnRegistro['password'])) {
                      foreach($erroresEnRegistro['password'] as $error){
                          echo '<small class="text-danger">' . $error . '</small><br>';
                      }
                  } else {
                      echo "";
                  }
                  ?>
                </div>

                <div class="form-label-group">
                  <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Password" required>
                  <label for="repassword">Confirmar contraseña</label>
                  <?php
                  if(isset($erroresEnRegistro['repassword'])) {
                      foreach($erroresEnRegistro['repassword'] as $error){
                          echo '<small class="text-danger">' . $error . '</small><br>';
                      }
                  } else {
                      echo "";
                  }
                  ?>
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrar</button>
                <a class="d-block text-center mt-2 small" href="login.php">Ingresar</a>
                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Regístrate con Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Regístrate con Facebook</button>
              </form>
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
