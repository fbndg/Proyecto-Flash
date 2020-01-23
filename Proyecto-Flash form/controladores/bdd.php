<?php

class usuario{
  protected $idUsuario;
  protected $nombreUsuario;
  protected $password;
  protected $sexo;
  protected $email;
  protected $telefono;
  protected $pais;
  protected $provincia;
  protected $localidad;
  protected $barrio;
  protected $direccion;

  public function setNombreUsuario($nombreUsuario){
    $this->nombreUsuario = $nombreUsuario;
  }
  public function getNombreUsuario() {
    return $this->nombreUsuario;
  }
  public function setPassword($password){
    $this->password = $password;
  }
  public function getPassword() {
    return $this->password;
  }
  public function setSexo($sexo){
    $this->sexo = $sexo;
  }
  public function getId() {
    return $this->id;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getId() {
    return $this->id;
  }
  public function setTelefono($telefono){
    $this->telefono = $telefono;
  }
  public function getId() {
    return $this->id;
  }
  public function setPais($pais){
    $this->pais = $pais;
  }
  public function getId() {
    return $this->id;
  }
  public function setProvincia($provincia){
    $this->provincia = $provincia;
  }
  public function getId() {
    return $this->id;
  }
  public function setLocalidad($localidad){
    $this->localidad = $localidad;
  }
  public function getId() {
    return $this->id;
  }
  public function setDireccion($direccion){
    $this->direccion = $direccion;
  }
  public function getId() {
    return $this->id;
  }
}

ALTER TABLE productos;
INSERT INTO productos VALUES
(default,1,1,14839,13490,10,1),
(default,2,1,13995,13490,15,1),
(default,1,1,14990,0,10,1),
(default,2,1,15495,0,20,1),
(default,1,1,15990,0,25,1),
(default,3,1,16495,0,15,1),
(default,4,2,30990,0,10,1),
(default,5,2,14990,0,15,1),
(default,6,5,14990,0,10,1),
(default,5,2,19799,17999,20,1),
(default,7,2,19490,0,25,1),
(default,8,4,22549,0,15,1),
(default,9,3,7170,0,10,1),
(default,8,4,8749,0,10,1),
(default,10,3,12999,0,10,1),
(default,9,3,12189,0,20,1),
(default,8,4,14499,0,25,1),
(default,9,3,15449,0,15,1);

ALTER TABLE facturas;
INSERT INTO facturas VALUES
(1,1,'2019/10/10',12990),
(2,2,'2019/07/01',13995),
(3,3,'2019/06/05',14990),
(4,4,'2019/12/20',15495),
(5,5,'2019/12/23',15990),
(6,6,'2019/12/24',16495),
(7,7,'2019/12/24',30990),
(8,8,'2019/12/12',14990),
(9,9,'2019/12/01',14990),
(10,10,'2019/11/23',17749),
(11,11,'2019/11/01',19490),
(12,12,'2019/10/25',20349),
(13,13,'2019/12/23',7170),
(14,14,'2019/12/21',8749),
(15,15,'2019/12/15',12999),
(16,16,'2019/11/10',12189),
(17,17,'2019/12/13',14499),
(18,18,'2019/12/16',15449);




ALTER TABLE detallesFactura;
INSERT INTO detallesFactura VALUES
(1,1,1,1,1,1,14839,13490,1,null),
(2,2,2,2,2,2,13995,0,1,null),
(3,3,3,3,3,3,14990,0,1,null),
(4,4,4,4,4,4,1595,0,1,null),
(5,5,5,5,1,5,15990,0,1,null),
(6,6,6,6,2,6,16495,0,1,null),
(7,7,7,7,3,7,30990,0,1,null),
(8,8,8,1,4,8,14990,0,1,null),
(9,9,9,2,1,9,14990,0,1,null),
(10,10,10,1,1,2,19790,17999,1,null),
(11,11,11,2,2,3,1949,0,1,null),
(12,12,12,3,3,4,22549,20499,1,null),
(13,13,13,4,4,1,7170,0,1,null),
(14,14,14,5,2,5,8749,0,1,null),
(15,15,15,6,3,6,12999,0,1,null),
(16,16,16,7,4,7,12189,0,1,null),
(17,17,17,1,1,8,1449,0,1,null),
(18,18,18,2,2,9,1544,0,1,null);

ALTER TABLE clientes;
INSERT INTO clientes VALUES
(1,1,1,'Leticia natalia','Fernandez','D.N.I.',16778533,'soltero','argentina','f','lettymar@gmail.com',3518962017,'argentina','cordoba','cordoba','bella vista','Mayor 962',null),
(2,2,2,'Claudia sandra','Vilchez','Pasaporte',38159147,'asadoo','argentina','f','clausanvilchez@gmail.com',3513698568,'argentina','cordoba','cordoba','bella vista','Alejandro centeno 1658',null),
(3,3,3,'Matias benjamin','Bustamante','L.E.',39249751,'divorciado','argentina','m','bustamant_matias@gmail.com',3518745215,'argentina','cordoba','cordoba','bella vista','Emilio achaval 1060',null),
(4,4,4,'Anahi','Vallejos','L.C.',33267148,'viudo','argentina','f','kittyvallejos86@gmail.com',3517489630,'argentina','cordoba','cordoba','Guemes','Domingo funes 1257',null),
(5,5,5,'Gaston martina','Centeno','D.N.I.',38526475,'soltero','argentina','m','gastoncarp93@gmail.com',3513698562,'argentina','cordoba','cordoba','Caceres','Santa maria 1410',null),
(6,1,6,'Julian nahuel','Calvano','Pasaporte',37992568,'Casado','Argentina','M','aguilacalvano@gmail.com',3515874962,'Argentina','Cordoba','Cordoba','Bella vista','Venus 998',null),
(7,2,7,'Cristian javier','Costa','L.E.',27582367,'Divorciado','Argentina','M','costasonico@gmail.com',3516987451,'Argentina','Cordoba','Cordoba','Bella vista','Bambilla 960',null),
(8,3,8,'Alba azul','Pereyra','L.C.',25469158,'Viudo','Argentina','F','bluealba@gmail.com',3513698598,'Argentina','Cordoba','Cordoba','Bella vista','Jose de iriarte 1100',null),
(9,4,9,'Paola andrea','Solis','D.N.I.',31259248,'Soltero','Argentina','F','lolitasolis@gmail.com',3518957426,'Argentina','Cordoba','Cordoba','Bella vista','Corro 1050',null);



ALTER TABLE usuarios;
INSERT INTO usuarios VALUES
(1,'lety',111111,'Leticia natalia','Fernandez','D.N.I.',16778533,'Soltero','Argentina','F','lettymar@gmail.com',3518962017,'Argentina','Cordoba','Cordoba','Bella vista','Mayor 962',null),
(2,'clau',222222,'Claudia sandra','Vilchez','Pasaporte',38159147,'Casado','Argentina','F','clausanvilchez@gmail.com',3513698568,'Argentina','Cordoba','Cordoba','Bella vista','Alejandro centeno 1658',null),
(3,'maty',333333,'Matias benjamin','Bustamante','L.E.',39249751,'Divorciado','Argentina','M','bustamant_matias@gmail.com',3518745215,'Argentina','Cordoba','Cordoba','Bella vista','Emilio achaval 1060',null),
(4,'anna',444444,'Anahi','Vallejos','L.C.',33267148,'Viudo','Argentina','F','kittyvallejos86@gmail.com',3517489630,'Argentina','Cordoba','Cordoba','Guemes','Domingo funes 1257',null),
(5,'gasty',555555,'Gaston martin','Centeno','D.N.I.',38526475,'Soltero','Argentina','M','gastoncarp93@gmail.com',3513698562,'Argentina','Cordoba','Cordoba','Caceres','Santa maria 1410',null),
(6,'july',666666,'Julian nahuel','Calvano','Pasaporte',37992568,'Casado','Argentina','M','aguilacalvano@gmail.com',3515874962,'Argentina','Cordoba','Cordoba','Bella vista','Venus 998',null),
(7,'crist',777777,'Cristian javier','Costa','L.E.',27582367,'Divorciado','Argentina','M','costasonico@gmail.com',3516987451,'Argentina','Cordoba','Cordoba','Bella vista','Bambilla 960',null),
(8,'alba',888888,'Alba azul','Pereyra','L.C.',25469158,'Viudo','Argentina','F','bluealba@gmail.com',3513698598,'Argentina','Cordoba','Cordoba','Bella vista','Jose de iriarte 1100',null),
(9,'pao',999999,'Paola andrea','Solis','D.N.I.',31259248,'Soltero','Argentina','F','lolitasolis@gmail.com',3518957426,'Argentina','Cordoba','Cordoba','Bella vista','Corro 1050',null),
(10,'mary',101010,'Mariana paola','Paz','Pasaporte',30265048,'Casado','Argentina','F','pazmary@gmail.com',3512015748,'Argentina','Cordoba','Cordoba','Caceres','Los cocos 1100',null),
(11,'hugo',111110,'Hugo mario','Basualdo','L.E.',14696889,'Divorciado','Argentina','M','hugo.basualdo@yahoo.com.ar',3517895206,'Argentina','Cordoba','Cordoba','Bella vista','Elpidio gonzalez 1254',null),
(12,'ema',121212,'Cristian emanuel','Otazo','L.C.',27393589,'Viudo','Argentina','M','xtianemaotazo@gmail.com',3516982014,'Argentina','Cordoba','Cordoba','Observatorio','Mariano moreno 890',null),
(13,'gra',131313,'Graciela mabel','Fantini','D.N.I.',14582693,'Soltero','Argentina','F','grace.fantini@gmail.com',3517845962,'Argentina','Cordoba','Cordoba','Guemes','Marcelo alvear 1120',null),
(14,'mauri',141414,'Mauro ignacio','Pugliese','Pasaporte',38429513,'Casado','Argentina','M','bustermaster@gmail.com',3516985623,'Argentina','Cordoba','Cordoba','Bella vista','Elpidio gonzalez 1210',null),
(15,'lucho',151515,'Luis claudio','Rojas','L.E.',20693257,'Divorciado','Argentina','M','luisesteban69@gmail.com',3517896523,'Argentina','Cordoba','Cordoba','Bella vista','Fuencarral 954',null),
(16,'lily',161616,'Liliana soledad','Sosa','L.C.',21708569,'Viudo','Argentina','F','lisosaliana@yahoo.com.ar',3512698745,'Argentina','Cordoba','Cordoba','Caceres','Santa maria 1024',null),
(17,'mary',171717,'Maria soledad','Fernandez','D.N.I.',32846313,'Soltero','Argentina','F','marysolfernandez@gmail.com',3515874698,'Argentina','Cordoba','Cordoba','Bella vista','Emilio achaval 986',null),
(18,'any',181818,'Ana laura','Sosa','Pasaporte',12245028,'Casado','Argentina','F','sosanalaura@gmail.com',3516258963,'Argentina','Cordoba','Cordoba','Guemes','Peru 440',null);







 ALTER TABLE roles;
 INSERT INTO roles VALUES
 (1,'Atila',1111,NULL,'lety',111111,1,'Leticia natalia','Fernandez',1),
 (2,'fbn',2222,NULL,'clau',222222,2,'Claudia sandra','Vilchez',1),
 (3,NULL,NULL,NULL,'matty',333333,3,'Matias benjamin','Bustamante',NULL),
 (NULL,NULL,NULL,NULL,'anna',444444,4,'Anahi','Vallejos',NULL),
 (NULL,NULL,NULL,NULL,'gasty',555555,5,'Gaston martin','Centeno',NULL),
 (NULL,NULL,NULL,NULL,'july',666666,6,'Julian nahuel','Calvano',NULL),
 (NULL,NULL,NULL,NULL,'crist',777777,7,'Cristian javier','Costa',NULL),
 (NULL,NULL,NULL,NULL,'alba',888888,8,'Alba azul','Pereyra',NULL),
 (NULL,NULL,NULL,NULL,'pao',999999,9,'Paola andrea','Solis',NULL),
 (NULL,NULL,NULL,1,'mary',101010,NULL,NULL,NULL,NULL),
 (NULL,NULL,NULL,2,'hugo',1111110,NULL,NULL,NULL,NULL),
 (NULL,NULL,NULL,3,'ema',121212,NULL,NULL,NULL,NULL),
 (NULL,NULL,NULL,4,'gra',131313,NULL,NULL,NULL,NULL),
 (NULL,NULL,NULL,5,'mauri',141414,NULL,NULL,NULL,NULL),
 (NULL,NULL,NULL,6,'lucho',151515,NULL,NULL,NULL,NULL),
 (NULL,NULL,NULL,7,'lily',161616,NULL,NULL,NULL,NULL),
 (NULL,NULL,NULL,8,'mary',171717,NULL,NULL,NULL,NULL),
 (NULL,NULL,NULL,9,'any',181818,NULL,NULL,NULL,NULL);







 ?>
