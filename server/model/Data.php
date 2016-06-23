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

public function isRegistroValido($nick){

  $query = "select count(id) from usuario where nick = '$nick'";
  $res = $this->c->ejecutar($query);
  $cantUsers = 0;

  if ($reg = mysqli_fetch_array($res))
  $cantUsers = $reg[0];

  return $cantUsers == 0;

}

public function addCalificacion($idPost, $idCalificacion){
  $query = "update post set calificacion = $calificacion where id = $idPost;";
  $this->c->ejecutar($query);

}

public function deletePost($id_post){
  $query = "delete from post where id = $id_post";
  $res = $this->c->ejecutar($query);
  /*if ($reg = mysqli_fetch_array($res)) {
  $res = $reg;
}*/
return $res;
}


public function getId($nick){
  $query = "select id from usuario where nick = '$nick'";
  if ($reg = mysqli_fetch_array($this->c->ejecutar($query)))
  return $reg[0];

  else return 0;
}

public function getName($idUser){
  $query = "select nombre from usuario where id = $idUser";

  if ($reg = mysqli_fetch_array($this->c->ejecutar($query)))
  return $reg[0];

  else return "nulo";

}

public function addPost($idUsuario, $titulo, $texto, $fecha){
  $query = "insert into post values(null,'$idUsuario', '$titulo', '$texto', ''$fecha', '0')";
  $this->c->ejecutar($query);
}
public function getAllPosts(){
  $qyery = "select p.id, u.nick, p.titulo, p.texto, p.fecha from post p, usuario u where p.idUsuario = u.id";
  $res = $this->c->ejecutar($query);
  return $res;
}

public function getPrivilegio($idUsuario){

  $query = "select idRol from usuario where id = $idUsuario;";
  $res = $this->c->ejecutar($query);

  if ($reg = mysqli_fetch_array($res)) {
    return $reg[0];
  }
  else return 0;

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

public function getActualizarUsuario($id,$clave){
  $query="update usuario
  set clave='$clave'
  where id='$id'";
  $this->c->ejecutar($query);
}

public function getListarUsuario(){
  $query = "select u.idRol, u.nick, u.nombre from usuario u";
  $res = $this->c->ejecutar($query);
}
}
}

?>
