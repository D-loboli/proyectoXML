<?php
  require_once "Data.php";
  $d = new Data();
  $res = $d->getListarUsuario();

  echo "<listar>";

  while ($reg = mysqli_fetch_array($res)) {

    echo "<post>";
      echo "<id> $reg[0]</idRol>";
      echo "<usuario> $reg[1] </nick>";
      echo "<titulo> $reg[2] </nombre>";
    echo "</post>";
  }
  echo "</listar>";
 ?>
