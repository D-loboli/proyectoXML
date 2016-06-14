html

<?php
    require_once "/Data.php"
    $usuario = $_GET['u'];
    $password = $_GET['p'];
    $id = $_GET['id'];
    $confirmacion = $_GET['c'];

    $d = new Data();

    $permiso = $d.getPrivilegio($u,$p,$i);



 ?>
