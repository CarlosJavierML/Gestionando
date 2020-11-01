<?php

include("conexion.php");
 if (isset($_POST['Insert'])){
    $nombre = $_POST['nombre'];
  

    $insert= "INSERT INTO estado (id_estado, nombre)
                VALUES (null, '$nombre')";
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/estado.php");
                }else{
                    echo "incorrecto";
                }
            }