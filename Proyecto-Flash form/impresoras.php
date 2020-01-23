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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/estilos-impresoras.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Impresoras</title>
  </head>
  <body>
    <div class="container">

      <?php require_once "partials/nav.php" ?>

   <!--<section class="main">
     <section class="articles">
       <div class="flex-container dest">
       <article class="col-xs-12 col-sm-12 col-md-8 col-lg-7 col-xl-6">
         <h2>Impresoras</h2>
         <a href="imp1.php"><img src="img/imp1.png" alt="Laser Monocromática Brother HI-1200"></a>


                 <p>$ 7170

         Impresora Laser Monocromática Brother HI-1200 21ppm</p>
                 <img src="img/imp2.png" alt="Laser Brother HI-1212w">
         <p>$ 8749
         Impresora Laser Brother HI-1212w
         21ppm 2400 X 600 Dpi Wifi</p>
                 <img src="img/imp3.png" alt="Laser Multifunción HP M135W">
         <p>$ 12999
         Impresora Multifunción Laser HP
         M135W LJ 21P/m 4ZB83A</p>
                 <img src="img/imp4.png" alt="Laser HP M203dw">
         <p>
           $12189
         Impresora Laser Hp M203dw Wifi
         Duplex Automático
         </p>
                 <img src="img/imp5.png" alt="Laser Multifunción HP M137FNW">
         <p>$14499
         Impresora Multifunción Laser HP
         M137FNW 21P/m 4ZB84A</p>
                 <img src="img/imp6.png" alt="Laser Brother HL-L2360 Dw">
         <p>$15449
         Impresora Laser Brother HL-
         L2360Dw 32P/m Wifi Duplex</p>
     </article>
     </div>
   </section>-->

    <section class="main">
      <section class="articles">
       <!--<div class="flex-container dest">-->
         <div class="flex-container indeximg">
           <article>
             <!--<article class="col-xs-12 col-sm-12 col-md-8 col-lg-7 col-xl-6 ">-->
             <h2>Impresoras</h2>
             <?php
               $db=new PDO(Connection::$dsn,Connection::$db_user,Connection::$db_pass,Connection::$opt);
               $query = $db->prepare("SELECT * FROM productos WHERE idCategoria > 2");
               $query->execute();
               $productos = $query->fetch(PDO::FETCH_ASSOC);
               while ($productos !=null) { ?>
                 <a href='producto.php?id=<?php echo $productos["idProducto"]; ?>'><img src='img/<?php echo $productos["imagenO"]; ?>'></a>

             <?php $productos = $query->fetch(PDO::FETCH_ASSOC);} ?>
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
   <script src="https://kit.fontawesome.com/60afb82e62.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
