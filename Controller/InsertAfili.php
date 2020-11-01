<?php

include("conexion.php");
 if (isset($_POST['Insert'])){
    $id_ent = $_POST['id_ent'];
    $id_centro = $_POST['id_centro'];
    $fecha_pago = $_POST['fecha_pago'];
    $total_pagar= $_POST['total_pagar'];
    $id_estado= $_POST['id_estado'];

    

    $insert= "INSERT INTO afiliacion (id_afi, id_ent, id_centro, fecha_pago, total_pagar, id_estado)
                VALUES (null,'$id_ent', '$id_centro', '$fecha_pago','$total_pagar', '$id_estado')";
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/afiliacion.php");
                }else{
                    echo "incorrecto";
                }
            }