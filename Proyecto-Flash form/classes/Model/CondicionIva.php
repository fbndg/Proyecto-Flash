<?php

class CondicionIva{

  public $idCondicionIva;
  public $condicion;

  public function __construct($idC, $c){

    $this->idCondicionIva=$idC;
    $this->condicion=$c;
  }
    $cond1 = new CondicionIva(1,'Responsable inscripto');
    echo "<br>"."<h1>Condiciones de I.V.A.</h1>"."<br>".
    "<h3>Id condición de I.V.A.: $cond1->idCondicionIva."."</h3>",
    "<h3>Condición de I.V.A.: $cond1->condicion."."</h3>";

    $cond2 = new CondicionIva(2,'Monotributista');
    echo "<br>"."<h1>Condiciones de I.V.A.</h1>"."<br>".
    "<h3>Id condición de I.V.A.: $cond2->idCondicionIva."."</h3>",
    "<h3>Condición de I.V.A.: $cond2->condicion."."</h3>";

    $cond3 = new CondicionIva(3,'Exento');
    echo "<br>"."<h1>Condiciones de I.V.A.</h1>"."<br>".
    "<h3>Id condición de I.V.A.: $cond3->idCondicionIva."."</h3>",
    "<h3>Condición de I.V.A.: $cond3->condicion."."</h3>";

    $cond4 = new CondicionIva(4,'No responsable');
    echo "<br>"."<h1>Condiciones de I.V.A.</h1>"."<br>".
    "<h3>Id condición de I.V.A.: $cond4->idCondicionIva."."</h3>",
    "<h3>Condición de I.V.A.: $cond4->condicion."."</h3>";

    $cond5 = new CondicionIva(5,'Consumidor final');
    echo "<br>"."<h1>Condiciones de I.V.A.</h1>"."<br>".
    "<h3>Id condición de I.V.A.: $cond5->idCondicionIva."."</h3>",
    "<h3>Condición de I.V.A.: $cond5->condicion."."</h3>";

}



 ?>
