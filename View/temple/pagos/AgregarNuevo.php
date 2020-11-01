<?php
session_start();
include_once('../conexion/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO pagos (id_cotizante, fecha_pago_cuota, valor_pagado, id_estado) 
									VALUES (:id_cotizante, :fecha_pago_cuota, :valor_pagado, :id_estado)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':id_cotizante' => $_POST['id_cotizante'] , ':fecha_pago_cuota' => $_POST['fecha_pago_cuota'] ,
		':valor_pagado' => $_POST['valor_pagado'] , ':id_estado' => $_POST['id_estado'] )) ) ? 'afiliacion guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
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

header('location: ../pagos.php');
	
?>