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
    <title>canasta</title>
  </head>
  <body>
   <header>

     <div class="container">

           <?php require_once "partials/nav.php" ?>

   <section class="main">
       <section class="articles">
<div class="flex-container indeximg">
       <article>
         <table border="1" width="550" cellspacing="10" cellpadding="0">
         <tr>
         <td>
<a href="index.php"><img src="img/carritoCopia.png" width="80" height="82"></a>
         </td>
         </tr>

         <tr>
         <th>Código</th>
         <th>Descripción</th>
         <th>Precio</th>
         <th>Cantidad</th>
         <th>Subtotal</th>
         </tr>
         <tr>
<td id="resaltado">Total a Pagar</td>
<td></td>
<td></td>
<td></td>

<td id="totales">
<!--<?php echo '$'.number_format($tSubtotal,2);?></td>-->
 </tr>
<tr>
<td colspan="4"><?php echo '<a href="index.php">
Seguir comprando... </a>';?>
</td>
<td colspan="4"><?php echo '<a href="index.php">
Finalizar la compra</a>';?>
</td>
</tr>
</table>
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
