<?php
require_once "../db/Conexion.php";

class Data{
    private $d;

    public function __construct(){
        $this->c = new Conexion(
            "localhost",
            "grupo",
            "root",
            ""
        );
    }



    public function getPrivilegio($nick, $clave){
    $query = "select idRol from usuario where nick = '$nick' and clave = '$clave'";
    $res = $this->c->ejecutar($query);
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

    public function getRegistrar($nick, $name, $clave){
        $query = "insert into usuario values(null, '2', '$nick', '$name', '$clave')";
        $this->c->ejecutar($query);
    }

    public function getId($nick){
        $query = "select id from usuario where nick = $nick";
        if ($reg = mysql_fetch_array($this->c->ejecutar($query)))
            return $reg[0];
        else return 0;
    }

    public function getIngresarPost($idUsuario, $titulo, $texto){
      $query = "insert into from post values('$idUsuario', '$titulo', '$texto', '2016-06-18', 4)";
        $this->c->ejecutar($query);
    }

    public function getListar(){
      $qyert = "select from * post";
      $this->c->ejecutar($query);
    }

}


 ?>