/* funcion edición de botton */
function functionEditarItemInventario(ideditaro){

	var ideditar=ideditaro;
    $('input[name="idItemIvenEditar"]').val(ideditar);
    $("#btenviaredit").prop('disabled', false);

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminInventario.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
                     
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);    


                    $('input[name="idelement"]').val(resul["nom_item"]);
                    $('input[name="nameItemEdit"]').val(resul["nom_element"]);
                    $('input[name="marcaItemEdit"]').val(resul["marca_item"]);
                    $('input[name="modeloItemEdit"]').val(resul["modelo_item"]);
                    $('input[name="serialItemEdit"]').val(resul["serial_item"]);
                    $('input[name="placaIdemiaItemEdit"]').val(resul["placaIdemia_item"]);
                    $("#obsvItemEdit").val((resul["obser_item"]));
                    
                    $('#estadoItemEdit > option[value="'+resul["estado_item"]+'"]').attr('selected','selected');
                    $('#tipoItemEdit > option[value="'+resul["fijo_item"]+'"]').attr('selected','selected');
                    


                     
                            }
        
                    });

}



/* funcion edición de botton */
function functionAsigancionInventario(ideitemo){

	var ideitem=ideitemo;
    
    $('input[name="idItemIvenAsignar"]').val(ideitem);
    
      $('#idresultasi').html(""); 

    var datos = new FormData();
        datos.append("idasig", ideitem);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminInventario.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
                     
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);    

                    
                    var count=1;

                    for (let index = 0; index <  resul.length; index++) {
                          
                        
                        data='<tr><td>'+count+
                        '</td><td>'+resul[index]["nombres"]+
                        '</td><td>'+resul[index]["Iv_Mo_fecha"]+'</td></tr>';
                        
                        $('#idresultasi').append(data);
                        
                        count++;
                      
                                
                    }


                     
                            }
        
                    });




    
}






/* funcion boraddo de boton */

function functionBorradoElementoInventario(idborrado){

    console.log(idborrado);    

var str=idborrado;
console.log(str);
$('input[name="idElementoBorrado"]').val(str);
    
    
}
/* funcion boraddo de boton */









/* funcion edición de botton */
function functionEditarElementoInventario(ideditaro){

	var ideditarelement=ideditaro;
    $('input[name="idElmentEditar"]').val(ideditarelement);
    

    var datos = new FormData();
        datos.append("ideditarelement", ideditarelement);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminInventario.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
                     
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);    

                    $('input[name="nameElementEditar"]').val(resul["nom_element"]);
                    $('#tipoElementEditar > option[value="'+resul["tip_element"]+'"]').attr('selected','selected');

                     
                            }
        
                    });

}






/* funcion edición de botton */
function functionVerDetalMov(ideItem){

    var idelemnt=ideItem;
    console.log("Numero detalle"+idelemnt);

   
    
var datos = new FormData();
    datos.append("idelemnt", idelemnt);

 $.ajax({
            url:"Vista/Modulos/ajax/ajax_adminInventario.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){
                 
                var resul = $.parseJSON(respuesta);
                console.log(resul);    
                $("#item").html(resul["nom_element"]);
                $("#marca").html(resul["marca_item"]);
                $("#modelo").html(resul["modelo_item"]);
                $("#serial").html(resul["serial_item"]);
                $("#plidemia").html(resul["placaIdemia_item"]);
                $("#estado").html(resul["estado_item"]);
                $("#obsr").html(resul["obser_item"]);
                $("#asig").html(resul["nombres"]);

                

            }
                });
   

}







    function regisaccesorioajax(){

    
        var idacceso= $('#idAccesRegistro').val();
        var cantacce= $('input[name="cantAccesRegistro"]').val();
        var obseacce= $('#obsvAccesRegis').val();




var datos = new FormData();
    datos.append("idacceso", idacceso);
    datos.append("cantacce", cantacce);
    datos.append("obseacce", obseacce);



    $.ajax({
        url:"Vista/Modulos/ajax/ajax_adminInventario.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){
             
        
            console.log(respuesta)
            if (respuesta=="success") {
                $(window).attr('location','index.php?ir=adminInventarioAcc&st=ok')
            }else{
                $(window).attr('location','index.php?ir=adminInventarioAcc&st=fail')
            }
            
            

        },

        beforeSend: function(){
            $('#divregisItem').css('display','none');
            $('#divregisAcceso').css('display','none');
            $("#modalProcesandodatos").modal("show");
          },

            });



    return false;


}



/* COMPROBACIÓN SERIAL */

$( "#serialItemRegistro" ).on( "change", function() {
    var comproserial=$('#serialItemRegistro').val();
    

    var datos = new FormData();
    datos.append("comproserial", comproserial);

 $.ajax({
            url:"Vista/Modulos/ajax/ajax_adminInventario.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){
                
                    if (respuesta>0) {
                        $("#btenviar").prop('disabled', true);
                        Swal.fire({
                            icon: 'error',
                            text: 'Ya existe el serial indicado',
                            
                          })
                          
                          
                        
                    }else{

                        $("#btenviar").prop('disabled', false);
                    }
                 
                        }
    
                });


  } );


  /* COMPROBACIÓN SERIAL */





  /* COMPROBACIÓN SERIAL */

$( "#serialItemRegistro" ).on( "change", function() {
    var comproserial=$('#serialItemRegistro').val();
    

    var datos = new FormData();
    datos.append("comproserial", comproserial);

 $.ajax({
            url:"Vista/Modulos/ajax/ajax_adminInventario.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){
                
                    if (respuesta>0) {
                        $("#btenviar").prop('disabled', true);
                        Swal.fire({
                            icon: 'error',
                            text: 'Ya existe un Item con  el serial digitado',
                            
                          })
                          
                          
                        
                    }else{

                        $("#btenviar").prop('disabled', false);
                    }
                 
                        }
    
                });


  } );


  /* COMPROBACIÓN SERIAL */




   /* COMPROBACIÓN PLACA CLIENTE */

$( "#placaIdemiaItemRegistro" ).on( "change", function() {
    var comPlacaidem=$('#placaIdemiaItemRegistro').val();
    

    var datos = new FormData();
    datos.append("comPlacaidem", comPlacaidem);

 $.ajax({
            url:"Vista/Modulos/ajax/ajax_adminInventario.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){
                
                    if (respuesta>0) {
                        $("#btenviar").prop('disabled', true);
                        Swal.fire({
                            icon: 'error',
                            text: 'Ya existe un Item con la placa digitada',
                            
                          })
                          
                          
                        
                    }else{

                        $("#btenviar").prop('disabled', false);
                    }
                 
                        }
    
                });


  } );


  /* COMPROBACIÓN PLACA CLIENTE */






    /* COMPROBACIÓN SERIAL */

$( "#serialItemEdit" ).on( "change", function() {
    var comproserial=$('#serialItemEdit').val();
    

    var datos = new FormData();
    datos.append("comproserial", comproserial);

 $.ajax({
            url:"Vista/Modulos/ajax/ajax_adminInventario.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){
                
                    if (respuesta>0) {
                        $("#btenviaredit").prop('disabled', true);
                        Swal.fire({
                            icon: 'error',
                            text: 'Ya existe un Item con  el serial digitado',
                            
                          })
                          
                          
                        
                    }else{

                        $("#btenviaredit").prop('disabled', false);
                    }
                 
                        }
    
                });


  } );


  /* COMPROBACIÓN SERIAL */


      /* COMPROBACIÓN SERIAL */

$( "#placaIdemiaItemEdit" ).on( "change", function() {
    var comPlacaidem=$('#placaIdemiaItemEdit').val();
    

    var datos = new FormData();
    datos.append("comPlacaidem", comPlacaidem);

 $.ajax({
            url:"Vista/Modulos/ajax/ajax_adminInventario.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){
                
                    if (respuesta>0) {
                        $("#btenviaredit").prop('disabled', true);
                        Swal.fire({
                            icon: 'error',
                            text: 'Ya existe un Item con la placa digitada',
                            
                          })
                          
                          
                        
                    }else{

                        $("#btenviaredit").prop('disabled', false);
                    }
                 
                        }
    
                });


  } );


  /* COMPROBACIÓN SERIAL */





  function functionUtilizaAccorio(idacesorio){

        var idacce=idacesorio;
    $('input[name="idAccesorio"]').val(idacce);

  }