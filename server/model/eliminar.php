<?php
require_once "Data.php";
$nick = $_GET['nick'];
$clave = $_GET['clave'];
$idPost = $_GET['idPost'];

$d = new Data();
$permiso = $d->getPrivilegio($nick,$clave);

if ($permiso == 1) {
  if ($d->deletePost($idPost)){
    echo '<?xml versión="1.0" encoding="UTF-8"?>';
    echo "<eliminar>";
    echo "<mensaje>'Post Eliminado con éxito'<mensaje/>";
    echo "<delete>true<delete/>";
    echo "</eliminar>";
  }
}else {
  echo '<?xml versión="1.0" encoding="UTF-8-1"?>';
  echo "<eliminar>";
  echo "<mensaje>'No posee los privilegios necesarios para realizar esta acción'<mensaje/>";
  echo "<delete>false<delete/>";
  echo "<eliminar/>";

}

 ?>
