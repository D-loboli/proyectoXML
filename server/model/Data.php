<?php
require_once "Conexion.php";

class Data{

    private $conexion;

    public function __construct($server, $bd, $user, $pass){
        $conexion = new Conexion($server, $bd, $user, $pass);
    }

    /*
        Metodo utilizado para el login --> retorna 1 si es administrador,
        2 si es usuario común y 0 si no existe
    */

    public function getPrivilegio($nick, $clave){

        $query = "select idRol from usuario where nick = $nick and clave = $clave";
        $res = $this->conexion->ejecutar($query);

        if ($reg = mysql_fetch_array($res)) $res = $reg;

        else $res = 0;

        return $res;
    }
}
 ?>
