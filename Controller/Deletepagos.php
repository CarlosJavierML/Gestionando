<?php

include("conexion.php");
if (isset($_POST['Delete'])){
	$id_cot = $_REQUEST['id'];
	$id = $_REQUEST['id_estado'];


			if($id==1){
    $insert= "UPDATE pagos SET id_estado=2
               WHERE id_pago='$_POST[id]'" ;
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/pagos.php");
                }else{
                    echo "incorrecto";
				}
			}else{	
				$insert= "UPDATE pagos SET id_estado=1
				WHERE id_pago='$_POST[id]'";
				 $query = $conexion -> query($insert);
				 if ($query){
					header ("Location: ../View/temple/pagos.php");
				 }else{
					 echo "incorrecto";
				 }
			}
		}