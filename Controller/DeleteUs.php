<?php

include("conexion.php");
 if (isset($_POST['DeleteUs'])){

	$id = $_POST['id_estado'];

		if($id==1){
			
    $insert= "UPDATE  usuario SET id_estado=2
               WHERE id_estado=$id";
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/dashboard2/usuarios.php");
                }else{
                    echo "incorrecto";
                }
			}else{
			$insert= "UPDATE  usuario SET id_estado=1
			WHERE id_estado=$id";
			 $query = $conexion -> query($insert);
			 if ($query){
				header ("Location: ../View/dashboard2/usuarios.php");
			 }else{
				 echo "incorrecto";
			 }
		 }
		
		}