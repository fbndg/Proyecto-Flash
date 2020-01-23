<?php

class Categoria{

public $idCategoria;
public $categoria;
public $idProducto;

public function __construct($idC,$c,$idP){
  $this->idCategoria=$idC;
  $this->categoria=$c;
  $this->idProducto=$idP;
  }

$categ1 = new Categoria(1,"Desktops",1);
echo "<br>"."<h1>Categorías.</h1>"."<br>".
"<h1>Pc's de escritorio.</h1>",
"<h3>Id categoria: $categ1->idCategoria."."</h3>",
"<h3>Categoría: $categ1->categoria."."</h3>",
"<h3>Id producto: $categ1->idProducto."."</h3>";

$categ2 = new Categoria(2,"Notebooks",2);
echo "<br>"."<h1>Categorías.</h1>"."<br>".
"<h1>Notebooks.</h1>",
"<h3>Id categoria: $categ2->idMarca."."</h3>",
"<h3>Categoría: $categ2->categoria."."</h3>",
"<h3>Id producto: $categ2->idProducto."."</h3>";

$categ3 = new Categoria(3,"Impresoras",3);
echo "<br>"."<h1>Categorías.</h1>"."<br>".
"<h1>Impresoras.</h1>",
"<h3>Id categoria: $categ3->idCategoria."."</h3>",
"<h3>Categoría: $categ3->categoria."."</h3>",
"<h3>Id producto: $categ3->idProducto."."</h3>";

$categ4 = new Categoria(4,"Nei",4));
echo "<br>"."<h1>Categorías.</h1>"."<br>".
"<h1>Notebook e impresora.</h1>",
"<h3>Id categoria: $categ4->idCategoria."."</h3>",
"<h3>Categoría: $categ4->categoria."."</h3>",
"<h3>Id producto: $categ4->idProducto."."</h3>";


}




 ?>
