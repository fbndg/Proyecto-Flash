<?php

class Cliente{

public idCliente;
public idCondicionIva;
public idProducto;
public idRol;
public nombres;
public apellidos;
public tipoDoc;
public nroDoc;
public estadoCivil;
public nacionalidad;
public sexo;
public email;
public telefono;
public pais;
public provincia;
public localidad;
public barrio;
public direccion;

public function __construct($idC,$idCI,$idP,$idR,$nomb,$ap,$tipoD,$nroD,$eC,$nac,$x,$email,$tel,$pais,$prov,$loc,$barrio,$dir){
  $this->idCliente=$idC;
  $this->idCondiconIva=$idCI;
  $this->idProducto=$idP;
  $this->idRol=$idR;
  $this->nombres=$nomb;
  $this->apellidos=$ap;
  $this->tipoDoc=$tipoD;
  $this->nroDoc=$nroD;
  $this->estadoCivil=$eC;
  $this->nacionalidad=$nac;
  $this->sexo=$x;
  $this->email=$email;
  $this->telefono=$tel;
  $this->pais=$pais;
  $this->provincia=$prov;
  $this->localidad=$loc;
  $this->barrio=$barrio;
  $this->direccion=$dir;

}

  $cl1 = new Cliente(1,1,1,3,'Leticia natalia','Fernandez','D.N.I.',16778533,'soltero','argentina','f','lettymar@gmail.com',3518962017,'argentina','cordoba','cordoba','bella vista','Mayor 962');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl1->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl1->idRol."."</h3>",
  "<h3>Id de producto: $cl1->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl1->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl1->nombres."."</h3>",
  "<h3>Apellidos: $cl1->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl1->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl1->nroDoc."."</h3>",
  "<h3>Estado civil: $cl1->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl1->nacionalidad."."</h3>",
  "<h3>Sexo: $cl1->sexo."."</h3>",
  "<h3>Dirección de email: $cl1->email."."</h3>",
  "<h3>Teléfono: $cl1->telefono."."</h3>",
  "<h3>País: $cl1->pais."."</h3>",
  "<h3>Provincia: $cl1->provincia."."</h3>",
  "<h3>Localidad: $cl1->localidad."."</h3>",
  "<h3>Barrio: $cl1->barrio."."</h3>",
  "<h3>Dirección: $cl1->direccion."."</h3>";

  $cl2 = new Cliente(2,2,2,3,'Claudia sandra','Vilchez','Pasaporte',38159147,'asadoo','argentina','f','clausanvilchez@gmail.com',3513698568,'argentina','cordoba','cordoba','bella vista','Alejandro centeno 1658');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl2->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl2->idRol."."</h3>",
  "<h3>Id de producto: $cl2->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl2->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl2->nombres."."</h3>",
  "<h3>Apellidos: $cl2->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl2->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl2->nroDoc."."</h3>",
  "<h3>Estado civil: $cl2->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl2->nacionalidad."."</h3>",
  "<h3>Sexo: $cl2->sexo."."</h3>",
  "<h3>Dirección de email: $cl2->email."."</h3>",
  "<h3>Teléfono: $cl2->telefono."."</h3>",
  "<h3>País: $cl2->pais."."</h3>",
  "<h3>Provincia: $cl2->provincia."."</h3>",
  "<h3>Localidad: $cl2->localidad."."</h3>",
  "<h3>Barrio: $cl2->barrio."."</h3>",
  "<h3>Dirección: $cl2->direccion."."</h3>";

  $cl3 = new Cliente(3,3,3,3,'Matias benjamin','Bustamante','L.E.',39249751,'divorciado','argentina','m','bustamant_matias@gmail.com',3518745215,'argentina','cordoba','cordoba','bella vista','Emilio achaval 1060');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl3->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl3->idRol."."</h3>",
  "<h3>Id de producto: $cl3->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl3->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl3->nombres."."</h3>",
  "<h3>Apellidos: $cl3->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl3->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl3->nroDoc."."</h3>",
  "<h3>Estado civil: $cl3->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl3->nacionalidad."."</h3>",
  "<h3>Sexo: $cl3->sexo."."</h3>",
  "<h3>Dirección de email: $cl3->email."."</h3>",
  "<h3>Teléfono: $cl3->telefono."."</h3>",
  "<h3>País: $cl3->pais."."</h3>",
  "<h3>Provincia: $cl3->provincia."."</h3>",
  "<h3>Localidad: $cl3->localidad."."</h3>",
  "<h3>Barrio: $cl3->barrio."."</h3>",
  "<h3>Dirección: $cl3->direccion."."</h3>";

  $cl4 = new Cliente(4,4,4,3,'Anahi','Vallejos','L.C.',33267148,'viudo','argentina','f','kittyvallejos86@gmail.com',3517489630,'argentina','cordoba','cordoba','Guemes','Domingo funes 1257');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl4->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl4->idRol."."</h3>",
  "<h3>Id de producto: $cl4->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl4->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl4->nombres."."</h3>",
  "<h3>Apellidos: $cl4->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl4->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl4->nroDoc."."</h3>",
  "<h3>Estado civil: $cl4->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl4->nacionalidad."."</h3>",
  "<h3>Sexo: $cl4->sexo."."</h3>",
  "<h3>Dirección de email: $cl4->email."."</h3>",
  "<h3>Teléfono: $cl4->telefono."."</h3>",
  "<h3>País: $cl4->pais."."</h3>",
  "<h3>Provincia: $cl4->provincia."."</h3>",
  "<h3>Localidad: $cl4->localidad."."</h3>",
  "<h3>Barrio: $cl4->barrio."."</h3>",
  "<h3>Dirección: $cl4->direccion."."</h3>";

  $cl5 = new Cliente(5,5,5,3,'Gaston martina','Centeno','D.N.I.',38526475,'soltero','argentina','m','gastoncarp93@gmail.com',3513698562,'argentina','cordoba','cordoba','Caceres','Santa maria 1410');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl5->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl5->idRol."."</h3>",
  "<h3>Id de producto: $cl5->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl5->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl5->nombres."."</h3>",
  "<h3>Apellidos: $cl5->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl5->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl5->nroDoc."."</h3>",
  "<h3>Estado civil: $cl5->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl5->nacionalidad."."</h3>",
  "<h3>Sexo: $cl5->sexo."."</h3>",
  "<h3>Dirección de email: $cl5->email."."</h3>",
  "<h3>Teléfono: $cl5->telefono."."</h3>",
  "<h3>País: $cl5->pais."."</h3>",
  "<h3>Provincia: $cl5->provincia."."</h3>",
  "<h3>Localidad: $cl5->localidad."."</h3>",
  "<h3>Barrio: $cl5->barrio."."</h3>",
  "<h3>Dirección: $cl5->direccion."."</h3>";

  $cl6 = new Cliente(6,1,6,3,'Julian nahuel','Calvano','Pasaporte',37992568,'Casado','Argentina','M','aguilacalvano@gmail.com',3515874962,'Argentina','Cordoba','Cordoba','Bella vista','Venus 998');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl6->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl6->idRol."."</h3>",
  "<h3>Id de producto: $cl6->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl6->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl6->nombres."."</h3>",
  "<h3>Apellidos: $cl6->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl6->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl6->nroDoc."."</h3>",
  "<h3>Estado civil: $cl6->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl6->nacionalidad."."</h3>",
  "<h3>Sexo: $cl6->sexo."."</h3>",
  "<h3>Dirección de email: $cl6->email."."</h3>",
  "<h3>Teléfono: $cl6->telefono."."</h3>",
  "<h3>País: $cl6->pais."."</h3>",
  "<h3>Provincia: $cl6->provincia."."</h3>",
  "<h3>Localidad: $cl6->localidad."."</h3>",
  "<h3>Barrio: $cl6->barrio."."</h3>",
  "<h3>Dirección: $cl6->direccion."."</h3>";

  $cl7 = new Cliente(7,2,7,3,'Cristian javier','Costa','L.E.',27582367,'Divorciado','Argentina','M','costasonico@gmail.com',3516987451,'Argentina','Cordoba','Cordoba','Bella vista','Bambilla 960');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl7->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl7->idRol."."</h3>",
  "<h3>Id de producto: $cl7->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl7->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl7->nombres."."</h3>",
  "<h3>Apellidos: $cl7->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl7->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl7->nroDoc."."</h3>",
  "<h3>Estado civil: $cl7->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl7->nacionalidad."."</h3>",
  "<h3>Sexo: $cl7->sexo."."</h3>",
  "<h3>Dirección de email: $cl7->email."."</h3>",
  "<h3>Teléfono: $cl7->telefono."."</h3>",
  "<h3>País: $cl7->pais."."</h3>",
  "<h3>Provincia: $cl7->provincia."."</h3>",
  "<h3>Localidad: $cl7->localidad."."</h3>",
  "<h3>Barrio: $cl7->barrio."."</h3>",
  "<h3>Dirección: $cl7->direccion."."</h3>";

  $cl8 = new Cliente(8,3,8,3,'Alba azul','Pereyra','L.C.',25469158,'Viudo','Argentina','F','bluealba@gmail.com',3513698598,'Argentina','Cordoba','Cordoba','Bella vista','Jose de iriarte 1100');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl8->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl8->idRol."."</h3>",
  "<h3>Id de producto: $cl8->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl8->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl8->nombres."."</h3>",
  "<h3>Apellidos: $cl8->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl8->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl8->nroDoc."."</h3>",
  "<h3>Estado civil: $cl8->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl8->nacionalidad."."</h3>",
  "<h3>Sexo: $cl8->sexo."."</h3>",
  "<h3>Dirección de email: $cl8->email."."</h3>",
  "<h3>Teléfono: $cl8->telefono."."</h3>",
  "<h3>País: $cl8->pais."."</h3>",
  "<h3>Provincia: $cl8->provincia."."</h3>",
  "<h3>Localidad: $cl8->localidad."."</h3>",
  "<h3>Barrio: $cl8->barrio."."</h3>",
  "<h3>Dirección: $cl8->direccion."."</h3>";

  $cl9 = new Cliente(9,4,9,3,'Paola andrea','Solis','D.N.I.',31259248,'Soltero','Argentina','F','lolitasolis@gmail.com',3518957426,'Argentina','Cordoba','Cordoba','Bella vista','Corro 1050');
  echo "<br>"."<h1>Clientes.</h1>"."<br>".
  "<h3>Id de cliente: $cl9->idUsuario."."</h3>",
  "<h3>Id de condición de I.V.A.: $cl9->idRol."."</h3>",
  "<h3>Id de producto: $cl9->nombreUsuario."."</h3>",
  "<h3>Id de rol: $cl9->passwordUsuario."."</h3>",
  "<h3>Nombres: $cl9->nombres."."</h3>",
  "<h3>Apellidos: $cl9->apellidos."."</h3>",
  "<h3>Tipo de documento: $cl9->tipoDoc."."</h3>",
  "<h3>Número de documento: $cl9->nroDoc."."</h3>",
  "<h3>Estado civil: $cl9->estadoCivil."."</h3>",
  "<h3>Nacionalidad: $cl9->nacionalidad."."</h3>",
  "<h3>Sexo: $cl9->sexo."."</h3>",
  "<h3>Dirección de email: $cl9->email."."</h3>",
  "<h3>Teléfono: $cl9->telefono."."</h3>",
  "<h3>País: $cl9->pais."."</h3>",
  "<h3>Provincia: $cl9->provincia."."</h3>",
  "<h3>Localidad: $cl9->localidad."."</h3>",
  "<h3>Barrio: $cl9->barrio."."</h3>",
  "<h3>Dirección: $cl9->direccion."."</h3>";
}

}



 ?>
