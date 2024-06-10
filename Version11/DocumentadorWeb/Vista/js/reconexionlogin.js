

$("#btnreconectar").click(function(e){

    e.preventDefault();

    var string=$("#formloginrecone").serialize();
    
       
    $.ajax({
        url:"Vista/Modulos/ajax/ajax_reconexionlogin.php",
        method:"POST",
        data : $("#formloginrecone").serialize(),
        
        cache: false,
        
        processData: false,

 

        success:function(respuesta){

         
         console.log("Estado reconexión: "+respuesta);

         

         if(respuesta==="ok"){
            $("#modalreconexion").modal('hide');

         }else{

            $("#alertreconection").replaceWith(respuesta);
         }

        }

    });












     });