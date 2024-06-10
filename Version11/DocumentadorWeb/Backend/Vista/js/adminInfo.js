/* funcion edición de botton */
function functionEditarArti(ideditaro){

	var ideditar=ideditaro;
    $('input[name="idbotonEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminInfo.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

           
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);      
              
                        $('input[name="idArtEdit"]').val(resul["id_art"]);
                        $('input[name="titleArtEdit"]').val(resul["tit_art"]);
                        $('#descrArtiEdit').html(resul["text_art"]);    
                        

                        

                   
                     
                            }
        
                    });

}






/* funcion boraddo ARTICULO */

function functionBorrarArti(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idArtiBorrado"]').val(str);
    
    
}
/* funcion boraddo de boton */
