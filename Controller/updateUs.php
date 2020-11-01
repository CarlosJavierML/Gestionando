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

	if (empty($_POST['cedula'])) {
        $errors[] = "Cedula esta vacío";
     }else if (empty($_POST['usuario'])) {
        $errors[] = "Usuario esta vacío";
     }else if (
		!empty($_POST['cedula']) &&
         !empty($_POST['usuario']) 
     ){

		$cedula=mysqli_real_escape_string($conexion,(strip_tags($_POST["cedula"],ENT_QUOTES)));
		$usuario=mysqli_real_escape_string($conexion,(strip_tags($_POST["usuario"],ENT_QUOTES)));

        
        
$cotizante = "UPDATE usuario SET  cedula='".$cedula."', usuario='".$usuario."' WHERE id_usuario=id_usuario";
$query_update = $conexion-> query($cotizante);
			if ($query_update){
                echo '<script language="javascript">alert("Coizante Actualizado con Exito");window.location.href="../View/dashboard2/Cotizantes.php"</script>';
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		