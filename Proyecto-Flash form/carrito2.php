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


    <div class="container">

      <?php require_once "partials/nav.php" ?>

      <section class="main">
        <section class="articles">
          <div class="flex-container indeximg">
            <article class="col-12">

              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">11</th>
                    <td>PC AMD APU A7480 SSD 120GB RAM 4GB</td>
                    <td>$13490</td>
                    <td>1</td>
                    <td>$13490</td>
                  </tr>
                  <tr>
                    <th scope="row">24</th>
                    <td>Notebook Bangho Zero M4 Intel J3160 $G SSD-240G 14"</td>
                    <td>$17999</td>
                    <td>1</td>
                    <td>$17999</td>
                  </tr>
                  <tr>
                    <th scope="row">32</th>
                    <td>Impresora Laser Brother HI-1212w 21ppm 2400 X 600 Dpi Wifi</td>
                    <td>$8749</td>
                    <td>2</td>
                    <td>$17498</td>
                  </tr>
                  <tr>
                    <th scope="row">Total a pagar</th>
                    <td colspan="2"></td>
                    <td>incluye iva</td>
                    <td>$48987</td>
                  </tr>
                </tbody>
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
