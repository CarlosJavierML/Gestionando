<?php
include "../../../Controller/conexion.php";
$codigo = $_POST['codigo'];
$sql ="SELECT * FROM cotizante WHERE id_cotizante ='$codigo'";
$resultado =$conexion->query($sql);
while($sql = $resultado->fetch()){
    echo $sql['id_cotizante']."".$sql['nombre']."".$sql['apellido']."".$sql['cedula']."".$sql['telefono']."".$sql['correo']."".$sql['direccion'];
}