
<?php
include "../../../Controller/conexion.php";
$codigo = $_POST['codigo'];
$sql ="SELECT * FROM afiliacion WHERE id_afi ='$codigo'";
$resultado =$conexion->query($sql);
while($sql = $resultado->fetch()){
    echo $sql['id_afi']."".$sql['id_ent']."".$sql['id_centro']."".$sql['fecha_pago']."".$sql['total_pagar']."".$sql['id_estado'];
}