<?php

include("conexion.php");
if (isset($_POST['Delete'])){
	$id_cot = $_REQUEST['id'];
	$id = $_REQUEST['id_estado'];
	

			if($id==1){
    		  $insert= "UPDATE cotizante SET id_estado=7
               WHERE id_cotizante='$_POST[id]'" ;
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/Cotizantes.php");
                }else{
                    echo "incorrecto";
				}
			}else{	
				$insert= "UPDATE cotizante SET id_estado=8
				WHERE id_cotizante='$_POST[id]'";
				 $query = $conexion -> query($insert);
				 if ($query){
					header ("Location: ../View/temple/Cotizantes.php");
				 }else{
					 echo "incorrecto";
				 }
			}
		}