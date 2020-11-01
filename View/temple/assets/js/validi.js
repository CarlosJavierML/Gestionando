function validarfor(){

    var nombre= document.getElementById("nombre").value; 
    var apellido= document.getElementById("apellido").value;
    var cedula= document.getElementById("cedula").value;  
    var correo= document.getElementById("correo").value; 
    var telefono= document.getElementById("tel").value;
    
  
    var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
    
    if ( !expr.test(correo) ){                                                            //COMPRUEBA MAIL
       alert("Error: La dirección de correo " + correo + " es incorrecta.");
       return false;
    }
    
    if  (nombre == "")  {  //COMPRUEBA CAMPOS VACIOS
        alert("El campo NOMBRE no puede estar vacio");
        return false;
    }
    if  (apellido == "")  {  //COMPRUEBA CAMPOS VACIOS
      alert("El campo APELLIDO no puede estar vacio");
      return false;
  }

if  (cedula== "")  {  //COMPRUEBA CAMPOS VACIOS
  alert("El campo CEDULA no puede estar vacio");
  return false;
}
    if  (telefono == "")  {  //COMPRUEBA CAMPOS VACIOS
    alert("El campo TELEFONO no puede estar vacio");
    return false;
  }
}
onload =function(){ 
  var cedula = document.querySelectorAll('.number-only')[0];

  cedula.onkeypress = function(e) {
     if(isNaN(this.value+""+String.fromCharCode(e.charCode)))
        return false;
  }
  cedula.onpaste = function(e){
     e.preventDefault();
  }
}