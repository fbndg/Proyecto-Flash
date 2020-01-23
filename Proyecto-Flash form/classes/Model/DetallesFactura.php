<?php

class DetallesFactura{

  public $iDetalleFactura;
  public $idFactura;
  public $idProducto;
  public $idFormaPago;
  public $iDescuento;
  public $idFormaEnvio;
  public $idCliente;
  public $precioUnitario;
  public $preciOferta;
  public $cantidad;

  public function __construct($iDF,$idFact,$idP,$idFP,$iD,$idFE,$idC,$pU,$pO,$cant){

    $this->iDetalleFactura=$iDF;
    $this->idFactura=$idFact;
    $this->idProducto=$idP;
    $this->idFormaPago=$idFP;
    $this->iDescuento=$iD;
    $this->idFormaEnvio=$idFE;
    $this->idCliente=$idC;
    $this->precioUnitario=$pU;
    $this->preciOferta=$pO;
    $this->cantidad=$c;
  }

  $detFact1 = new Factura(1,1,1,1,1,1,1,14.839,13.490,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact1->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact1->idFactura."."</h3>",
  "<h3>Id del producto: $detFact1->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact1->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact1->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact1->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact1->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact1->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact1->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact1->cantidad."."</h3>";

  $detFact2 = new Factura(2,2,2,2,2,2,2,13.995,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact2->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact2->idFactura."."</h3>",
  "<h3>Id del producto: $detFact2->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact2->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact2->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact2->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact2->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact2->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact2->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact2->cantidad."."</h3>";

  $detFact3 = new Factura(3,3,3,3,3,3,3,14.990,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact3->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact3->idFactura."."</h3>",
  "<h3>Id del producto: $detFact3->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact3->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact3->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact3->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact3->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact3->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact3->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact3->cantidad."."</h3>";

  $detFact4 = new Factura(4,4,4,4,4,4,4,15.95,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact4->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact4->idFactura."."</h3>",
  "<h3>Id del producto: $detFact4->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact4->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact4->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact4->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact4->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact4->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact4->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact4->cantidad."."</h3>";

  $detFact5 = new Factura(5,5,5,5,5,1,1,15.990,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact5->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact5->idFactura."."</h3>",
  "<h3>Id del producto: $detFact5->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact5->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact5->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact5->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact5->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact5->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact5->cantidad."."</h3>";

  $detFact6 = new Factura(6,6,6,6,6,2,2,16.495,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact6->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact6->idFactura."."</h3>",
  "<h3>Id del producto: $detFact6->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact6->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact6->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact6->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact6->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact6->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact6->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact6->cantidad."."</h3>";

  $detFact7 = new Factura(7,7,7,7,7,3,3,30.990,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact7->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact7->idFactura."."</h3>",
  "<h3>Id del producto: $detFact7->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact7->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact7->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact7->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact7->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact7->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact7->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact7->cantidad."."</h3>";

  $detFact8 = new Factura(8,8,8,8,8,4,4,14.990,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact8->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact8->idFactura."."</h3>",
  "<h3>Id del producto: $detFact8->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact8->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact8->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact8->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact8->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact8->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact8->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact8->cantidad."."</h3>";

  $detFact9 = new Factura(9,9,9,9,9,1,1,14.990,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact9->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact9->idFactura."."</h3>",
  "<h3>Id del producto: $detFact9->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact9->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact9->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact9->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact9->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact9->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact9->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact9->cantidad."."</h3>";

  $detFact10 = new Factura(10,10,10,1,1,2,2,19.790,17.999,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact10->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact10->idFactura."."</h3>",
  "<h3>Id del producto: $detFact10->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact10->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact10->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact10->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact10->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact10->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact10->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact10->cantidad."."</h3>";

  $detFact11 = new Factura(11,11,11,2,2,3,3,19.49,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact11->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact11->idFactura."."</h3>",
  "<h3>Id del producto: $detFact11->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact11->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact11->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact11->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact11->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact11->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact11->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact11->cantidad."."</h3>";

  $detFact12 = new Factura (12,12,12,3,3,4,4,22.549,20.499,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact12->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact12->idFactura."."</h3>",
  "<h3>Id del producto: $detFact12->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact12->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact12->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact12->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact12->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact12->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact12->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact12->cantidad."."</h3>";

  $detFact13 = new Factura(13,13,13,4,4,1,1,7.170,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact13->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact13->idFactura."."</h3>",
  "<h3>Id del producto: $detFact13->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact13->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact13->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact13->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact13->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact13->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact13->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact13->cantidad."."</h3>";

  $detFact14 = new Factura(14,14,14,5,5,2,2,8.749,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact14->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact14->idFactura."."</h3>",
  "<h3>Id del producto: $detFact14->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact14->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact14->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact14->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact14->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact14->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact14->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact14->cantidad."."</h3>";

  $detFact15 = new Factura(15,15,15,6,6,3,3,12.999,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact15->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact15->idFactura."."</h3>",
  "<h3>Id del producto: $detFact15->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact15->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact15->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact15->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact15->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact15->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact1->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact15->cantidad."."</h3>";

  $detFact16 = new Factura(16,16,16,7,7,4,4,12.189,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact16->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact16->idFactura."."</h3>",
  "<h3>Id del producto: $detFact16->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact16->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact16->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact16->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact16->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact16->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact16->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact16->cantidad."."</h3>";

  $detFact17 = new Factura(17,17,17,8,8,1,1,14.49,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact17->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact17->idFactura."."</h3>",
  "<h3>Id del producto: $detFact17->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact17->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact17->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact17->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact17->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact17->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact17->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact17->cantidad."."</h3>";

  $detFact18 = new Factura (18,18,18,9,9,2,2,15.44,0,1);
  echo "<br>"."<h1>Detalle de la factura.</h1>"."<br>".
  "<h3>Id del detalle de la factura: $detFact18->iDetalleFactura."."</h3>",
  "<h3>Id de la factura: $detFact18->idFactura."."</h3>",
  "<h3>Id del producto: $detFact18->idProducto."."</h3>",
  "<h3>Id de la forma de pago: $detFact18->idFormaPago."."</h3>",
  "<h3>Id del descuento: $detFact18->iDescuento."."</h3>",
  "<h3>Id de la forma de envío: $detFact18->idFormaEnvio."."</h3>",
  "<h3>Id del cliente: $detFact18->idCliente."."</h3>",
  "<h3>Precio unitario: $detFact18->precioUnitario."."</h3>",
  "<h3>Precio de oferta: $detFact18->preciOferta."."</h3>",
  "<h3>Cantidad de productos: $detFact18->cantidad."."</h3>";
}


 ?>
