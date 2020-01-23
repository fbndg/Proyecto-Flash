<?php
  require_once('conect.php');

  $consulta = $db->prepare("SELECT * FROM series");
  $consulta->execute();
  $marcas = $consulta->fetchall();
  $idSerie = 5
  foreach ($marcas as $series) {
    if ($series["id"] = $idSerie) {
      echo
    }
  }
  ;
?>
