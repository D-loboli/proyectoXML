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
        $query = "select id from rol where nick = $nick and clave = $clave";
        $res = $this->conexion->ejecutar($query);
        if ($reg = mysql_fetch_array($res)) $res = $reg;
        else $res = 0;
        return $res;
    }

    public function getEliminarPost($id_post, $id){
      $query = "delete id = $id_post from post where id_usuario = $id";
      $res = $this->conexion->ejecutar($query);
      if ($reg = mysql_fetch_array($res)) $res = $reg;
      else $res = 0;
      return $res;
    }

    public function getRegistrar($nick, $pass, $name){
        $query = "insert into usuario values(null, 2, $nick, $name, $pass)";
        $this->c->ejecutar($query);
    }

    public function getId($nick){
        $query = "select id from usuario where nick = $nick";
        if ($reg = mysql_fetch_array($this->c->ejecutar($query)))
            return $reg[0];
        else return 0;
    }

    public function getIngresarPost($idUsuario, $titulo, $texto){
      $query = "insert into from post values($idUsuario, $titulo, $texto, fecha, calificacion)";
        $this->c->ejecutar($query);
    }

    public function getListar(){
      $qyert = "select from * post";
      $this->c->ejecutar($query);    
    }

}


 ?>
