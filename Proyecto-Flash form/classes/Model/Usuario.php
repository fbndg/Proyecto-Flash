<?php

class Usuario{

public idUsuario;
public idRol;
public nombreUsuario;
public nombres;
public password;
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

public function __construct($idU,$idR,$nU,$pass,$nomb,$ap,$tipoD,$nroD,$eC,$nac,$x,$email,$tel,$pais,$prov,$loc,$barrio,$dir){
$this->idUsuario=$idU;
$this->idRol=$idR;
$this->nombreUsuario=$nU;
$this->password=$pass;
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

$u1 = new Usuario((1,2,'lety',111111,'Leticia natalia','Fernandez','D.N.I.',16778533,'Soltero','Argentina','F','lettymar@gmail.com',3518962017,'Argentina','Cordoba','Cordoba','Bella vista','Mayor 962');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u1->idUsuario."."</h3>",
"<h3>Id de rol: $u1->idRol."."</h3>",
"<h3>Nombre de usuario: $u1->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u1->passwordUsuario."."</h3>",
"<h3>Nombres: $u1->nombres."."</h3>",
"<h3>Apellidos: $u1->apellidos."."</h3>",
"<h3>Tipo de documento: $u1->tipoDoc."."</h3>",
"<h3>Número de documento: $u1->nroDoc."."</h3>",
"<h3>Estado civil: $u1->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u1->nacionalidad."."</h3>",
"<h3>Sexo: $u1->sexo."."</h3>",
"<h3>Dirección de email: $u1->email."."</h3>",
"<h3>Teléfono: $u1->telefono."."</h3>",
"<h3>País: $u1->pais."."</h3>",
"<h3>Provincia: $u1->provincia."."</h3>",
"<h3>Localidad: $u1->localidad."."</h3>",
"<h3>Barrio: $u1->barrio."."</h3>",
"<h3>Dirección: $u1->direccion."."</h3>";

$u2 = new Usuario(2,2,'clau',222222,'Claudia sandra','Vilchez','Pasaporte',38159147,'Casado','Argentina','F','clausanvilchez@gmail.com',3513698568,'Argentina','Cordoba','Cordoba','Bella vista','Alejandro centeno 1658');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u2->idUsuario."."</h3>",
"<h3>Id de rol: $u2->idRol."."</h3>",
"<h3>Nombre de usuario: $u2->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u2->passwordUsuario."."</h3>",
"<h3>Nombres: $u2->nombres."."</h3>",
"<h3>Apellidos: $u2->apellidos."."</h3>",
"<h3>Tipo de documento: $u2->tipoDoc."."</h3>",
"<h3>Número de documento: $u2->nroDoc."."</h3>",
"<h3>Estado civil: $u2->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u2->nacionalidad."."</h3>",
"<h3>Sexo: $u2->sexo."."</h3>",
"<h3>Dirección de email: $u2->email."."</h3>",
"<h3>Teléfono: $u2->telefono."."</h3>",
"<h3>País: $u2->pais."."</h3>",
"<h3>Provincia: $u2->provincia."."</h3>",
"<h3>Localidad: $u2->localidad."."</h3>",
"<h3>Barrio: $u2->barrio."."</h3>",
"<h3>Dirección: $u2->direccion."."</h3>";

$u3 = new Usuario(3,2,'maty',333333,'Matias benjamin','Bustamante','L.E.',39249751,'Divorciado','Argentina','M','bustamant_matias@gmail.com',3518745215,'Argentina','Cordoba','Cordoba','Bella vista','Emilio achaval 1060');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u3->idUsuario."."</h3>",
"<h3>Id de rol: $u3->idRol."."</h3>",
"<h3>Nombre de usuario: $u3->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u3->passwordUsuario."."</h3>",
"<h3>Nombres: $u3->nombres."."</h3>",
"<h3>Apellidos: $u3->apellidos."."</h3>",
"<h3>Tipo de documento: $u3->tipoDoc."."</h3>",
"<h3>Número de documento: $u3->nroDoc."."</h3>",
"<h3>Estado civil: $u3->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u3->nacionalidad."."</h3>",
"<h3>Sexo: $u3->sexo."."</h3>",
"<h3>Dirección de email: $u3->email."."</h3>",
"<h3>Teléfono: $u3->telefono."."</h3>",
"<h3>País: $u3->pais."."</h3>",
"<h3>Provincia: $u3->provincia."."</h3>",
"<h3>Localidad: $u3->localidad."."</h3>",
"<h3>Barrio: $u3->barrio."."</h3>",
"<h3>Dirección: $u3->direccion."."</h3>";

$u4 = new Usuario(4,2,'anna',444444,'Anahi','Vallejos','L.C.',33267148,'Viudo','Argentina','F','kittyvallejos86@gmail.com',3517489630,'Argentina','Cordoba','Cordoba','Guemes','Domingo funes 1257');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u4->idUsuario."."</h3>",
"<h3>Id de rol: $u4->idRol."."</h3>",
"<h3>Nombre de usuario: $u4->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u4->passwordUsuario."."</h3>",
"<h3>Nombres: $u4->nombres."."</h3>",
"<h3>Apellidos: $u4->apellidos."."</h3>",
"<h3>Tipo de documento: $u4->tipoDoc."."</h3>",
"<h3>Número de documento: $u4->nroDoc."."</h3>",
"<h3>Estado civil: $u4->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u4->nacionalidad."."</h3>",
"<h3>Sexo: $u4->sexo."."</h3>",
"<h3>Dirección de email: $u4->email."."</h3>",
"<h3>Teléfono: $u4->telefono."."</h3>",
"<h3>País: $u4->pais."."</h3>",
"<h3>Provincia: $u4->provincia."."</h3>",
"<h3>Localidad: $u4->localidad."."</h3>",
"<h3>Barrio: $u4->barrio."."</h3>",
"<h3>Dirección: $u4->direccion."."</h3>";

$u5 = new Usuario(5,2,'gasty',555555,'Gaston martin','Centeno','D.N.I.',38526475,'Soltero','Argentina','M','gastoncarp93@gmail.com',3513698562,'Argentina','Cordoba','Cordoba','Caceres','Santa maria 1410');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u5$u5->idUsuario."."</h3>",
"<h3>Id de rol: $u5$u5->idRol."."</h3>",
"<h3>Nombre de usuario: $u5$u5->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u5$u5->passwordUsuario."."</h3>",
"<h3>Nombres: $u5$u5->nombres."."</h3>",
"<h3>Apellidos: $u5->apellidos."."</h3>",
"<h3>Tipo de documento: $u5->tipoDoc."."</h3>",
"<h3>Número de documento: $u5->nroDoc."."</h3>",
"<h3>Estado civil: $u5->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u5->nacionalidad."."</h3>",
"<h3>Sexo: $u5->sexo."."</h3>",
"<h3>Dirección de email: $u5->email."."</h3>",
"<h3>Teléfono: $u5->telefono."."</h3>",
"<h3>País: $u5->pais."."</h3>",
"<h3>Provincia: $u5->provincia."."</h3>",
"<h3>Localidad: $u5->localidad."."</h3>",
"<h3>Barrio: $u5->barrio."."</h3>",
"<h3>Dirección: $u5->direccion."."</h3>";

$u6 = new Usuario(6,2,'july',666666,'Julian nahuel','Calvano','Pasaporte',37992568,'Casado','Argentina','M','aguilacalvano@gmail.com',3515874962,'Argentina','Cordoba','Cordoba','Bella vista','Venus 998');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u6->idUsuario."."</h3>",
"<h3>Id de rol: $u6->idRol."."</h3>",
"<h3>Nombre de usuario: $u6->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u6->passwordUsuario."."</h3>",
"<h3>Nombres: $u6->nombres."."</h3>",
"<h3>Apellidos: $u6->apellidos."."</h3>",
"<h3>Tipo de documento: $u6->tipoDoc."."</h3>",
"<h3>Número de documento: $u6->nroDoc."."</h3>",
"<h3>Estado civil: $u6->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u6->nacionalidad."."</h3>",
"<h3>Sexo: $u6->sexo."."</h3>",
"<h3>Dirección de email: $u6->email."."</h3>",
"<h3>Teléfono: $u6->telefono."."</h3>",
"<h3>País: $u6->pais."."</h3>",
"<h3>Provincia: $u6->provincia."."</h3>",
"<h3>Localidad: $u6->localidad."."</h3>",
"<h3>Barrio: $u6->barrio."."</h3>",
"<h3>Dirección: $u6->direccion."."</h3>";

$u7 = new Usuario(7,2,'crist',777777,'Cristian javier','Costa','L.E.',27582367,'Divorciado','Argentina','M','costasonico@gmail.com',3516987451,'Argentina','Cordoba','Cordoba','Bella vista','Bambilla 960');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u7->idUsuario."."</h3>",
"<h3>Id de rol: $u7->idRol."."</h3>",
"<h3>Nombre de usuario: $u7->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u7->passwordUsuario."."</h3>",
"<h3>Nombres: $u7->nombres."."</h3>",
"<h3>Apellidos: $u7->apellidos."."</h3>",
"<h3>Tipo de documento: $u7->tipoDoc."."</h3>",
"<h3>Número de documento: $u7->nroDoc."."</h3>",
"<h3>Estado civil: $u7->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u7->nacionalidad."."</h3>",
"<h3>Sexo: $u7->sexo."."</h3>",
"<h3>Dirección de email: $u7->email."."</h3>",
"<h3>Teléfono: $u7->telefono."."</h3>",
"<h3>País: $u7->pais."."</h3>",
"<h3>Provincia: $u7->provincia."."</h3>",
"<h3>Localidad: $u7->localidad."."</h3>",
"<h3>Barrio: $u7->barrio."."</h3>",
"<h3>Dirección: $u7->direccion."."</h3>";

$u8 = new Usuario(8,2,'alba',888888,'Alba azul','Pereyra','L.C.',25469158,'Viudo','Argentina','F','bluealba@gmail.com',3513698598,'Argentina','Cordoba','Cordoba','Bella vista','Jose de iriarte 1100');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u8->idUsuario."."</h3>",
"<h3>Id de rol: $u8->idRol."."</h3>",
"<h3>Nombre de usuario: $u8->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u8->passwordUsuario."."</h3>",
"<h3>Nombres: $u8->nombres."."</h3>",
"<h3>Apellidos: $u8->apellidos."."</h3>",
"<h3>Tipo de documento: $u8->tipoDoc."."</h3>",
"<h3>Número de documento: $u8->nroDoc."."</h3>",
"<h3>Estado civil: $u8->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u8->nacionalidad."."</h3>",
"<h3>Sexo: $u8->sexo."."</h3>",
"<h3>Dirección de email: $u8->email."."</h3>",
"<h3>Teléfono: $u8->telefono."."</h3>",
"<h3>País: $u8->pais."."</h3>",
"<h3>Provincia: $u8->provincia."."</h3>",
"<h3>Localidad: $u8->localidad."."</h3>",
"<h3>Barrio: $u8->barrio."."</h3>",
"<h3>Dirección: $u8->direccion."."</h3>";

$u9 = new Usuario(9,2,'pao',999999,'Paola andrea','Solis','D.N.I.',31259248,'Soltero','Argentina','F','lolitasolis@gmail.com',3518957426,'Argentina','Cordoba','Cordoba','Bella vista','Corro 1050');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u9->idUsuario."."</h3>",
"<h3>Id de rol: $u9->idRol."."</h3>",
"<h3>Nombre de usuario: $u9->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u9->passwordUsuario."."</h3>",
"<h3>Nombres: $u9->nombres."."</h3>",
"<h3>Apellidos: $u9->apellidos."."</h3>",
"<h3>Tipo de documento: $u9->tipoDoc."."</h3>",
"<h3>Número de documento: $u9->nroDoc."."</h3>",
"<h3>Estado civil: $u9->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u9->nacionalidad."."</h3>",
"<h3>Sexo: $u9->sexo."."</h3>",
"<h3>Dirección de email: $u9->email."."</h3>",
"<h3>Teléfono: $u9->telefono."."</h3>",
"<h3>País: $u9->pais."."</h3>",
"<h3>Provincia: $u9->provincia."."</h3>",
"<h3>Localidad: $u9->localidad."."</h3>",
"<h3>Barrio: $u9->barrio."."</h3>",
"<h3>Dirección: $u9->direccion."."</h3>";

$u10 = new Usuario(10,2,'mary',101010,'Mariana paola','Paz','Pasaporte',30265048,'Casado','Argentina','F','pazmary@gmail.com',3512015748,'Argentina','Cordoba','Cordoba','Caceres','Los cocos 1100');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u10->idUsuario."."</h3>",
"<h3>Id de rol: $u10->idRol."."</h3>",
"<h3>Nombre de usuario: $u10->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u10->passwordUsuario."."</h3>",
"<h3>Nombres: $u10->nombres."."</h3>",
"<h3>Apellidos: $u10->apellidos."."</h3>",
"<h3>Tipo de documento: $u10->tipoDoc."."</h3>",
"<h3>Número de documento: $u10->nroDoc."."</h3>",
"<h3>Estado civil: $u10->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u10->nacionalidad."."</h3>",
"<h3>Sexo: $u10->sexo."."</h3>",
"<h3>Dirección de email: $u10->email."."</h3>",
"<h3>Teléfono: $u10->telefono."."</h3>",
"<h3>País: $u10->pais."."</h3>",
"<h3>Provincia: $u10->provincia."."</h3>",
"<h3>Localidad: $u10->localidad."."</h3>",
"<h3>Barrio: $u10->barrio."."</h3>",
"<h3>Dirección: $u10->direccion."."</h3>";

$u11 = new Usuario(11,2,'hugo',111110,'Hugo mario','Basualdo','L.E.',14696889,'Divorciado','Argentina','M','hugo.basualdo@yahoo.com.ar',3517895206,'Argentina','Cordoba','Cordoba','Bella vista','Elpidio gonzalez 1254');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u11->idUsuario."."</h3>",
"<h3>Id de rol: $u11->idRol."."</h3>",
"<h3>Nombre de usuario: $u11->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u11->passwordUsuario."."</h3>",
"<h3>Nombres: $u11->nombres."."</h3>",
"<h3>Apellidos: $u11->apellidos."."</h3>",
"<h3>Tipo de documento: $u11->tipoDoc."."</h3>",
"<h3>Número de documento: $u11->nroDoc."."</h3>",
"<h3>Estado civil: $u11->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u11->nacionalidad."."</h3>",
"<h3>Sexo: $u11->sexo."."</h3>",
"<h3>Dirección de email: $u11->email."."</h3>",
"<h3>Teléfono: $u11->telefono."."</h3>",
"<h3>País: $u11->pais."."</h3>",
"<h3>Provincia: $u11->provincia."."</h3>",
"<h3>Localidad: $u11->localidad."."</h3>",
"<h3>Barrio: $u11->barrio."."</h3>",
"<h3>Dirección: $u11->direccion."."</h3>";

$u12 = new Usuario(12,2,'ema',121212,'Cristian emanuel','Otazo','L.C.',27393589,'Viudo','Argentina','M','xtianemaotazo@gmail.com',3516982014,'Argentina','Cordoba','Cordoba','Observatorio','Mariano moreno 890');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u12->idUsuario."."</h3>",
"<h3>Id de rol: $u12->idRol."."</h3>",
"<h3>Nombre de usuario: $u12->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u12->passwordUsuario."."</h3>",
"<h3>Nombres: $u12->nombres."."</h3>",
"<h3>Apellidos: $u12->apellidos."."</h3>",
"<h3>Tipo de documento: $u12->tipoDoc."."</h3>",
"<h3>Número de documento: $u12->nroDoc."."</h3>",
"<h3>Estado civil: $u12->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u12->nacionalidad."."</h3>",
"<h3>Sexo: $u12->sexo."."</h3>",
"<h3>Dirección de email: $u12->email."."</h3>",
"<h3>Teléfono: $u12->telefono."."</h3>",
"<h3>País: $u12->pais."."</h3>",
"<h3>Provincia: $u12->provincia."."</h3>",
"<h3>Localidad: $u12->localidad."."</h3>",
"<h3>Barrio: $u12->barrio."."</h3>",
"<h3>Dirección: $u12->direccion."."</h3>";

$u13 = new Usuario(13,2,'gra',131313,'Graciela mabel','Fantini','D.N.I.',14582693,'Soltero','Argentina','F','grace.fantini@gmail.com',3517845962,'Argentina','Cordoba','Cordoba','Guemes','Marcelo alvear 1120');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u13->idUsuario."."</h3>",
"<h3>Id de rol: $u13->idRol."."</h3>",
"<h3>Nombre de usuario: $u13->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u13->passwordUsuario."."</h3>",
"<h3>Nombres: $u13->nombres."."</h3>",
"<h3>Apellidos: $u13->apellidos."."</h3>",
"<h3>Tipo de documento: $u13->tipoDoc."."</h3>",
"<h3>Número de documento: $u13->nroDoc."."</h3>",
"<h3>Estado civil: $u13->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u13->nacionalidad."."</h3>",
"<h3>Sexo: $u13->sexo."."</h3>",
"<h3>Dirección de email: $u13->email."."</h3>",
"<h3>Teléfono: $u13->telefono."."</h3>",
"<h3>País: $u13->pais."."</h3>",
"<h3>Provincia: $u13->provincia."."</h3>",
"<h3>Localidad: $u13->localidad."."</h3>",
"<h3>Barrio: $u13->barrio."."</h3>",
"<h3>Dirección: $u13->direccion."."</h3>";

$u14 = new Usuario(14,2,'mauri',141414,'Mauro ignacio','Pugliese','Pasaporte',38429513,'Casado','Argentina','M','bustermaster@gmail.com',3516985623,'Argentina','Cordoba','Cordoba','Bella vista','Elpidio gonzalez 1210');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u14->idUsuario."."</h3>",
"<h3>Id de rol: $u14->idRol."."</h3>",
"<h3>Nombre de usuario: $u14->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u14->passwordUsuario."."</h3>",
"<h3>Nombres: $u14->nombres."."</h3>",
"<h3>Apellidos: $u14->apellidos."."</h3>",
"<h3>Tipo de documento: $u14->tipoDoc."."</h3>",
"<h3>Número de documento: $u14->nroDoc."."</h3>",
"<h3>Estado civil: $u14->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u14->nacionalidad."."</h3>",
"<h3>Sexo: $u14->sexo."."</h3>",
"<h3>Dirección de email: $u14->email."."</h3>",
"<h3>Teléfono: $u14->telefono."."</h3>",
"<h3>País: $u14->pais."."</h3>",
"<h3>Provincia: $u14->provincia."."</h3>",
"<h3>Localidad: $u14->localidad."."</h3>",
"<h3>Barrio: $u14->barrio."."</h3>",
"<h3>Dirección: $u14->direccion."."</h3>";

$u15 = new Usuario(15,2,'lucho',151515,'Luis claudio','Rojas','L.E.',20693257,'Divorciado','Argentina','M','luisesteban69@gmail.com',3517896523,'Argentina','Cordoba','Cordoba','Bella vista','Fuencarral 954');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u15->idUsuario."."</h3>",
"<h3>Id de rol: $u15->idRol."."</h3>",
"<h3>Nombre de usuario: $u15->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u15->passwordUsuario."."</h3>",
"<h3>Nombres: $u15->nombres."."</h3>",
"<h3>Apellidos: $u15->apellidos."."</h3>",
"<h3>Tipo de documento: $u15->tipoDoc."."</h3>",
"<h3>Número de documento: $u15->nroDoc."."</h3>",
"<h3>Estado civil: $u15->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u15->nacionalidad."."</h3>",
"<h3>Sexo: $u15->sexo."."</h3>",
"<h3>Dirección de email: $u15->email."."</h3>",
"<h3>Teléfono: $u15->telefono."."</h3>",
"<h3>País: $u15->pais."."</h3>",
"<h3>Provincia: $u15->provincia."."</h3>",
"<h3>Localidad: $u15->localidad."."</h3>",
"<h3>Barrio: $u15->barrio."."</h3>",
"<h3>Dirección: $u15->direccion."."</h3>";

$u16 = new Usuario(16,2,'lily',161616,'Liliana soledad','Sosa','L.C.',21708569,'Viudo','Argentina','F','lisosaliana@yahoo.com.ar',3512698745,'Argentina','Cordoba','Cordoba','Caceres','Santa maria 1024');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u16->idUsuario."."</h3>",
"<h3>Id de rol: $u16->idRol."."</h3>",
"<h3>Nombre de usuario: $u16->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u16->passwordUsuario."."</h3>",
"<h3>Nombres: $u16->nombres."."</h3>",
"<h3>Apellidos: $u16->apellidos."."</h3>",
"<h3>Tipo de documento: $u16->tipoDoc."."</h3>",
"<h3>Número de documento: $u16->nroDoc."."</h3>",
"<h3>Estado civil: $u16->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u16->nacionalidad."."</h3>",
"<h3>Sexo: $u16->sexo."."</h3>",
"<h3>Dirección de email: $u16->email."."</h3>",
"<h3>Teléfono: $u16->telefono."."</h3>",
"<h3>País: $u16->pais."."</h3>",
"<h3>Provincia: $u16->provincia."."</h3>",
"<h3>Localidad: $u16->localidad."."</h3>",
"<h3>Barrio: $u16->barrio."."</h3>",
"<h3>Dirección: $u16->direccion."."</h3>";

$u17 = new Usuario(17,2,'mary',171717,'Maria soledad','Fernandez','D.N.I.',32846313,'Soltero','Argentina','F','marysolfernandez@gmail.com',3515874698,'Argentina','Cordoba','Cordoba','Bella vista','Emilio achaval 986');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u17->idUsuario."."</h3>",
"<h3>Id de rol: $u17->idRol."."</h3>",
"<h3>Nombre de usuario: $u17->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u17->passwordUsuario."."</h3>",
"<h3>Nombres: $u17->nombres."."</h3>",
"<h3>Apellidos: $u17->apellidos."."</h3>",
"<h3>Tipo de documento: $u17->tipoDoc."."</h3>",
"<h3>Número de documento: $u17->nroDoc."."</h3>",
"<h3>Estado civil: $u17->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u17->nacionalidad."."</h3>",
"<h3>Sexo: $u17->sexo."."</h3>",
"<h3>Dirección de email: $u17->email."."</h3>",
"<h3>Teléfono: $u17->telefono."."</h3>",
"<h3>País: $u17->pais."."</h3>",
"<h3>Provincia: $u17->provincia."."</h3>",
"<h3>Localidad: $u17->localidad."."</h3>",
"<h3>Barrio: $u17->barrio."."</h3>",
"<h3>Dirección: $u17->direccion."."</h3>";

$u18 = new Usuario(18,2,'any',181818,'Ana laura','Sosa','Pasaporte',12245028,'Casado','Argentina','F','sosanalaura@gmail.com',3516258963,'Argentina','Cordoba','Cordoba','Guemes','Peru 440');
echo "<br>"."<h1>Usuarios.</h1>"."<br>".
"<h3>Id de usuario: $u18->idUsuario."."</h3>",
"<h3>Id de rol: $u18->idRol."."</h3>",
"<h3>Nombre de usuario: $u18->nombreUsuario."."</h3>",
"<h3>Contraseña de usuario: $u18->passwordUsuario."."</h3>",
"<h3>Nombres: $u18->nombres."."</h3>",
"<h3>Apellidos: $u18->apellidos."."</h3>",
"<h3>Tipo de documento: $u18->tipoDoc."."</h3>",
"<h3>Número de documento: $u18->nroDoc."."</h3>",
"<h3>Estado civil: $u18->estadoCivil."."</h3>",
"<h3>Nacionalidad: $u18->nacionalidad."."</h3>",
"<h3>Sexo: $u18->sexo."."</h3>",
"<h3>Dirección de email: $u18->email."."</h3>",
"<h3>Teléfono: $u18->telefono."."</h3>",
"<h3>País: $u18->pais."."</h3>",
"<h3>Provincia: $u18->provincia."."</h3>",
"<h3>Localidad: $u18->localidad."."</h3>",
"<h3>Barrio: $u18->barrio."."</h3>",
"<h3>Dirección: $u18->direccion."."</h3>";
}








 ?>
