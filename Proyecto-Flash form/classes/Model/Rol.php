<?php

class Rol{

  public idRol;
  public idAdmin;
  public nombreAdmin;
  public passwordAdmin;
  public idUsuario;
  public nombreUsuario;
  public passwordUsuario;
  public idCliente;
  public nombres;
  public apellidos;

public function __construct($idR,$idA,$nA,$pA,$idU,$nU,$pU,$idC,$n,$a){

$this->idRol=$idR;
$this->idAdmin=$idA;
$this->nombreAdmin=$nA;
$this->passwordAdmin=$pA;
$this->idUsuario=$idU;
$this->nombreUsuario=$nU;
$this->passwordUsuario=$pU;
$this->idCliente=$idC;
$this->nombres=$n;
$this->apellidos=$a;
}

$rol1 = new Rol((1,1,'Atila',1111,' ','lety',111111,1,'Leticia natalia','Fernandez');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol1->idRol."."</h3>",
"<h3>Id del administrador: $rol1->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol1->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol1->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol1->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol1->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol1->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol1->nombres."."</h3>",
"<h3>Apellido del cliente: $rol1->apellidos."."</h3>";

$rol2 = new Rol(2,1,'fbn',2222,' ','clau',222222,2,'Claudia sandra','Vilchez');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol2->idRol."."</h3>",
"<h3>Id del administrador: $rol2->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol2->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol2->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol2->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol2->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol2->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol2->nombres."."</h3>",
"<h3>Apellido del cliente: $rol2->apellidos."."</h3>";

$rol3 = new Rol(3,' ',' ',' ',' ','matty',333333,3,'Matias benjamin','Bustamante');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol3->idRol."."</h3>",
"<h3>Id del administrador: $rol3->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol3->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol3->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol3->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol3->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol3->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol3->nombres."."</h3>",
"<h3>Apellido del cliente: $rol3->apellidos."."</h3>";

$rol4 = new Rol(' ',' ',' ',' ',' ','anna',444444,4,'Anahi','Vallejos');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol4->idRol."."</h3>",
"<h3>Id del administrador: $rol4->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol4->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol4->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol4->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol4->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol4->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol4->nombres."."</h3>",
"<h3>Apellido del cliente: $rol4->apellidos."."</h3>";

$rol5 = new Rol(' ',' ',' ',' ',' ','gasty',555555,5,'Gaston martin','Centeno');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol5->idRol."."</h3>",
"<h3>Id del administrador: $rol5->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol5->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol5->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol5->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol5->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol5->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol5->nombres."."</h3>",
"<h3>Apellido del cliente: $rol5->apellidos."."</h3>";

$rol6 = new Rol(' ',' ',' ',' ',' ','july',666666,6,'Julian nahuel','Calvano');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol6->idRol."."</h3>",
"<h3>Id del administrador: $rol6->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol6->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol6->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol6->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol6->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol6->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol6->nombres."."</h3>",
"<h3>Apellido del cliente: $rol6->apellidos."."</h3>";

$rol7 = new Rol(' ',' ',' ',' ',' ','crist',777777,7,'Cristian javier','Costa');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol7->idRol."."</h3>",
"<h3>Id del administrador: $rol7->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol7->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol7->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol7->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol7->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol7->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol7->nombres."."</h3>",
"<h3>Apellido del cliente: $rol7->apellidos."."</h3>";

$rol8 = new Rol(' ',' ',' ',' ',' ','alba',888888,8,'Alba azul','Pereyra');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol8->idRol."."</h3>",
"<h3>Id del administrador: $rol8->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol8->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol8->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol8->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol8->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol8->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol8->nombres."."</h3>",
"<h3>Apellido del cliente: $rol8->apellidos."."</h3>";

$rol9 = new Rol(' ',' ',' ',' ',' ','pao',999999,9,'Paola andrea','Solis');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol9->idRol."."</h3>",
"<h3>Id del administrador: $rol9->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol9->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol9->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol9->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol9->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol9->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol9->nombres."."</h3>",
"<h3>Apellido del cliente: $rol9->apellidos."."</h3>";

$rol10 = new Rol(' ',' ',' ',' ',1,'mary',101010,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol10->idRol."."</h3>",
"<h3>Id del administrador: $rol10->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol10->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol10->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol10->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol10->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol10->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol10->nombres."."</h3>",$rol10
"<h3>Apellido del cliente: $rol10->apellidos."."</h3>";

$rol11 = new Rol(' ',' ',' ',' ',2,'hugo',1111110,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol11->idRol."."</h3>",
"<h3>Id del administrador: $rol11->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol11->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol11->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol11->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol11->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol11->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol11->nombres."."</h3>",
"<h3>Apellido del cliente: $rol11->apellidos."."</h3>";

$rol12 = new Rol(' ',' ',' ',' ',3'ema',121212,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol12->idRol."."</h3>",
"<h3>Id del administrador: $rol12->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol12->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol12->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol12->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol12->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol12->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol12->nombres."."</h3>",
"<h3>Apellido del cliente: $rol12->apellidos."."</h3>";

$rol13 = new Rol(' ',' ',' ',' ',4,'gra',131313,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol13->idRol."."</h3>",
"<h3>Id del administrador: $rol13->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol13->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol13->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol13->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol13->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol13->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol13->nombres."."</h3>",
"<h3>Apellido del cliente: $rol13->apellidos."."</h3>";

$rol14 = new Rol(' ',' ',' ',' ',5'mauri',141414,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol14->idRol."."</h3>",
"<h3>Id del administrador: $rol14->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol14->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol14->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol14->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol14->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol14->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol14->nombres."."</h3>",
"<h3>Apellido del cliente: $rol14->apellidos."."</h3>";

$rol15 = new Rol(' ',' ',' ',' ',6,'lucho',151515,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol15->idRol."."</h3>",
"<h3>Id del administrador: $rol15->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol15->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol15->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol15->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol15->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol15->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol15->nombres."."</h3>",
"<h3>Apellido del cliente: $rol15->apellidos."."</h3>";

$rol16 = new Rol(' ',' ',' ',' ',7,'lily',161616,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol16->idRol."."</h3>",
"<h3>Id del administrador: $rol16->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol16->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol17->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol17->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol17->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol18->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol18->nombres."."</h3>",
"<h3>Apellido del cliente: $rol18->apellidos."."</h3>";

$rol17 = new Rol(' ',' ',' ',' ',8,'mary',171717,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol17->idRol."."</h3>",
"<h3>Id del administrador: $rol17->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol17->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol17->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol17->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol17->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol17->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol17->nombres."."</h3>",
"<h3>Apellido del cliente: $rol17->apellidos."."</h3>";

$rol18 = new Rol(' ',' ',' ',' ',9,'any',181818,' ',' ',' ');
echo "<br>"."<h1>Roles.</h1>"."<br>".
"<h3>Id del rol: $rol18->idRol."."</h3>",
"<h3>Id del administrador: $rol18->idAdmin."."</h3>",
"<h3>Nombre del administrador: $rol18->nombreAdmin."."</h3>",
"<h3>Contraseña del administrador: $rol18->passwordAdmin."."</h3>",
"<h3>Id del usuario: $rol18->idUsuario."."</h3>",
"<h3>Contraseña del usuario: $rol18->passwordUsuario."."</h3>",
"<h3>Id del cliente: $rol18->idCliente."."</h3>",
"<h3>Nombre del cliente: $rol18->nombres."."</h3>",
"<h3>Apellido del cliente: $rol18->apellidos."."</h3>";

}

 ?>
