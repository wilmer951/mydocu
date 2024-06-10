function cargarnotificaciones()
{

   

/* SE DESPLEGARAN LAS NOTIFIACIONES */ 






    var consulNotificaciones = "noti";   /*  ID DEL OBJETIVO */
    var datos = new FormData();
    datos.append("consulNotificaciones", consulNotificaciones);
    
    
    var promise = $.ajax({
        url:"Vista/Modulos/ajax/ajax_notificaciones.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){
    
            console.log(respuesta);

             
                 
                                
        }
    
    
    
    
    });
    
  
  
  
  
  }
  