<?php
  require '../basedatos/conexion.php';
  $res= select($conexion,'cuatrimestres');
  define('RAIZ','../../');
  $id = $_GET['id'];
  $delete_id = borrar_registro($conexion,$id,'cuatrimestres');
  if($delete_id){
      echo   "Cliente eliminado.";
      redirect('cuatrimestres.php');
  } else {
      echo "Eliminación falló" ;
      redirect('cuatrimestres.php');
  }
?>
