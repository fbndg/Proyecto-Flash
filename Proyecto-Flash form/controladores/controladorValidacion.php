<?php

function validarFormulario() {
    $errores = [];
    if(isset($_POST['nombre'])) {
        if(empty($_POST['nombre'])) {
            $errores['nombre'][] = "Este campo es obligatorio.";
        }
        if(strlen($_POST['nombre']) < 2) {
            $errores['nombre'][] = "Tu nombre debe tener por lo menos 2 letras.";
        }
    }

    if(isset($_POST['email'])) {
        if(empty($_POST['email'])) {
            $errores['email'][] = "Este campo es obligatorio.";
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errores['email'][] = "Deberás insertar un email válido.";
        }
    }

    if(isset($_POST['password'])) {
        if(empty($_POST['password'])) {
            $errores['password'][] = "Este campo es obligatorio.";
        }
        if(strlen($_POST['password']) < 6) {
            $errores['password'][] = "La longitud de la contraseña debe ser superior a 6.";
        }
    }

    if(isset($_POST['repassword'])) {
        if(empty($_POST['repassword'])) {
            $errores['repassword'][] = "Este campo es obligatorio.";
        }
        if($_POST['password'] != $_POST['repassword']) {
        $errores['repassword'] = "Las contraseñas debe coincidir.";
        }
    }
    return $errores;
}
//-----------------------------------------------------------

function validarAvatar(){
  $erroresA = [];
  if(!empty($_FILES["avatar"])) {

    if ($_FILES["avatar"]["size"] > 3000000) {
      $erroresA["avatar"] = "El tamaño máximo del archivo sera de 3mb";
    }
    $nombreArchivo = $_FILES["avatar"]["name"];
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    $extension = strtolower($extension);
    if($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
      $erroresA["avatar"][] = "Las extensiones válida con JPG y PNG";
    }
  }
  return $erroresA;
}
//-----------------------------------------------------------

function persistirDato($dato, $arrayDeErrores) {
    if(isset($arrayDeErrores[$dato])) {
        return "";
    } else {
        if(isset($_POST[$dato])) {
            return $_POST[$dato];
        }
    }
}
//-----------------------------------------------------------
function avatar(){
  $arrayFormato = [".jpg", ".jpeg", ".png"];
  $dirA = '/foto-usuario.png';
  foreach ($arrayFormato as $formato) {
    $avatarDir = "avatars/avatar_" . $_SESSION['avatar'] . $formato;
    $avatarName = '/avatar_' . $_SESSION['avatar'] . $formato;
    if (file_exists($avatarDir)){
      $dirA = $avatarName;
    }
  } return $dirA;
}
//-----------------------------------------------------------
function nombreUsuario(){
  $nombreU = "Nombre Apellido";
  if($_SESSION["nombre"]){
    $nombreU = $_SESSION['nombre'];
  }
  return $nombreU;
}
//-----------------------------------------------------------
function eliminarExFoto(){
  global $extension;
  if ($extension == "jpg") {
    unlink("avatars/avatar_" . $_SESSION["avatar"] . ".png");
    unlink("avatars/avatar_" . $_SESSION["avatar"] . ".jpeg");
  } elseif ($extension == "jpeg") {
    unlink("avatars/avatar_" . $_SESSION["avatar"] . ".png");
    unlink("avatars/avatar_" . $_SESSION["avatar"] . ".jpg");
  } elseif ($extension == "png") {
    unlink("avatars/avatar_" . $_SESSION["avatar"] . ".jpg");
    unlink("avatars/avatar_" . $_SESSION["avatar"] . ".jpeg");
  }
}
//-----------------------------------------------------------
function pre($algo){
  echo "<pre style='color:white;background-color:black;'>";
  var_dump($algo);
  echo "</pre>";
}


?>
