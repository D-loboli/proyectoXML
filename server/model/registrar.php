<?php

      require_once "Data.php";
      $nick = $_GET['nick'];
      $name = $_GET['name'];
      $clave = $_GET['clave'];

      $d = new Data();

      // Si el usuario se registra correctamente se envia un tag registro
      // con un mensaje de confirmacion, de lo contrario envio un tag error

      if ($d->isRegistroValido($nick)) {
        $d->addUser($nick, $clave, $name);
        echo "<registro>";
          echo "<mensaje> Usuario registrado con exito </mensaje>";
          echo "<registrado> true </registrado>";
        echo "</registro>";
      }

      else{
        echo "<registro>";
          echo "<mensaje> Usuario ya existe </mensaje>";
          echo "<registrado> false </registrado>";
        echo "</registro>";
      }


 ?>
