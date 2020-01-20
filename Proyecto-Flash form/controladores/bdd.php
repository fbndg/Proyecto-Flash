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
(default,null,null,14839,13490,10,1),
(default,null,null,13995,13490,15,1),
(default,null,null,14990,0,10,1),
(default,null,null,15495,0,20,1),
(default,null,null,15990,0,25,1),
(default,null,null,16495,0,15,1),
(default,null,null,30990,0,10,1),
(default,null,null,14990,0,15,1),
(default,null,null,14990,0,10,1),
(default,null,null,19799,17999,20,1),
(default,null,null,19490,0,25,1),
(default,null,null,22549,0,15,1),
(default,null,null,7170,0,10,1),
(default,null,null,8749,0,10,1),
(default,null,null,12999,0,10,1),
(default,null,null,12189,0,20,1),
(default,null,null,14499,0,25,1),
(default,null,null,15449,0,15,1);

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
(1,1,1,1,1,1,14.839,13.490,1,null),
(2,2,2,2,2,2,13.995,0,1,null),
(3,3,3,3,3,3,14.990,0,1,null),
(4,4,4,4,4,4,15.95,0,1,null),
(5,5,5,5,1,5,15.990,0,1,null),
(6,6,6,6,2,6,16.495,0,1,null),
(7,7,7,7,3,7,30.990,0,1,null),
(8,8,8,8,4,8,14.990,0,1,null),
(9,9,9,9,1,9,14.990,0,1,null),
(10,10,10,1,1,2,19.790,17.999,1,null),
(11,11,11,2,2,3,19.49,0,1,null),
(12,12,12,3,3,4,22.549,20.499,1,null),
(13,13,13,4,4,1,7.170,0,1,null),
(14,14,14,5,2,5,8.749,0,1,null),
(15,15,15,6,3,6,12.999,0,1,null),
(16,16,16,7,4,7,12.189,0,1,null),
(17,17,17,8,1,8,14.49,0,1,null),
(18,18,18,9,2,9,15.44,0,1,null);


 ?>
