$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_ent = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_ent': id_ent}

    console.log(id.id_ent)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'admin.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_ent").val(datos.id_ent);
            $("#nombre").val(datos.nombre);
            $("#id_tipo").val(datos.id_tipo);
            $("#id_estado").val(datos.id_estado);
            
            
            
		}
    });
    
});