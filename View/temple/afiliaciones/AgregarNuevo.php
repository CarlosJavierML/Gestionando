<?php
session_start();
include_once('../conexion/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO afiliacion (id_cotizante, id_ent, id_centro, total_pagar, id_estado) VALUES (:id_cotizante, :id_ent, :id_centro,:total_pagar, :id_estado)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':id_cotizante' => $_POST['id_cotizante'] , ':id_ent' => $_POST['id_ent'] , ':id_centro' => $_POST['id_centro'] , ':total_pagar' => $_POST['total_pagar'] , ':id_estado' => $_POST['id_estado'] )) ) ? 'afiliacion guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: ../afiliacion.php');
	
?>