html

<?php
    $usuario = $_GET['u'];
    $password = $_GET['p'];
    $id = $_GET['id'];
    $confirmacion = $_GET['c'];
    $permiso = $_gET[]

    public function eliminarUsuario ($id,$permiso){
      if($permiso == 1){
      $query = "delete from usuario where id = $id";
      $this->c->ejecutar($query);
    }
 }

 ?>
