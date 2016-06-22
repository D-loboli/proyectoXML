<?php

  require_once 'Data.php';

  $usuario = $_GET['user'];
  $password = $_GET['password'];
  $id_post = $_GET['idPost'];
  $calificacion = $_GET['calificacion'];

  $d = new data();

  $idPrivilegio = $d->getPrivilegio($usuario, $password);

  if ($idPrivilegio == 1) {
    $d->addCalificacion($usuario, $id_post, $calificacion);

    echo "<calificacion>";
      echo "<mensaje> Calificacion realizada con exito</mensaje>";
      echo "<calificado> true </calificado>";
    echo "</calificacion>";
  }
  else{
    echo "<calificacion>";
      echo "<mensaje> Error al calificar</mensaje>";
      echo "<calificado> false </calificado>";
    echo "</calificacion>";
  }
/*
if(isset($_POST["btnCalificar"])){
  $calificar=$_POST["txtCalificar"];
*/

?>
