<?php

include("conexion.php");
if (isset($_POST['Delete'])){
	$id = $_REQUEST['id_estado'];


			if($id==1){
    $insert= "UPDATE afiliacion SET id_estado=2
               WHERE id_estado=$id" ;
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/dashboard2/afiliacion.php");
                }else{
                    echo "incorrecto";
				}
			}else{	
				$insert= "UPDATE afiliacion SET id_estado=1
				WHERE id_estado=$id";
				 $query = $conexion -> query($insert);
				 if ($query){
					header ("Location: ../View/dashboard2/afiliacion.php");
				 }else{
					 echo "incorrecto";
				 }
				}
			}
	