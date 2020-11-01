<?php

include("conexion.php");
 if (isset($_POST['Insert'])){
    $nombre = $_POST['nombre'];
    $id_estado = $_POST['id_estado'];

    $insert= "INSERT INTO centro (id_centro, nombre, id_estado)
                VALUES (null, '$nombre', '$id_estado')";
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/centro.php");
                }else{
                    echo "incorrecto";
                }
            }

