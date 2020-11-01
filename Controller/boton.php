<?php
include("conexion.php");
// 1 Recibes variable id por get 
                 $id_centro = $_GET ['id_centro'];
                 $query;

//2 Consultar el registor por id
                $query = "SELECT * FROM centro where id_centro ={$id_centro}";
                $result_rols = mysqli_query($conn, $query);
                    
                
                
				//3 recorrer y validar el estado
                $estadoNuevo;
                $result_rols= mysqli_query($conn, $query);
				while ($row = mysqli_fetch_array($result_rols)) {

					if($row['id_estado'] == 1){

						$estadoNuevo= 3;

					}else {

						$estadoNuevo = 1;
					}

				}
                //paso 4   hacer update con la variable  estadoNuevo
            $query = "UPDATE centro set id_estado = '$estadoNuevo' WHERE id_centro=$id_centro";
                $result_rols = mysqli_query($conn, $query);

                header('Location: ../View/temple/centro.php');
                
?>