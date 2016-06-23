<?php
require_once "Data.php";

$nick = $_GET['nick'];
$titulo = $_GET['titulo'];
$texto = $_GET['texto'];
$fecha = $_GET['fecha'];

$d = new Data();

$idUser = $d->getId($nick);

if ($idUser != 0) {
  $d->addPost($idUsuario, $titulo, $texto, $fecha);
  echo '<?xml versión="1.0" encoding="UTF-8"?>';
  echo "<postear>";
    echo "<mensaje> Posteo exitoso</mensaje>";
    echo "<posteado> true</posteado>";
  echo "</postear>";
}

else{
  echo '<?xml versión="1.0" encoding="UTF-8-1"?>';
  echo "<postear>";
    echo "<mensaje> Error al postear</mensaje>";
    echo "<posteado> false</posteado>";
  echo "</postear>";
}
/*  echo "<post>";
  echo "<usuario> '$nick' </usuario>";
  echo "<titulo>'$titulo'</titulo>";
  echo "<texto> '.$texto' </texto>";
  echo "<fecha> 2016-06-22 </fecha>";
  echo"</post>";
}else if ($permiso == 2) {
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
  echo "<priv>$permiso</priv>";
  echo "</error>";
}
*/
?>
