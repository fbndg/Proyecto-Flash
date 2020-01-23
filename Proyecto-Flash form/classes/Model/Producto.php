<?php

class Producto{

public $idProducto;
public $idFactura;
public $idMarca;
public $idCategoria;
public $precioUnitario;
public $preciOferta;
public $stock;

public function __construct($idP, $idF, $idM, $idC, $pU, $pO, $st){
$this->idProducto=$idP;
$this->idFactura=$idF;
$this->idMarca=$idM;
$this->idCategoria=$idC;
$this->precioUnitario=$pU;
$this->preciOferta=$pO;
$this->stock=$st;
}

$prod1= new Producto(1,1,1,1,14839,13490,10);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod1->idProducto."."</h3>",
"<h3>Id marca: $prod1->idMarca."."</h3>",
"<h3>Precio: $prod1->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod1->preciOferta."."</h3>"."<br>";

$prod2= new Producto(2,2,2,1,13995,0,15);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod2->idProducto."."</h3>",
"<h3>Id marca: $prod2->idMarca."."</h3>",
"<h3>Precio: $prod2->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod2->preciOferta."."</h3>"."<br>";

$prod3= new Producto(3,3,2,1,14990,0,10);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod3->idProducto."."</h3>",
"<h3>Id marca: $prod3->idMarca."."</h3>",
"<h3>Precio: $prod3->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod3->preciOferta."."</h3>"."<br>";

$prod4= new Producto(4,4,1,1,15495,0,20);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod4->idProducto."."</h3>",
"<h3>Id marca: $prod4->idMarca."."</h3>",
"<h3>Precio: $prod4->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod4->preciOferta."."</h3>"."<br>";

$prod5= new Producto(5,5,1,1,15990,0,25);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod5->idProducto."."</h3>",
"<h3>Id marca: $prod5->idMarca."."</h3>",
"<h3>Precio: $prod5->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod5->preciOferta."."</h3>"."<br>";

$prod6= new Producto(6,6,3,1,16495,0,15);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod6->idProducto."."</h3>",
"<h3>Id marca: $prod6->idMarca."."</h3>",
"<h3>Precio: $prod6->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod6->preciOferta."."</h3>"."<br>";

$prod7= new Producto(7,7,4,2,30990,0,10);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod7->idProducto."."</h3>",
"<h3>Id marca: $prod7->idMarca."."</h3>",
"<h3>Precio: $prod7->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod7->preciOferta."."</h3>"."<br>";

$prod8= new Producto(8,8,5,2,14990,0,15);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod8->idProducto."."</h3>",
"<h3>Id marca: $prod8->idMarca."."</h3>",
"<h3>Precio: $prod8->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod8->preciOferta."."</h3>"."<br>";

$prod9= new Producto(9,9,6,2,16495,0,10);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod9->idProducto."."</h3>",
"<h3>Id marca: $prod9->idMarca."."</h3>",
"<h3>Precio: $prod9->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod9->preciOferta."."</h3>"."<br>";

$prod10= new Producto(10,10,5,2,19799,0,20);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod10->idProducto."."</h3>",
"<h3>Id marca: $prod10->idMarca."."</h3>",
"<h3>Precio: $prod10->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod10->preciOferta."."</h3>"."<br>";

$prod11= new Producto(11,11,7,2,19490,0,25);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod6->idProducto."."</h3>",
"<h3>Id marca: $prod6->idMarca."."</h3>",
"<h3>Precio: $prod6->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod6->preciOferta."."</h3>"."<br>";

$prod12= new Producto(12,12,8,4,22549,20499,15);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod12->idProducto."."</h3>",
"<h3>Id marca: $prod12->idMarca."."</h3>",
"<h3>Precio: $prod12->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod12->preciOferta."."</h3>"."<br>";

$prod13= new Producto(13,13,9,3,7170,0,10);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod13->idProducto."."</h3>",
"<h3>Id marca: $prod13->idMarca."."</h3>",
"<h3>Precio: $prod13->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod13->preciOferta."."</h3>"."<br>";

$prod14= new Producto(14,14,8,4,8790,0,15);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod14->idProducto."."</h3>",
"<h3>Id marca: $prod14->idMarca."."</h3>",
"<h3>Precio: $prod14->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod14->preciOferta."."</h3>"."<br>";

$prod15= new Producto(15,15,10,3,12999,0,10);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod15->idProducto."."</h3>",
"<h3>Id marca: $prod15->idMarca."."</h3>",
"<h3>Precio: $prod15->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod15->preciOferta."."</h3>"."<br>";

$prod16= new Producto(16,16,9,3,12189,0,20);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod16->idProducto."."</h3>",
"<h3>Id marca: $prod16->idMarca."."</h3>",
"<h3>Precio: $prod16->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod16->preciOferta."."</h3>"."<br>";

$prod17= new Producto(17,17,8,4,14499,0,25);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod17->idProducto."."</h3>",
"<h3>Id marca: $prod17->idMarca."."</h3>",
"<h3>Precio: $prod17->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod17->preciOferta."."</h3>"."<br>";

$prod18= new Producto(18,18,9,3,15449,0,15);
echo "<br>"."<h1>Productos.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id producto: $prod18->idProducto."."</h3>",
"<h3>Id marca: $prod18->idMarca."."</h3>",
"<h3>Precio: $prod18->precioUnitario."."</h3>",
"<h3>Precio de oferta: $prod18->preciOferta."."</h3>"."<br>";
}
 ?>
