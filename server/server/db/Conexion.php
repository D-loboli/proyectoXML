<?php
class Conexion{
    private $con;

    public function __construct($server, $bd, $user, $pass){
        $this->con = mysqli_connect($server, $user, $pass,$bd);

        if(!$this->con){
            die("Error al conectar: ".mysql_error());
        }
/*
        $sBD = mysql_select_db($bd, $this->con);

        if(!$sBD){
            die("Error al seleccionar: ".mysql_error());
        }
        */
    }

    public function ejecutar($query){
        return mysqli_query($this->con,$query);
    }

}
?>
