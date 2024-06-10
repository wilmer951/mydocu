/* funcion edición de modulos */
function functionEditarPsw(ideditaro){

	var ideditar=ideditaro;
    console.log("id a editar "+ideditar);

    $('input[name="idbotonEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_subPsw.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
               
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);      
                
                    var ideditar=resul["psw_id"];
                    var aplieditar=resul["psw_apli"];
                    var usueditar=resul["psw_usu"];
                    var idmodueditar=resul["psw_mod"];

                    $('input[name="idpswEditar"]').val(ideditar);
                    $('input[name="nameaplicacioneditar"]').val(aplieditar);
                    $('input[name="nameusuarioeditar"]').val(usueditar);
                    $('input[name="nameidmodueditar"]').val(idmodueditar);
                                             
    
                            }
        
                    });

}




/* funcion boraddo de modulos */

function functionBorrarPsw(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idpswBorrado"]').val(str);
    
    
}
/* funcion boraddo de boton */