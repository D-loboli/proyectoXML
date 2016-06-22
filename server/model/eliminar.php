<?php
require_once "Data.php";
$nick = $_GET['nick'];
$clave = $_GET['clave'];
$id_post = $_GET['id_post'];


$d = new Data();

$permiso = $d->getPrivilegio($nick,$clave);

if ($permiso == 1) {
  if ($d->getEliminarPost($id_post)){
    echo "<info>";
    echo "<mensaje>'Post Eliminado con éxito'<mensaje/>";
    echo "<delete>true<delete/>";
    echo "<info/>";
  }
}else {
  echo "<info>";
  echo "<mensaje>'No posee los privilegios necesarios para realizar esta acción'<mensaje/>";
  echo "<delete>false<delete/>";
  echo "<info/>";

}

 ?>
