<?php
require_once "Data.php";
$nick = $_GET['nick'];
$clave = $_GET['clave'];
$id_post = $_GET['id_post'];

$d = new Data();

$permiso = $d->getPrivilegio($nick,$clave);

if ($permiso == 1) {
  if ($d->deletePost($id_post)){
    echo "<eliminar>";
    echo "<mensaje>'Post Eliminado con éxito'<mensaje/>";
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
