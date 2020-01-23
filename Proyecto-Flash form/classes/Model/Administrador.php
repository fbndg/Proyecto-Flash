<?php

class Administrador{

public idAdmin;
public idRol;
public nombreAdmin;
public password;

public function __construct($idA,$idR,$nA,$pass){
  $this->idAdmin=$idA;
  $this->idRol=$idR;
  $this->nombreAdmin=$nA;
  $this->password=$pass;
}

$admin1 = new Administrador(1,1,'Atila',1111);
echo "<br>"."<h1>Administradores.</h1>"."<br>".
"<h3>Id del administrador: $admin1->idAdmin."."</h3>",
"<h3>Id del rol: $admin1->idRol."."</h3>",
"<h3>Fecha: $admin1->nombreAdmin."."</h3>",
"<h3>Precio total: $admin1->password."."</h3>";

$admin2 = new Administrador(2,1,'fbn',2222);
echo "<br>"."<h1>Administradores.</h1>"."<br>".
"<h3>Id del administrador: $admin2->idAdmin."."</h3>",
"<h3>Id del rol: $admin2->idRol."."</h3>",
"<h3>Fecha: $admin2->nombreAdmin."."</h3>",
"<h3>Precio total: $admin2->password."."</h3>";
}

 ?>
