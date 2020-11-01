<?php
include "conexion.php";
 if(isset($_POST['consultar']))
 {    
     $id  = $_POST['id'];
     $consulta ="SELECT * FROM cotizante WHERE id_cotizante = '$id'";
    $resultados =  $conexion -> query($consulta);
    while($consulta = $resultados->fetch()){
     $consulta=$_POST['nombre'];
  }
}
?>