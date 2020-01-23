<?php

class FormasPago{

public $idFormaPago;
public $formaPago;
public $descripcion;

public function __construct($idF, $f, $d){

  $this->idFormaPago=$idF;
  $this->formaPago=$f;
  $this->descripcion=$d;
}

formaP1 = new FormasPago(1,'PayPal'," ");
echo "<br>"."<h1>Formas de pago.</h1>"."<br>".
"<h3>Id Forma de pago: $formaP1->idFormaPago."."</h3>",
"<h3>Forma de pago: $formaP1->formaPago."."</h3>",
"<h3>Descripción: $formaP1->descripcion."."</h3>";

formaP2 = new FormasPago(2,'Tarjetas'," ");
echo "<br>"."<h1>Formas de pago.</h1>"."<br>".
"<h3>Id Forma de pago: $formaP2->idFormaPago."."</h3>",
"<h3>Forma de pago: $formaP2->formaPago."."</h3>",
"<h3>Descripción: $formaP2->descripcion."."</h3>";

formaP3 = new FormasPago(3,'Contra reembolso'," ");
echo "<br>"."<h1>Formas de pago.</h1>"."<br>".
"<h3>Id Forma de pago: $formaP3->idFormaPago."."</h3>",
"<h3>Forma de pago: $formaP3->formaPago."."</h3>",
"<h3>Descripción: $formaP3->descripcion."."</h3>";

formaP4 = new FormasPago(4,'Transferencia bancaria'," ");
echo "<br>"."<h1>Formas de pago.</h1>"."<br>".
"<h3>Id Forma de pago: $formaP4->idFormaPago."."</h3>",
"<h3>Forma de pago: $formaP4->formaPago."."</h3>",
"<h3>Descripción: $formaP4->descripcion."."</h3>";

formaP5 = new FormasPago(5,"Mercado pago"," ");
echo "<br>"."<h1>Formas de pago.</h1>"."<br>".
"<h3>Id Forma de pago: $formaP5->idFormaPago."."</h3>",
"<h3>Forma de pago: $formaP5->formaPago."."</h3>",
"<h3>Descripción: $formaP5->descripcion."."</h3>";

formaP6 = new FormasPago(6,'Moneda virtual'," ");
echo "<br>"."<h1>Formas de pago.</h1>"."<br>".
"<h3>Id Forma de pago: $formaP6->idFormaPago."."</h3>",
"<h3>Forma de pago: $formaP6->formaPago."."</h3>",
"<h3>Descripción: $formaP6->descripcion."."</h3>";

formaP7 = new FormasPago(7,'Banca online'," ");
echo "<br>"."<h1>Formas de pago.</h1>"."<br>".
"<h3>Id Forma de pago: $formaP7->idFormaPago."."</h3>",
"<h3>Forma de pago: $formaP7->formaPago."."</h3>",
"<h3>Descripción: $formaP7->descripcion."."</h3>";

}
 ?>
