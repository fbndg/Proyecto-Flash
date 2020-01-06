<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/normalize.css">
  <title>inicio</title>
</head>
<body>
   <div class="container">

    <?php require_once "partials/nav.php" ?>

    <section class="main">
      <section class="articles">
        <div class="flex-container indeximg">
         <article class="col-12">
            <h2>Combos completos</h2>
            <a href="desk1.php"><img src="img/dk1bcopia.png" alt="AMD APU A6 7480"></a> <!--Se vincula dk1copia1.png a desk1.html-->
            <!-- <div class="descuento">
              <strong>10 % OFF</strong>
            </div> -->
            <img src="img/dk2copia.png" alt="PC Intel Celeron G4900 SSD 120Gb">
            <img src="img/dk3copia.png" alt="AMD APU A6 7480 1Tb">
         </article>
       </div>

       <div class="flex-container indeximg">
         <article class="col-12">
            <h2>Notebooks</h2>
            <a href="noteb1.php"><img src="img/noteb1copia.png" alt="Dell Inspiron 3481 i3"></a>
            <img src="img/noteb2copia.png" alt="Cx 2en1 Touch360">
            <img src="img/noteb3copia.png" alt="Cx Cloudbook 23">
         </article>
       </div>

       <div class="flex-container indeximg">
         <article class="col-12">
          <h2>Impresoras</h2>
          <a href="imp1.php"><img src="img/imp1copia.png" alt="Laser Monocromática Brother HI-1200"></a>
          <img src="img/imp2copia.png" alt="Laser Brother HI-1212w">
          <img src="img/imp3copia.png" alt="Laser Multifunción HP M135W">
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
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
