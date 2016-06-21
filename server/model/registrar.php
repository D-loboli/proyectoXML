<?php

    echo "antes del require";
    require_once "Data.php";
    echo "despues del require";
    $u = $_GET['nick'];
    $p = $_GET['pass'];
    $nom = $_GET['nombre'];
    $data = new Data();

    if ($data->isRegistroValido($u)) {
        $data->addUser($u, $p, $nom);
        $id = $data->getId($u);
        echo "El usuario de id " + $id + "ha sido creado exitosamente";
    }
    else echo "Error! usuario existente";

 ?>
