<?php

class Estado{

public $idEstado;
public $estado;

public function __construct($idE, $e){

$this->idEstado=$idE;
$this->estado=$e;
  }

  $e1 = new Estado(1,'pendiente');
  echo "<br>"."<h1>Estados.</h1>"."<br>".
  "<h3>Id Estado: $e1->idEstado."."</h3>",
  "<h3>Estado: $e1->estado."."</h3>";

  $e2 = new Estado(2,'enviado');
  echo "<br>"."<h1>Estados.</h1>"."<br>".
  "<h3>Id Estado: $e2->idEstado."."</h3>",
  "<h3>Estado: $e2->estado."."</h3>";

  $e3 = new Estado(3,'confirmado')
  echo "<br>"."<h1>Estados.</h1>"."<br>".
  "<h3>Id Estado: $e3->idEstado."."</h3>",
  "<h3>Estado: $e3->estado."."</h3>";

  $e4 = new Estado(4,'rechazado');
  echo "<br>"."<h1>Estados.</h1>"."<br>".
  "<h3>Id Estado: $e4->idEstado."."</h3>",
  "<h3>Estado: $e4->estado."."</h3>";

}

 ?>
