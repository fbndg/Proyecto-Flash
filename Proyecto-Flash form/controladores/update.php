<?php
  session_start();
  require_once 'controladorValidacion.php';
  require_once("../classes/Controller/Connection.php");
  Connection::abrirConexion();
  $idP = $_GET["id"];

  $db2=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
  $query = $db2->prepare("SELECT * FROM productos WHERE idProducto = '$idP'");
  $query->execute();
  $producto = $query->fetch(PDO::FETCH_ASSOC);
  $imagen = $producto["imagenP"];
  if($_FILES) {

    $extension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
    $archivoTemporal = $_FILES["imagen"]["tmp_name"];
    $nuevaRuta = dirname(__file__, 2);
    $nuevaRuta = $nuevaRuta . "\img/";
    $nombreArchivo = $_POST["nombreModelo"] .  $_POST["numberModelo"] . "." . $extension;
    move_uploaded_file($archivoTemporal, $nuevaRuta . $nombreArchivo);
    $imagen = $nombreArchivo;

  }
  if (isset($_POST["edit"])) {
    $marca = $_POST["marca"];
    $categorias = $_POST["cat"];
    $precioUni = $_POST["precio"];
    $PrecioOfer = $_POST["oferta"];
    $stock = $_POST["stock"];
    $marcaAdd = "";
    $nombreModelo = $_POST["nombreModelo"];
    $modeloNumber = $_POST["numberModelo"];
    $marcaAdd = "";
    $descripcion = "";

    if ($precioUni > 10) {
      $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
      $precio = $db->prepare("UPDATE productos SET idMarca = '$marca', idCategoria = '$categorias', precioUnitario = '$precioUni', precioferta = '$PrecioOfer', stock = '$stock', imagenO = '$imagen', imagenP = '$imagen', nombreModelo = '$nombreModelo', modeloNumber = '$modeloNumber' WHERE idProducto = '$idP' ");
      $precio->execute();

    }
    header("Location: ../editar.php?id=$idP");

  }
  ?>
