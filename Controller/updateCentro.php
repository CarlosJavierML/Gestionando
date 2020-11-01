<?php
define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root');//Usuario de tu base de datos
define('DB_PASS', '');//Contraseña del usuario de la base de datos
define('DB_NAME', 'gestionando');//Nombre de la base de datos
$conexion=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$conexion){
	die("imposible conectarse: ".mysqli_error($conexion));
}
if (mysqli_connect_errno()) {
	die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
?>
<?php

	if (empty($_POST['nombre'])) {
        $errors[] = "nombre esta vacío";
     }else if (empty($_POST['id_estado'])) {
        $errors[] = "estado esta vacío";
     
     }   else if (
         !empty($_POST['nombre']) &&
         !empty($_POST['id_estado']) 
     ){
        $nombre= mysqli_real_escape_string($conexion,(strip_tags($_POST["nombre"],ENT_QUOTES)));
        $id_estado=mysqli_real_escape_string($conexion,(strip_tags($_POST["id_estado"],ENT_QUOTES)));
        
        
        
$centro = "UPDATE centro SET nombre='".$nombre."', id_estado='".$id_estado."' WHERE id_centro=id_centro";
$query_update = $conexion-> query($centro);
			if ($query_update){
                echo '<script language="javascript">alert("centro Actualizado con Exito");window.location.href="../View/temple/centro.php"</script>';
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		
