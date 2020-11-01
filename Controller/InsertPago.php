<?php

include("conexion.php");
 if (isset($_POST['Insert'])){
    $id_afi = $_POST['id_afi'];
    $fecha_pago_cuota = $_POST['fecha_pago_cuota'];
    $valor_pagado = $_POST['valor_pagado'];
    $id_estado = $_POST['id_estado'];



    $insert= "INSERT INTO pagos (id_pago, id_afi, fecha_pago_cuota, valor_pagado, id_estado)
                VALUES (null, '$id_afi', '$fecha_pago_cuota', '$valor_pagado', '$id_estado')";
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/pagos.php");
                }else{
                    echo "incorrecto";
                }
            }