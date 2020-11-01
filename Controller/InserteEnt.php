<?php

include("conexion.php");
 if (isset($_POST['Insert'])){
    $nombre = $_POST['nombre'];
    $id_tipo = $_POST['id_tipo'];
    $id_estado = $_POST['id_estado'];

    $insert= "INSERT INTO entidad_administradora (id_ent, nombre, id_tipo, id_estado)
                VALUES (null, '$nombre', '$id_tipo', '$id_estado')";
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/administradora.php");
                }else{
                    echo "incorrecto";
                }
            }

