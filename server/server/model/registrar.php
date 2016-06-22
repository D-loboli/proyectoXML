<?php

      require_once "Data.php";
      $nick = $_GET['nick'];
      $name = $_GET['name'];
      $clave = $_GET['clave'];

      $d = new Data();

      $d->getRegistrar($nick, $pass, $name);

      echo "<info>";
      echo "<mensaje>'usuario resgitrado con exito'<mensaje/>";
      echo "<delete>true<delete/>";
      echo "<info/>";

 ?>
