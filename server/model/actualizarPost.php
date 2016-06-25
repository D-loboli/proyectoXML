<?php
require_once "Data.php";
$nick = $_GET['nick'];
$clave = $_GET['clave'];
$fecha = $_GET['fecha'];
$titulo = $_GET['titulo'];
$texto = $_GET['texto'];
$id = $_GET['id'];

$d = new Data();

$permiso = $d->getPrivilegio($nick,$clave);

if ($permiso == 1) {
  $d->getActualizarPublicacion($id,$titulo, $texto, $fecha);
    echo "<Actualizar>";
    echo "<mensaje>'Post Actualizado'<mensaje/>";
    echo "<delete>true<delete/>";
    echo "</Actualizar>";
}else {
  echo "<Actualizar>";
  echo "<mensaje>'No posee los privilegios necesarios para realizar esta acción'<mensaje/>";
  echo "<delete>false<delete/>";
  echo "<Actualizar/>";
}

 ?>
