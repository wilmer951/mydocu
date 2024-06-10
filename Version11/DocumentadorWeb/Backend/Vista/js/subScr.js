/* funcion edición de modulos */
function functionEditarScr(ideditaro){

	var ideditar=ideditaro;
    console.log("id a editar "+ideditar);

    $('input[name="idbotonEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_subScr.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
               
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);      
                
                    var idscpeditar=resul["scp_id"];
                    var deseditar=resul["scp_des"];
                    var script=resul["scp_scp"];
                    
                
                        $('input[name="idscpEditar"]').val(idscpeditar);
                        $('input[name="namscpdesceditar"]').val(deseditar);
                        

                        $("#namescpeditar").html(script);
                        
                                             
    
                            }
        
                    });

}




/* funcion boraddo de modulos */

function functionBorrarScr(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idscpborrado"]').val(str);
    
    
}
/* funcion boraddo de boton */