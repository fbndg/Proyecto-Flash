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





 ?>
