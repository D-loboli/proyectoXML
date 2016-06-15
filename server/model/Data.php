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
}
 ?>
