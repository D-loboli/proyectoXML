
<?php
require_once "../db/Data.php";
$nick = $_GET['nick'];
$clave = $_GET['clave'];
$id = $_GET['id'];
$clavenueva = $_GET['clavenueva'];

$d = new Data();

$permiso = $d->getPrivilegio($nick,$clave);

echo '<?xml versión="1.0" encoding="UTF-8"?>';
if ($permiso == 1) {
  if ($d->getActualizarUsuario($id,$clavenueva)){
    echo "<Actualizar> ";
    echo "<mensaje>'Usuario Actualizado'<mensaje/>";
    echo "<delete>true<delete/>";
    echo "</Actualizar>";
  }
}else {
  echo "<Actualizar>";
  echo "<mensaje>'No posee los privilegios necesarios para realizar esta acción'<mensaje/>";
  echo "<delete>false<delete/>";
  echo "<Actualizar/>";
}

echo "hola";


 ?>
