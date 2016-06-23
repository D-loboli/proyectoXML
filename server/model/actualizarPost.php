<?php
require_once "../db/Data.php";
$nick = $_GET['nick'];
$clave = $_GET['clave'];
$fecha = $_GET['fecha'];
$titulo = $_GET['titulo'];
$texto = $_GET['texto'];
$idUsuario = $_GET['idUsuario'];
$id = $_GET['id'];

$d = new Data();

$permiso = $d->getPrivilegio($nick,$clave);

if ($permiso == 1) {
  if ($d->getActualizarPublicacion($fecha, $titulo, $texto, $idUsuario, $id)){
    echo "<eliminar>";
    echo "<mensaje>'Post Actualizado'<mensaje/>";
    echo "<delete>true<delete/>";
    echo "</eliminar>";
  }
}else {
  echo "<eliminar>";
  echo "<mensaje>'No posee los privilegios necesarios para realizar esta acción'<mensaje/>";
  echo "<delete>false<delete/>";
  echo "<eliminar/>";

}

 ?>
