/* funcion edición de modulos */
function functionEditarCmd(ideditaro){

	var ideditar=ideditaro;
    console.log("id a editar "+ideditar);

    $('input[name="idbotonEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_subCmd.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
               
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);      
                
                    var ideditar=resul["cmd_id"];
                    var deseditar=resul["cmd_des"];
                    var comeditar=resul["cmd_com"];
                    
                
                        $('input[name="idComanEditar"]').val(ideditar);
                        $('input[name="nameDesEditar"]').val(deseditar);
                        $('input[name="nameComanEidtar"]').val(comeditar);
                
                                             
    
                            }
        
                    });

}




/* funcion boraddo de modulos */

function functionBorrarCmd(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idborradocomando"]').val(str);
    
    
}
/* funcion boraddo de boton */