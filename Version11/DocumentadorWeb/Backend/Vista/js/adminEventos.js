
/* funcion borrado eventos */

function functionBorrarevento(idborrado){

            console.log(idborrado);    

            var str=idborrado;
            console.log(str);
            $('input[name="idEventoBorrado"]').val(str);
                
    
}
/* funcion boraddo de boton */







/* ACTIVAR O DESACTIVAR EVENTOS*/


$("#statusEvent").change(function(){
    

    var stevent=$("#statusEvent").val();
    
    stevent = $(this).is(':checked');
    console.log("Estado de checkbox "+stevent);


    var datos = new FormData();
    datos.append("stevento", stevent);



    $.ajax({
        url:"Vista/Modulos/ajax/ajax_adminEventos.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){

            console.log(respuesta);

                  
       
                    } 


            });



  
});
