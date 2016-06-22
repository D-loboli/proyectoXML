<?php
require_once "Data.php";

$nick = $_GET['nick'];
$clave = $_GET['clave'];
$idUsuario = $_GET['idusuario'];
$titulo = $_GET['titulo'];
$texto = $_GET['texto'];

$d = new Data();

$permiso = $d->getPrivilegio($nick,$clave);

if ($permiso == 1) {
    echo "<post>";

    	echo "<usuario> '$nick' </usuario>";
    	echo "<titulo>'$titulo'</titulo>";
    	echo "<texto> '.$texto' </texto>";
    	echo "<fecha> 2016-06-22 </fecha>";


    echo"</post>";
}if ($permiso == 2) {
  echo "<post>";

    echo "<usuario> '$nick' </usuario>";
    echo "<titulo>'$titulo'</titulo>";
    echo "<texto> '.$texto' </texto>";
    echo "<fecha> 2016-06-22 </fecha>";


  echo"</post>";
}else {
  echo "<error>";
    echo "<mensaje>'No posee los privilegios necesarios para realizar esta acción'<mensaje/>";
    echo "<delete>false<delete/>";
  echo "</error>";
}

 ?>
