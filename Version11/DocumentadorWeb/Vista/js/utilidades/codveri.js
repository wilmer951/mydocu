$("#generarCodVerifi").click(function(){

  

    var nprperacion=$("#npreparacion").val();
    var respuesta=nprperacion%7;
    
    
    
      
    $("#resultado").html("El codigo de verificación es: <h5>"+respuesta+"</h5>");
    $("#modalresul").modal("show");
    
    
    
    
});
    
    
    