<?php

include("conexion.php");
 if (isset($_POST['Insert'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono= $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];

    $insert= "INSERT INTO persona (id_per, nombre, apellido, telefono, correo, direccion, id_usuario,id_estado)
                VALUES (null, '$nombre', '$apellido','$telefono', '$correo', '$direccion', null,null)";
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/Dashboard/index.php");
                }else{
                    echo "incorrecto";
                }
            }