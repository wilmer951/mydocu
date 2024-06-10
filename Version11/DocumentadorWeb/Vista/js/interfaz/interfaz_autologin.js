
function repetirAutoLogin(){
    setInterval(autologin,60000);  // se repetira cada 1 minutos.

}

// FUNCIÓN PRUEBA DE AUTOLOGIN.

    function autologin(){
    
  
        var consultLogin = 1;
        
        var datos = new FormData();
      
        datos.append("consultLogin", consultLogin);
        
        
    
        
        $.ajax({
            url:"Vista/Modulos/ajax/ajax_autologin.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){
                console.log("Estado conexion actual: "+respuesta);
                                if (respuesta==="ok") {
                                    
                                    autoguardadoNotas();
                                    cargarnotificaciones();
                                }else{
                                    $("#modalreconexion").modal("show");
                                   
                                }
                    
                      
    
                 
                    }   
    
    
                    
                
        
            });
    
        }