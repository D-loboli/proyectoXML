<?php

$nick = $_GET['nick'];
$password = $_GET['password'];

require_once "Data.php"
$d = new Data();

$idPermiso = $d->getPrivilegio($nick, $password);

echo '<?xml versión="1.0" encoding="UTF-8"?>';
if ($idPermiso != 0) {

  $idUser = $d->getId($nick);
  $nombreUser = $d->getName($idUser);
  echo "<login>";
    echo "<usuario>";
      echo "<id>$id</id>";
      echo "<nombre>$nombreUser</nombre>";
    echo "</usuario>";
    echo "<isValido>true<isValido>";
  echo"</login>";
}

else{
  echo "<login>";
    echo "<isValido>false<isValido>";
  echo"</login>";
}

 ?>
