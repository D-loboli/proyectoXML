<?php
require_once "../db/Data.php";
$nick = $_GET['nick'];
$clave = $_GET['clave'];
$id = $_GET['id_user'];

$d = new Data();

$permiso = $d->getPrivilegio($nick,$clave);

if ($permiso == 1) {
  if ($d->deleteUser($id)){
    echo "<eliminar>";
    echo "<mensaje>'User Eliminado con éxito'<mensaje/>";
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
