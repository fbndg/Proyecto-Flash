<?php

class FormasEnvio{

public $idFormaEnvio;
public $idEstado;
public $formaEnvio;
public $fechaEnvio;
public $descripcion;
public $costo;

public function __construct($idF, $idE, $fE, $feE, $d, $c){
$this->idFormaEnvio=$idF;
$this->idEstado=$idE;
$this->formaEnvio=$fE;
$this->fechaEnvio=$feE;
$this->descripcion=$d;
$this->costo=$c;
}

$fEnvio1 = new FormasEnvio(1,1,'Envio a domicilio','12/12/2019'," ",80);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio1->idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio1->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio1->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio1->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio1->descripcion."."</h3>",
"<h3>Costo: $fEnvio1->costo."."</h3>";

$fEnvio2 = new FormasEnvio(2,2,'Envio en un dia','2019/07/02'," ",70);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio2>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio2->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio2->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio2->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio2->descripcion."."</h3>",
"<h3>Costo: $fEnvio3->costo."."</h3>";

$fEnvio3 = new FormasEnvio(3,3,'Mismo dia','2019/06/05'," ",100);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio3>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio3->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio3->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio3->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio3->descripcion."."</h3>",
"<h3>Costo: $fEnvio3->costo."."</h3>";

$fEnvio4 = new FormasEnvio(4,4,'Enviado por el vendedor','2019/12/23'," ",60);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio4>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio4->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio4->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio4->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio4->descripcion."."</h3>",
"<h3>Costo: $fEnvio4->costo."."</h3>";

$fEnvio5 = new FormasEnvio(5,1,'Recogida en un punto','2019/12/27'," ",30);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio5>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio5->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio5->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio5->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio5->descripcion."."</h3>",
"<h3>Costo: $fEnvio5->costo."."</h3>";

$fEnvio6 = new FormasEnvio(6,2,'Correo','2019/12/30'," ",50);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio6>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio6->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio6->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio6->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio6->descripcion."."</h3>",
"<h3>Costo: $fEnvio6->costo."."</h3>";

$fEnvio7 = new FormasEnvio(7,3,'Envio a domicilio','2019/12/26'," ",80);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio7>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio7->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio7->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio7->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio7->descripcion."."</h3>",
"<h3>Costo: $fEnvio7->costo."."</h3>";

$fEnvio8 = new FormasEnvio(8,4,'Envio en un dia','2019/12/13'," ",70);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio8>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio8->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio8->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio8->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio8->descripcion."."</h3>",
"<h3>Costo: $fEnvio8->costo."."</h3>";

$fEnvio9 = new FormasEnvio(9,1,'Mismo dia','2019/12/01'," ",100);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio9>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio9->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio9->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio9->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio9->descripcion."."</h3>",
"<h3>Costo: $fEnvio9->costo."."</h3>";

$fEnvio10 = new FormasEnvio(10,2,'Enviado por el vendedor','2019/11/26'," ",60);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio10>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio10->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio10->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio10->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio10->descripcion."."</h3>",
"<h3>Costo: $fEnvio10->costo."."</h3>";

$fEnvio11 = new FormasEnvio(11,3,'Recogida en un punto','2019/11/05'," ",30);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio11>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio11->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio11->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio11->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio11->descripcion."."</h3>",
"<h3>Costo: $fEnvio11->costo."."</h3>";

$fEnvio12 = new FormasEnvio(12,4,'Correo','2019/10/30'," ",50);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio12>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio12->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio12->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio12->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio12->descripcion."."</h3>",
"<h3>Costo: $fEnvio12->costo."."</h3>";

$fEnvio13 = new FormasEnvio(13,1,'Envio a domicilio','2019/12/23'," ",80);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio13>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio13->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio13->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio13->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio13->descripcion."."</h3>",
"<h3>Costo: $fEnvio13->costo."."</h3>";

$fEnvio14 = new FormasEnvio(14,2,'Envio en un dia','2019/12/22'," ",70);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio14>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio14->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio14->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio14->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio14->descripcion."."</h3>",
"<h3>Costo: $fEnvio14->costo."."</h3>";

$fEnvio15 = new FormasEnvio(15,3,'Mismo dia','2019/12/15'," ",100);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio15>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio15->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio15->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio15->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio15->descripcion."."</h3>",
"<h3>Costo: $fEnvio15->costo."."</h3>";

$fEnvio16 = new FormasEnvio(16,4,'Enviado por el vendedor','2019/11/13'," ",60);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio16>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio16->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio16->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio16->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio16->descripcion."."</h3>",
"<h3>Costo: $fEnvio16->costo."."</h3>";

$fEnvio17 = new FormasEnvio(17,1,'Recogida en un punto','2019/12/17'," ",30);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio17>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio17->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio17->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio17->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio17->descripcion."."</h3>",
"<h3>Costo: $fEnvio17->costo."."</h3>";

$fEnvio18 = new FormasEnvio(18,2,'Correo','2019/12/23'," ",50);
echo "<br>"."<h1>Formas de envío.</h1>"."<br>".
"<h3>Id de la forma de envío: $fEnvio18>idFormaEnvio."."</h3>",
"<h3>Id del estado: $fEnvio18->idEstado."."</h3>",
"<h3>Forma de envío: $fEnvio18->formaEnvio."."</h3>",
"<h3>Fecha de envío: $fEnvio18->fechaEnvio."."</h3>",
"<h3>Descripción: $fEnvio18->descripcion."."</h3>",
"<h3>Costo: $fEnvio18->costo."."</h3>";

}

 ?>
