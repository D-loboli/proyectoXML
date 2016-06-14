<?php

require_once 'Data.php';

$usuario = $_GET['u'];
$password = $_GET['p'];
$id_post = $_GET['id'];
$calificacion = $_GET['calificar=1'];

$d =
if(isset($_POST["btnCalificar"])){
  $calificar=$_POST["txtCalificar"];
  
}else {
  echo "<error>Usuario o contraseña incorrectos<error>";
}



?>
