function validarfor(){

    var id_ent= document.getElementById("id_ent").value; 
    var id_centro= document.getElementById("id_centro").value;
    var total_pagar= document.getElementById("total_pagar").value;
    fecha_pago = new Date(ano, mes, dia);
    
    var ano = document.getElementById("ano").value;
    var mes = document.getElementById("mes").value;
    var dia = document.getElementById("dia").value;


    if(id_ent === ""  || id_centro === ""  || fecha_pago === ""  || total_pagar === ""  ){
        alerta("Todos los campos son obligatorios")
        return false;
      }

    else if( isNaN(id_ent) ) {
        alert('El campo debe tener una entidad');
        return false;
      }
   else if( isNaN(id_centro) ) {
    alert('El campo debe tener un centro');
    return false;
  }
  else if( !isNaN(fecha_pago) ) {
    return false;
  }
  else if( isNaN(total_pagar) ) {
    alert('El campo debe tener un total pagado');
    return false;
  }

}
