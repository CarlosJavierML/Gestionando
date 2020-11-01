<?php

include("conexion.php");
if (isset($_POST['Delete'])){
	$id_cot = $_REQUEST['id'];
	$id = $_REQUEST['id_estado'];


			if($id==1){
    $insert= "UPDATE centro SET id_estado=2
               WHERE id_centro='$_POST[id]'" ;
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/centro.php");
                }else{
                    echo "incorrecto";
				}
			}else{	
				$insert= "UPDATE cotizante SET id_estado=1
				WHERE id_centro='$_POST[id]'";
				 $query = $conexion -> query($insert);
				 if ($query){
					header ("Location: ../View/temple/centro.php");
				 }else{
					 echo "incorrecto";
				 }
			}
		}