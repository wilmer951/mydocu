$("#generarEdad").click(function(e){

    e.preventDefault();
   
   
   var string=$("#formedad").serialize();
       
       $.ajax({
           url:"Vista/Modulos/ajax/ajax_utilidades.php",
           method:"POST",
           data : $("#formedad").serialize(),
           
           cache: false,
           
           processData: false,
   
    
   
           success:function(respuesta){
   
            
            $("#resultado").html(respuesta);
            $("#modalresul").modal("show");
            
        
   
       
   
           }
   
       });
   
   
   
   
   
   
   
   
   
   
   
   });