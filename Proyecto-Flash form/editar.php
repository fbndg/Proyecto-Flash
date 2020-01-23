<?php
session_start();
require_once 'controladores/controladorValidacion.php';
require_once("./classes/Controller/Connection.php");
Connection::abrirConexion();
$idP = $_GET["id"];
$db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
$query = $db->prepare("SELECT * FROM productos WHERE idProducto = '$idP'");
$query->execute();
$producto = $query->fetch(PDO::FETCH_ASSOC);
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

    <title>Crear Articulo</title>
  </head>
  <body>
    <div class="container">

      <?php require_once "partials/nav.php" ?>

      <div class="row cont2">
        <div class="col-12 mx-auto entero2">
          <div class="card card-signin flex-row my-5">
            <div class="card-body">
              <form class="form-signin" method="POST" action="controladores/update.php?id=<?=$idP?>" enctype="multipart/form-data">

                <!--          ##IMAGEN ARTICULO##          -->
                <h5 class="card-title text-center">Editar Articulo</h5>
                <div class="form-label-group">
                  <label for="">Imagen del Producto</label> <br><br>
                  <input type="file" name="imagen" class="form-control" id="">
                </div>


              <!--          ##MODELO##          -->
              <div class="form-row">
                <div class="form-label-group col">
                  <input type="text" id="nombreModelo" name="nombreModelo" class="form-control" placeholder="Nombre Modelo"  autofocus value="<?=$producto["nombreModelo"]?>">
                  <label class="ml-1" for="nombreModelo">Nombre Modelo</label>

                </div>

                <div class="form-label-group col">
                  <input type="text" id="numberModelo" name="numberModelo" class="form-control" placeholder="numberModelo" required autofocus value="<?=$producto["modeloNumber"]?>">
                  <label class="ml-1" for="numberModelo">Modelo Number</label>
                                  </div>
              </div>
              <hr>

              <!--          ##PRECIO-STOCK-OFERTA##          -->
              <div class="form-row">
                <div class="form-label-group col">
                  <input type="text" id="stock" name="stock" class="form-control" placeholder="Stock" required value="<?=$producto["stock"]?>">
                  <label class="ml-1" for="stock">Stock</label>
                </div>

                <div class="form-label-group col">
                  <input type="precio" id="precio" name="precio" class="form-control" placeholder="Precio" required value="<?=$producto["precioUnitario"]?>">
                  <label class="ml-1" for="precio">Precio</label>
                </div>

                <div class="form-label-group col">
                  <input type="oferta" id="oferta" name="oferta" class="form-control" placeholder="Oferta" required value="<?=$producto["precioferta"]?>">
                  <label class="ml-1" for="oferta">Oferta</label>
                </div>
              </div>
              <hr>

              <!--          ##IMAGEN CATEGORIAO##          -->
              <div class="form-row ml-1 my-1">
                  <label class="col-12">Categoria</label>
                  <?php
                    $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
                    $query = $db->prepare("SELECT * FROM categorias");
                    $query->execute();
                    $categorias = $query->fetch(PDO::FETCH_ASSOC);
                    while ($categorias !=null) {?>
                      <div class="custom-control custom-checkbox col mr-sm-2">
                        <input type="checkbox" name="cat" value="<?=$categorias["idcategoria"]?>" class="custom-control-input" id="cat<?=$categorias["idcategoria"]?>" <?php if($categorias["idcategoria"] == $producto["idCategoria"]) { echo "checked";}?>>
                        <label class="custom-control-label ml-3" for="cat<?=$categorias["idcategoria"]?>"><?=$categorias["categoria"]?></label>
                      </div>
                  <?php $categorias = $query->fetch(PDO::FETCH_ASSOC);} ?>
              </div>
              <div class="input-group mb-3 mt-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-secondary">Action</button>
                  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria- expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
              </div>
              <hr>

              <!--          ##MARCA##          -->
              <div class="form-group">
                <label for="marca">Marca</label>
                <select multiple class="form-control" name="marca" id="marca">
                  <?php
                    $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
                    $query = $db->prepare("SELECT * FROM marcas");
                    $query->execute();
                    $marcas = $query->fetch(PDO::FETCH_ASSOC);
                    while ($marcas !=null) {?>
                      <option <?php if($marcas['idMarca']==$producto['idMarca']){echo 'selected';}?> class="pl-2" value="<?=$marcas['idMarca']?>"> <?=$marcas['marca']?></option>

                  <?php $marcas = $query->fetch(PDO::FETCH_ASSOC);} ?>
                </select>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-secondary">Action</button>
                  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
              </div>
              <!--          ##DESCRIPCION##          -->
              <div class="form-label-group">
                <textarea id="descripcion" rows="8" cols="80" class="form-control" placeholder="Descripcion"></textarea>
              </div>
                <hr>


                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="edit" value="edit">Ingresar datos</button>
                <hr class="my-4">

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
