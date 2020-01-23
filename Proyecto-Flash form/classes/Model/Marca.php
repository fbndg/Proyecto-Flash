<?php

class Marca{

public $idMarca;
public $marca;
public $idCategoria;
public $modelo1;
public $modelo2;
public $modelo3;

  public function __construct($id,$nombreMarca,$idCat,$nombreModelo1,$nombreModelo2,$nombreModelo3){
    $this->idMarca=$id;
    $this->marca=$nombreMarca;
    $this->categoria=$idCat;
    $this->modelo1=$nombreModelo1;
    $this->modelo2=$nombreModelo2;
    $this->modelo3=$nombreModelo3;
    }


$desktop1 = new Marca(1,"AMD",1,"Apu A6"," ", " ");
echo "<br>"."<h1>Marcas.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id marca: $desktop1->idMarca."."</h3>",
"<h3>Marca: $desktop1->marca."."</h3>",
"<h3>Modelo: $desktop1->modelo."."</h3>";

$desktop2 = new Marca(2,"Intel",1,"Celeron","Dual Core"," ");
echo "<h3>Id marca: $desktop2->idMarca."."</h3>",
"<h3>Marca: $desktop2->marca."."</h3>",
"<h3>Modelo: $desktop2->modelo1."."</h3>",
"<h3>Modelo: $desktop2->modelo2."."</h3>";

$desktop3 = new Marca(3,"Mini Intel",1,"Celeron"," "," ");
echo "<h3>Id marca: $desktop3->idMarca."."</h3>",
"<h3>Marca: $desktop3->marca."."</h3>",
"<h3>Modelo: $desktop3->modelo1."."</h3>"."<br>";

$notebook1 = new Marca(4,"Dell",2,"Inspiron"," "," ");
echo "<h1>Notebooks.</h1>",
"<h3>Id marca: $notebook1->idMarca."."</h3>",
"<h3>Marca: $notebook1->marca."."</h3>",
"<h3>Modelo: $notebook1->modelo1."."</h3>";

$notebook2 = new Marca(5,"Cx",2,"Touch360","Cloudbook"," ");
echo "<h3>Id marca: $notebook2->idMarca."."</h3>",
"<h3>Marca: $notebook2->marca."."</h3>",
"<h3>Modelo: $notebook2->modelo1."."</h3>",
"<h3>Modelo: $notebook2->modelo2."."</h3>";

$notebook3 = new Marca(6,"Asus",2,"X540M"," "," ");
echo "<h3>Id marca: $notebook3->idMarca."."</h3>",
"<h3>Marca: $notebook3->marca."."</h3>",
"<h3>Modelo: $notebook3->modelo1."."</h3>"."<br>";

$notebook4 = new Marca(7,"Bangho",2,"Zero M4"," "," ");
echo "<h3>Id marca: $notebook4->idMarca."."</h3>",
"<h3>Marca: $notebook4->marca."."</h3>",
"<h3>Modelo: $notebook4->modelo1."."</h3>"."<br>";

$nei1 = new Marca(8,"HP",4,"240 G7","M203dw","Multifuncion M135W ");
echo "<h3>Id marca: $nei1->idMarca."."</h3>",
"<h3>Marca: $nei1->marca."."</h3>",
"<h3>Modelo: $nei1->modelo1."."</h3>",
"<h3>Modelo: $nei1->modelo2."."</h3>",
"<h3>Modelo: $nei1->modelo3."."</h3>";

$impresora1 = new Marca(9,"Brother",3,"Laser Monocromatica","HI-1212w","HL-L2360 Dw");
echo "<h1>Impresoras.</h1>",
"<h3>Id marca: $impresora1->idMarca."."</h3>",
"<h3>Marca: $impresora1->marca."."</h3>",
"<h3>Modelo: $impresora1->modelo1."."</h3>",
"<h3>Modelo: $impresora1->modelo2."."</h3>",
"<h3>Modelo: $impresora1->modelo3."."</h3>";

$impresora2 = new Marca(10,"Xerox",3,"Multifuncion"," "," ");
echo "<h3>Id marca: $impresora2->idMarca."."</h3>",
"<h3>Marca: $impresora2->marca."."</h3>",
"<h3>Modelo: $impresora2->modelo1."."</h3>";
}
 ?>
