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
}
 ?>
