<?php

  require_once 'Data.php';

  $usuario = $_GET['user'];
  $password = $_GET['password'];
  $id_post = $_GET['idPost'];
  $calificacion = $_GET['calificacion'];

  $d = new data();

  $idPrivilegio = $d->getPrivilegio($usuario, $password);

  if ($idPrivilegio == 1) {
    $d->addCalificacion($id_post, $calificacion);

    echo '<?xml versión="1.0" encoding="UTF-8"?>';
    echo "<calificacion>";
      echo "<mensaje> Calificacion realizada con exito</mensaje>";
      echo "<calificado> true </calificado>";
    echo "</calificacion>";
  }
  else{
    echo '<?xml versión="1.0" encoding="UTF-8-1"?>';
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
