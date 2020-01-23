<?php
  session_start();
  require_once("./classes/Controller/Connection.php");
  Connection::abrirConexion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Productos</title>
  </head>
  <body>
    <div class="container">

      <?php require_once "partials/nav.php" ?>

      <section class="main">
        <section class="articles">
          <div class="flex-container prodct">
            <article>
             <h2>TODOS LOS PRODUCTOS</h2>

             <?php
               $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
               $query = $db->prepare("SELECT * FROM productos");
               $query->execute();
               $productos = $query->fetch(PDO::FETCH_ASSOC);
               while ($productos !=null) { ?>
                 <a href='producto.php?id=<?php echo $productos["idProducto"]; ?>'><img src='img/<?php echo $productos["imagenP"]; ?>'></a>

             <?php $productos = $query->fetch(PDO::FETCH_ASSOC);} ?>
               <!-- <div class="descuento">
                 <strong>10 % OFF</strong>
               </div> -->

            </article>
          </div>
        </section>
      </section>

      <div class="cont-imagen">
        <div id="imagen">
          <a href="#"><img src="img/flechaSubir.jpg" alt="Flecha"></a>
        </div>
      </div>

      <?php require_once "partials/footer.php" ?>

    </div>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
