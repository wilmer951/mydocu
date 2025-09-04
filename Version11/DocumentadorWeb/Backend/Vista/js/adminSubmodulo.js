/* funcion edición de modulos */
function functionEditarSubmodulo(ideditaro){

	var ideditar=ideditaro;
 

    
   
    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminSubmodulos.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
               
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);      
                        var idsubmodulo=resul[0];
                        var namesubmodulo=resul[1];
                        var idmodulo=resul[2];
                        var estado=resul[3];
                        
                        $('input[name="idsubmoudloeditar"]').val(idsubmodulo);
                        $('#selectmodulos > option[value="'+idmodulo+'"]').attr('selected','selected');
                        $('input[name="nameSubmoduloEditar"]').val(namesubmodulo);
                        $('#estadoeditar option:selected').removeAttr('selected');
                        $("#estadoeditar option[value="+ estado +"]").attr("selected",true);

                        

                        
                                             
    
                            }
        
                    });

}






/* funcion boraddo de submodulos */

function functionBorrarSubmodulo(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idsubmoduloborrado"]').val(str);
    
    
}
/* funcion boraddo de boton */
