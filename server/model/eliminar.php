<?php
require_once "/Data.php"
$nick = $_GET['n'];
$clave = $_GET['c'];
$id_post = $_GET['ip'];
$id = $_GET['id'];

$d = new Data();

$permiso = $d.getPrivilegio($n,$c);

if ($permiso == 1) {
  if ($d->getEliminarPost($id_post, $id)){
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
