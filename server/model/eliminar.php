html

<?php
require_once "/Data.php"
$usuario = $_GET['u'];
$password = $_GET['p'];
$id = $_GET['id'];
$confirmacion = $_GET['c'];

$d = new Data();

$permiso = $d.getPrivilegio($u,$p,$i);

if ($permiso == 1) {
  if ($d->getEliminarPost($id, $u, $p)){
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
