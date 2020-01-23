<?php

class Descuento{

public $iDescuento;
public $descuento;
public $monto;

public function __construct($iD, $d, $m){
$this->iDescuento=$iDescuento;
$this->descuento=$descuento;
$this->monto=$monto;
}

$desc1 = new Descuento(1,'efectivo',500);
echo "<br>"."<h1>Descuentos.</h1>"."<br>".
"<h3>Id del descuento: $desc1->idCondicionIva."."</h3>",
"<h3>Descuento.: $desc1->condicion."."</h3>",
"<h3>Monto: $desc1->monto."."</h3>";

$desc2 = new Descuento(2,'promocion',250);
echo "<br>"."<h1>Descuentos.</h1>"."<br>".
"<h3>Id del descuento: $desc2->idCondicionIva."."</h3>",
"<h3>Descuento.: $desc2->condicion."."</h3>",
"<h3>Monto: $desc2->monto."."</h3>";

$desc3 = new Descuento(3,'acumulativo',200);
echo "<br>"."<h1>Descuentos.</h1>"."<br>".
"<h3>Id del descuento: $desc3->idCondicionIva."."</h3>",
"<h3>Descuento.: $desc3->condicion."."</h3>",
"<h3>Monto: $desc3->monto."."</h3>";

$desc4 = new Descuento(4,'no acumulativo',150);
echo "<br>"."<h1>Descuentos.</h1>"."<br>".
"<h3>Id del descuento: $desc4->idCondicionIva."."</h3>",
"<h3>Descuento.: $desc4->condicion."."</h3>",
"<h3>Monto: $desc4->monto."."</h3>";

}


 ?>
