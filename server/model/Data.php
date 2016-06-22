<?php
require_once "../db/Conexion.php";

class Data{
    private $conexion;

    public function __construct(){
        $this->conexion = new Conexion(
            "localhost",
            "dbBlog",
            "root",
            "admin"
        );
    }

    public function isRegistroValido($user){

      echo "entro al metodo";
      $query = "select count(id) from usuario where nick = '$user';";
      $res = $this->conexion->ejecutar($query);
      echo "antes del reg";
      echo "despues del reg<br>";

      if ($reg = mysql_fetch_array($res)) {
        echo $reg[0];
        if ($reg[0] == 0) {
          return true;
        }
        else return false;
      }

      return true;
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

    public function addUser($nick, $pass, $name){
        $query = "insert into usuario values(null, 2, $nick, $name, $pass);";
        $this->conexion->ejecutar($query);
    }

    public function getId($nick){
        $query = "select id from usuario where nick = '$nick'";
        if ($reg = mysql_fetch_array($this->conexion->ejecutar($query)))
            return $reg[0];
        else return 0;
    }

    public function getIngresarPost($idUsuario, $titulo, $texto, $fecha, $calificacion){
      $query = "insert into from post values($idUsuario, $titulo, $texto, $fecha, $calificacion)";
        $this->conexion->ejecutar($query);
    }

    public function getListar(){
      $qyert = "select from * post";
      $this->conexion->ejecutar($query);
    }

}


 ?>
