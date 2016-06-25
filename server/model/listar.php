<?php
  require_once "Data.php";
  $d = new Data();
  $res = $d->getAllPosts();

  echo "<listar>";

  while ($reg = mysqli_fetch_array($res)) {

    echo "<post>";
      echo "<id> $reg[0]</id>";
      echo "<usuario> $reg[1] </usuario>";
      echo "<titulo> $reg[2] </titulo>";
      echo "<texto> $reg[3] </texto>";
      echo "<fecha> $reg[4] </fecha>";
    echo "</post>";
  }
  echo "</listar>";

 ?>
