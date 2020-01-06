<?php
session_start();
require_once 'controladores/controladorValidacion.php';
$erroresEnLogin = [];
if($_POST) {
  $erroresEnLogin = validarFormulario();
  if(count($erroresEnLogin) == 0) {
    $usuariosRegistrados = file_get_contents("usuarios.json");
    $usuariosRegistrados = explode(PHP_EOL, $usuariosRegistrados);
    array_pop($usuariosRegistrados);
    foreach($usuariosRegistrados as $usuario) {
        $arrayUsuario = json_decode($usuario, true);
        if($_POST['email'] == $arrayUsuario['email']) {
            if(password_verify($_POST['password'], $arrayUsuario['password'])) {
              $_SESSION['nombre'] = $arrayUsuario['nombre'];
              $_SESSION['avatar'] = $arrayUsuario['avatar'];
              $_SESSION['email'] = $arrayUsuario['email'];
              if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {
                  setcookie("usuarioEmail", $arrayUsuario['email'], time() + 60 * 60 * 24 * 7);
                  setcookie("usuarioPassword", $arrayUsuario['password'], time() + 60 * 60 * 24 * 7);
              }
              header('Location: usuario.php');
            }
        }
    }
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formstylelogin.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container">

      <?php require_once "partials/nav.php" ?>


      <div class="row cont2">
        <div class="col-lg-12 mx-auto entero2">
          <div class="card card-signin flex-row my-5">

            <div class="card-body">
              <h5 class="card-title text-center">Login</h5>
              <form class="form-signin" method="POST" action="">
                <div class="form-label-group">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Username" required autofocus value="<?= persistirDato("email", $erroresEnLogin) ?>">
                  <label for="email">Email</label>
                  <?php
              if(isset($erroresEnLogin['email'])) {
                  foreach($erroresEnLogin['email'] as $error){
                      echo '<small class="text-danger">' . $error . '</small><br>';
                  }
              } else {
                  echo "";
              }
              ?>
                </div>

                <hr>

                <div class="form-label-group">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                  <label for="password">Contraseña</label>
                  <?php
              if(isset($erroresEnLogin['password'])) {
                  foreach($erroresEnLogin['password'] as $error){
                      echo '<small class="text-danger">' . $error . '</small><br>';
                  }
              } else {
                  echo "";
              }
              ?>
                </div>

                <div class="custom-control custom-checkbox check">
                  <input type="checkbox" class="custom-control-input" id="recordarme" name="recordarme">
                  <label class="custom-control-label" for="recordarme">Recordarme como usuario</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ingresar</button>
                <a class="d-block text-center mt-2 small" href="registro.php">Registrarse</a>

                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Ingresá con Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Ingresá con Facebook</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    <?php require_once "partials/footer.php" ?>

  <script src="https://kit.fontawesome.com/60afb82e62.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>
</body>
</html>
