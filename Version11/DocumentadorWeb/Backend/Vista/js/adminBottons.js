/* funcion edición de botton */
function functionEditarBoton(ideditaro){

	var ideditar=ideditaro;
    $('input[name="idbotonEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminBottons.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
                     
                   
                     
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);      
                        var idinput=resul[0];
                        var nameinput=resul[1];
                        var desinput=resul[2];

                        $('input[name="idusueditar"]').val(idinput);
                        $('input[name="nameBotonEditar"]').val(nameinput);
                        $('input[name="desBotonEditar"]').val(desinput);
                    
                                                  
    
                            }
        
                    });

}

/* funcion edición de botton */



/* funcion boraddo de boton */

function functionBorrarBotton(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idbotonBorrado"]').val(str);
    
    
}
/* funcion boraddo de boton */
