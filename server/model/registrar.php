<?php

    if (isset($_GET["nick"]) && isset($_POST["pass"]) && isset($_GET["nombre"])) {

        require_once "Data.php";
        $u = $_GET["nick"];
        $p = $_GET["pass"];
        $nom = $_GET["nombre"];
        $data = new Data();

        if ($data->isRegistroValido($u)) {
            $data->addUser($u, $p, $nom);
            $id = $data->getId($u);
            echo "El usuario de id " + $id + "ha sido creado exitosamente";
        }
        else echo "Error! usuario existente";
    }


 ?>
