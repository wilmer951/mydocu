/* funcion edición de modulos */
function functionEditarModulo(ideditaro){

	var ideditar=ideditaro;
    console.log("id a editar "+ideditar);

    $('input[name="idbotonEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminModulos.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
               
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);      
                        var idmodulo=resul[0];
                        var namemodulo=resul[1];
                        var estado=resul[2];
                        $('input[name="idEditar"]').val(idmodulo);
                        $('input[name="namemoduloEditar"]').val(namemodulo);
                        $('#estadoeditar option:selected').removeAttr('selected');
                        $('#estadoeditar > option[value="'+estado+'"]').attr('selected','selected');

                                             
    
                            }
        
                    });

}

/* funcion edición de modulos */



/* funcion boraddo de modulos */

function functionBorrarModulo(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idborradomodulo"]').val(str);
    
    
}
/* funcion boraddo de boton */
