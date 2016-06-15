<?php
require_once "Conexion.php";

class Data{
    private $c;

    public function __construct(){
        $this->c = new Conexion(
            "localhost",
            "grupo_b",
            "grupo_b",
            "asdfgh"
        );
    }


    public function getPrivilegio($nick, $clave){

        $query = "select idRol from usuario where nick = $nick and clave = $clave";
        $res = $this->conexion->ejecutar($query);

        if ($reg = mysql_fetch_array($res)) $res = $reg;

        else $res = 0;

        return $res;
    }

<<<<<<< HEAD
    public function calificarPost($usuario, $password, $id_post){

    }

  public function getEliminarPost($id_post, $nick, $clave){
  $query = "delete id = $id_post from post where id_usuario = $nick";
  $res = $this->conexion->ejecutar($query);

  if ($reg = mysql_fetch_array($res)) $res = $reg;

  else $res = 0;

  return $res;



}


=======
    public function isRegistroValido($nick){

        $query = "select id from usuario where nick = $nick";
        $rs = $this->c->ejecutar($query);

        if ($reg = mysql_fetch_array($rs)) return false;

        else return true;
    }

    public function addUser($nick, $pass, $name){
        $query = "insert into usuario values(null, 2, $nick, $name, $pass)";
        $this->c->ejecutar($query);
    }

    public function getId($nick){
        $query = "select id from usuario where nick = $nick";
        if ($reg = mysql_fetch_array($this->c->ejecutar($query)))
            return $reg[0];
        else return 0;

    }
>>>>>>> 9d4668e0e6891839e7a7b5141d06c65fa7928a25
}
 ?>
