<?php
  session_start();
  require_once 'controladorValidacion.php';
  require_once("../classes/Controller/Connection.php");
  Connection::abrirConexion();
  if($_FILES) {

    $extension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
    $archivoTemporal = $_FILES["imagen"]["tmp_name"];
    $nuevaRuta = dirname(__file__, 2);
    $nuevaRuta = $nuevaRuta . "\img/";
    $nombreArchivo = $_POST["nombreModelo"] .  $_POST["numberModelo"] . "." . $extension;
    move_uploaded_file($archivoTemporal, $nuevaRuta . $nombreArchivo);

  }
  if (isset($_POST["new"])) {
    $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);

    $imagen = $nombreArchivo;
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
      $precio = $db->prepare("INSERT INTO productos(idMarca, idCategoria, precioUnitario, precioferta, stock, imagenO, imagenP, nombreModelo, modeloNumber) VALUES ('$marca', '$categorias', '$precioUni', '$PrecioOfer', '$stock', '$imagen', '$imagen', '$nombreModelo', '$modeloNumber')");
      $precio->execute();

    }
    header("Location: ../crear.php");

  }
  ?>
