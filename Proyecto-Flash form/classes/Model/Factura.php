<?php

class Factura{

public $idFactura;
public $iDetalleFactura;
public $fecha;
public $precioTotal;

public function __construct($idF, $iD, $f, $pT){
  $this->idFactura=$idF;
  $this->iDetalleFactura=$iDetalleFactura;
  $this->fecha=$fecha;
  $this->precioTotal=$precioTotal;
}

$fact1 = new Factura(1,1,'2019/10/10',12.990);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact1->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact1->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact1->fecha."."</h3>",
"<h3>Precio total: $fact1->precioTotal."."</h3>";

$fact2 = new Factura(2,2,'2019/07/01',13.995);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact2->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact2->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact2->fecha."."</h3>",
"<h3>Precio total: $fact2->precioTotal."."</h3>";

$fact3 = new Factura(3,3,'2019/06/05',14.990);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact3->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact3->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact3->fecha."."</h3>",
"<h3>Precio total: $fact3->precioTotal."."</h3>";

$fact4 = new Factura(4,4,'2019/12/20',15.495);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact4->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact4->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact4->fecha."."</h3>",
"<h3>Precio total: $fact4->precioTotal."."</h3>";

$fact5 = new Factura(5,5,'2019/12/23',15.990);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact5->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact5->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact5->fecha."."</h3>",
"<h3>Precio total: $fact5->precioTotal."."</h3>";

$fact6 = new Factura(6,6,'2019/12/24',16.495);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact6->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact6->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact6->fecha."."</h3>",
"<h3>Precio total: $fact6->precioTotal."."</h3>";

$fact7 = new Factura(7,7,'2019/12/24',30.990);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact7->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact7->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact7->fecha."."</h3>",
"<h3>Precio total: $fact7->precioTotal."."</h3>";

$fact8 = new Factura(8,8,'2019/12/12',14.9900);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact8->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact8->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact8->fecha."."</h3>",
"<h3>Precio total: $fact8->precioTotal."."</h3>";

$fact9 = new Factura(9,9,'2019/12/01',14.990);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact9->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact9->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact9->fecha."."</h3>",
"<h3>Precio total: $fact9->precioTotal."."</h3>";

$fact10 = new Factura(10,10,'2019/11/23',17.749);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact10->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact10->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact10->fecha."."</h3>",
"<h3>Precio total: $fact10->precioTotal."."</h3>";

$fact11 = new Factura(11,11,'2019/11/01',19.490);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact11->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact11->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact11->fecha."."</h3>",
"<h3>Precio total: $fact11->precioTotal."."</h3>";

$fact12 = new Factura(12,12,'2019/10/25',20.349);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact12->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact12->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact12->fecha."."</h3>",
"<h3>Precio total: $fact12->precioTotal."."</h3>";

$fact13 = new Factura(13,13,'2019/12/23',7.170);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact13->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact13->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact13->fecha."."</h3>",
"<h3>Precio total: $fact13->precioTotal."."</h3>";

$fact14 = new Factura(14,14,'2019/12/21',8.749);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact14->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact14->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact14->fecha."."</h3>",
"<h3>Precio total: $fact14->precioTotal."."</h3>";

$fact15 = new Factura(15,15,'2019/12/15',12.999);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact15->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact15->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact15->fecha."."</h3>",
"<h3>Precio total: $fact15->precioTotal."."</h3>";

$fact16 = new Factura(16,16,'2019/11/10',12.189);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact16->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact16->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact16->fecha."."</h3>",
"<h3>Precio total: $fact16->precioTotal."."</h3>";

$fact17 = new Factura(17,17,'2019/12/13',14.499);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact17->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact17->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact17->fecha."."</h3>",
"<h3>Precio total: $fact17->precioTotal."."</h3>";

$fact18 = new Factura(18,18,'2019/12/16',15.449);
echo "<br>"."<h1>Facturas.</h1>"."<br>".
"<h3>Id de la factura: $fact18->idFactura."."</h3>",
"<h3>Id del detalle de la factura: $fact18->iDetalleFactura."."</h3>",
"<h3>Fecha: $fact18->fecha."."</h3>",
"<h3>Precio total: $fact18->precioTotal."."</h3>";

}

 ?>
