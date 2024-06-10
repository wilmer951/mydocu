$("#selectmodulo").change(function(){


			
    var modulo = $("#selectmodulo option:selected").val();

    console.log(modulo);
    

var datos = new FormData();
datos.append("modulo", modulo);


$.ajax({
url:"Vista/Modulos/ajax/ajax_adminCategorias.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){

    console.log(respuesta);
$('#selectSubmodulo').html(respuesta);

}

});

});





$("#selectmodulo2").change(function(){


			
    var modulo = $("#selectmodulo2 option:selected").val();

    console.log("Modulo seleccioando"+modulo);
    

var datos = new FormData();
datos.append("modulo", modulo);


$.ajax({
url:"Vista/Modulos/ajax/ajax_adminCategorias.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){

    console.log(respuesta);
$('#selectsubeditar').html(respuesta);

}

});

});






/* funcion edición de categoiras */
function functionEditarCategoria(ideditaro){

	var ideditar=ideditaro;
    console.log("id a editar "+ideditar);

    $('input[name="idbotonEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminCategorias.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
               
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);  
                        
                        var idcategoria=resul["cate_id"];
                        var idmodulo=resul["mod_id"];
                        var idsubmodulo=resul["sub_id"];
                        var estado=resul["estado"];
                        var titulo=resul["cate_nom"];

                        var des1=resul["cate_des1"];
                        var inpdes1=resul["cate_inp_des1"];

                        var des2=resul["cate_des2"];
                        var inpdes2=resul["cate_inp_des2"];

                        var dia1=resul["cate_dia1"];
                        var inpdia1=resul["cate_inp_dia1"];
                        var dia2=resul["cate_dia2"];
                        var inpdia2=resul["cate_inp_dia2"];

                        var sol1=resul["cate_sol1"];
                        var inpsol1=resul["cate_inp_sol1"];
                        var sol2=resul["cate_sol2"];
                        var inpsol2=resul["cate_inp_sol2"];

                        var tipo=resul["cate_tip_id"];
                        var seve=resul["cate_sev_id"];
                        var fre=resul["cate_fre_id"];

                       

                        


                        


                        
                  
                        $('input[name="idcategoriaEditar"]').val(idcategoria);

                        $('#selectmodulo2 option:selected').removeAttr('selected');
                        $("#selectmodulo2 option[value="+idmodulo+"]").attr("selected",true);

                                        
                    
                                        datos.append("modulo",idmodulo);
                                    
                                        
                                        $.ajax({
                                            url:"Vista/Modulos/ajax/ajax_adminCategorias.php",
                                            method:"POST",
                                            data: datos,
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            success:function(respuesta){
                                            
                                                
                                            $('#selectsubeditar').html(respuesta);
                                            $('#selectsubeditar option:selected').removeAttr('selected');

                                            $("#selectsubeditar option[value="+idsubmodulo+"]").attr("selected",true);
                                           
                                            
                                            }
                                            
                                            });
                     
                                            $('#selectsubeditar').children().remove().end().prepend("<option selected>Seleccione una opción</option>");
                                          


                                            $('#estadoedit option:selected').removeAttr('selected');
                                            $("#estadoedit option[value="+estado+"]").attr("selected",true);



                                            $('input[name="catetituloeditar"]').val(titulo);



                                            $('textarea[name="catedes1editar"]').val(des1);

                                            $('#inpdes1editar > option[value="'+inpdes1+'"]').attr('selected','selected');
                                            $('textarea[name="catedes2editar"]').val(des2);
                                            $('#inpdes2editar > option[value="'+inpdes2+'"]').attr('selected','selected');

                                            $('textarea[name="catedia1editar"]').val(dia1);
                                            $('#inpdia1editar > option[value="'+inpdia1+'"]').attr('selected','selected');
                                            $('textarea[name="catedia2editar"]').val(dia2);
                                            $('#inpdia2editar > option[value="'+inpdia2+'"]').attr('selected','selected');

                                            $('textarea[name="catesol1editar"]').val(sol1);
                                            $('#inpsol1editar > option[value="'+inpsol1+'"]').attr('selected','selected');
                                            $('textarea[name="catesol2editar"]').val(sol2);
                                            $('#inpsol2editar > option[value="'+inpsol2+'"]').attr('selected','selected');

                                            $('#tipoeditar > option[value="'+tipo+'"]').attr('selected','selected');
                                            $('#seveeditar > option[value="'+seve+'"]').attr('selected','selected');
                                            $('#freediat > option[value="'+fre+'"]').attr('selected','selected');



                                             
    
                            }
        
                    });

}

/* funcion edición de categorias */




/* funcion boraddo de categorias */

function functionBorrarCategoria(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idCategoriaborrado"]').val(str);
    
    
}
