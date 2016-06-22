<?php
require_once "../db/Conexion.php";

class Data{
  private $c;

  public function __construct(){
    $this->c = new Conexion(
    "localhost",
    "grupo",
    "root",
    ""
  );
}

public function getEliminarPost($id_post){
  $query = "delete from post where id = $id_post";
  $res = $this->c->ejecutar($query);
  /*if ($reg = mysqli_fetch_array($res)) {
    $res = $reg;
  }*/
  return $res;
}
public function getRegistrar($nick, $pass, $name){
  $query = "insert into usuario values(null, 2, '$nick', '$name', '$pass')";
  $this->c->ejecutar($query);
}
public function getId($nick){
  	$query = "select id from usuario where nick = '$nick'";
  	if ($reg = mysql_fetch_array($this->c->ejecutar($query)))
  		return $reg[0];

	else return 0;
}
public function getIngresarPost($idUsuario, $titulo, $texto, $calificar){
  $query = "insert into post values(null,'$idUsuario', '$titulo', '$texto', '2016-06-06', '$calificar')";
  $this->c->ejecutar($query);
}
public function getListar(){
  $qyert = "select from * post";
  $this->c->ejecutar($query);
}

public function getPrivilegio($nick, $clave){
  $query = "select idRol from usuario where nick = '$nick' and clave = '$clave'";
  $res = $this->c->ejecutar($query);
  $idPermiso = 0;
  if ($reg = mysqli_fetch_array($res)) {
    $idPermiso = $reg[0];
  }
  return $idPermiso;
}

  public function addUser($nick, $pass, $name){
     $query = "insert into usuario values(null, 2, $nick, $name, $pass);";
     $this->conexion->ejecutar($query);
  }
}


?>
