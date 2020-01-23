<?php

class Connection{
  public static $dsn = 'mysql:host=127.0.0.1;dbname=flashtore;port=3306';
  public static $db_user = 'root';
  public static $db_pass = '';
  public static $opt=[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION];

  public static function abrirConexion(){

    try {
      $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
      // $query=$db->prepare('insert into estados VALUES
      // (7,"pendiente5")');
      // $query->execute();

    } catch (PDOException $Exception) {
      echo $Exception->getMessage();
    }

  }

  public static function cerrarConexion(){

    try {
      $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
    } catch (PDOException $Exception) {
      echo $Exception->getMessage();
    }
    $db=null;
    }

  // public static function registro($nombre, $email, $password){
  //
  //   if($_POST) {
  //     $erroresEnRegistro = validarFormulario();
  //     if(count($erroresEnRegistro) == 0) {
  //       $connect->registro()
  //       $usuarioParaGuardar = [
  //         "nombre" => trim($_POST['nombre']),
  //         "email" => trim($_POST['email']),
  //         "avatar" => uniqid(),
  //         "password" => password_hash($_POST['password'], PASSWORD_DEFAULT)
  //       ];
  //       $elJson = json_encode($usuarioParaGuardar);
  //       file_put_contents("usuarios.json", $elJson . PHP_EOL, FILE_APPEND);
  //       header("Location: login.php");
  //       exit;
  //     }
  //   }
  //     $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
  //     $query=$db->prepare('insert into estados VALUES (5,"pendiente2")');
  //     $query->execute();
  //
  //
  //   }

}


// Connection::abrirConexion();
 ?>
