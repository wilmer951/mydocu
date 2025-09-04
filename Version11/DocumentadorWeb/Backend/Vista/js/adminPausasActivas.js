/* funcion edición de modulos */
function functionEditarPausaactivas(ideditaro){

	var ideditar=ideditaro;
    console.log("id a editar "+ideditar);

    $('input[name="idbotonEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminPausasActivas.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
               
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);  

                    var id=resul["alertpa_id"];
                    var titulo=resul["alertpa_titulo"];
                    var mensaje=resul["alertpa_mensaje"];
                    var estado=resul["alertpa_estado"];
                    

                    $('input[name="ideditar"]').val(id);
                    $('textarea[name="nameTituloEditar"]').val(titulo);
                    $('textarea[name="nameMensajeditar"]').val(mensaje);
                    $('#estadoeditar option:selected').removeAttr('selected');
                    $('#estadoeditar > option[value="'+estado+'"]').attr('selected','selected');
                    
                                             
    
                            }
        
                    });

}






/* ACTUALIZAR RANGO DE TIEPO DE POSPOSICIÓN DE ALERTAS*/


$("#rangetimepausa").change(function(){
    

    var range=$("#rangetimepausa").val();
    var improuput = $("#output").html(range+" Minuto(s)");

    console.log("rango de timepo :"+range);

    var datos = new FormData();
    datos.append("rango", range);



    $.ajax({
        url:"Vista/Modulos/ajax/ajax_adminPausasActivas.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){

            console.log("Resultado al guardar rango de tiempo "+respuesta);

                  
       
                    } 


            });





  
});






/* ACTUALIZAR DIAS PARA CAMBIO DE ACCEOSRIOS*/


$("#actuaDiasCA").click(function(e){

    e.preventDefault();

    
    var dias=$("#diasCambioAC").val();
    

    var datos = new FormData();
    datos.append("dias", dias);



            $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminPausasActivas.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){


                    var trimStr = $.trim(respuesta);

                                    if (trimStr=="success") {
                                        Swal.fire({
                                            title: "<strong>Operación exitosa</u></strong>",
                                            icon: "success",
                                         })
                                    }else{


                                        Swal.fire({
                                            title: "<strong>Operación fallida</u></strong>",
                                            icon: "error",
                                         })
                                    }

                        
            
                            } 


                    });










});
   

/* RESUMEN PASUAS ACTIVAS */
function functionResumenPausasActivas(){


    $('#idresult').html("");   

    
    var fechainicial=$("#resumenfechainicial").val();
    var fechafin=$("#resumenfechafin").val();
    
    if (fechainicial=="") {

        const fecha = new Date();
        const añoActual = fecha.getFullYear();
        const mesActual = fecha.getMonth() + 1; 
        if(mesActual<10){
            mesActuall='0'+mesActual; //agrega cero si el menor de 10
        }
        var mesActuall=mesActual;
        fechainicial=añoActual+"-"+mesActuall+"-01";
        $("#resumenfechainicial").val(fechainicial);

    }

    if (fechafin=="") {

        const fecha = new Date();
        const añoActual = fecha.getFullYear();
        var mesActual = fecha.getMonth() + 1; 
        var diaactual = fecha.getDate(); 
        

        if(diaactual<10){
        diaactual='0'+diaactual; //agrega cero si el menor de 10
    }
        if(mesActual<10){
            mesActual='0'+mesActual; //agrega cero si el menor de 10
        }



        fechafin=añoActual+"-"+mesActual+"-"+diaactual;
        $("#resumenfechafin").val(fechafin);

        

    }



    
    console.log("fecha iniicial resumen "+fechainicial);
    console.log("fecha final resumen "+fechafin);

	var resumen="yes";
   
    var datos = new FormData();
        datos.append("resumen", resumen);
        datos.append("fechainicial", fechainicial);
        datos.append("fechafin", fechafin);


    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminPausasActivas.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                    var resul = $.parseJSON(respuesta);
                    console.log(resul);  


                    var  subpa=0;
                    var  totalpa=0;
                    var  subpd=0;
                    var  totalpd=0;
                    
                    var  subca=0;
                    var  totalca=0;

                for (let index = 0; index < resul.length; index++) {
                    data='<tr><td>'+resul[index]["usuario"]+
                    '</td><td>'+resul[index]["nombres"]+
                    '</td><td>'+resul[index]["PA"]+
                    '</td><td>'+resul[index]["PD"]+
                    '</td><td>'+resul[index]["CA"]+'</td></tr>';
                    
                    $('#idresult').append(data);   


                    
                            subpa=parseInt(resul[index]["PA"]);
                            totalpa+=subpa;

                            subpd=parseInt(resul[index]["PD"]);
                            totalpd+=subpd;

                            subca=parseInt(resul[index]["CA"]);
                            totalca+=subca;
                            
                }
                    var total = totalpa +totalpd +totalca;
                

                $('#totalpa').html(totalpa);
                $('#totalpd').html(totalpd);
                $('#totalca').html(totalca);
                $('#total').html(total);




                            }
        
                    });

}




/* funcion boraddo de boton */

function functionBorrarInstru(idborrado,nominstru){

    console.log(idborrado);    

var str=idborrado;
var name=nominstru;
console.log(str);
$('input[name="idborradoinstru"]').val(str);
$('input[name="nameborradoinstru"]').val(name);
    
    
}





/* VALIDAR ARCHIVO INSTRUCTIVO */

$("#instructivo").change(function(){
    
    var archivo =$("#instructivo")[0].files[0];
    var tipoarchivo =archivo.type;
    console.log(tipoarchivo);

    if (tipoarchivo=="image/png" ||tipoarchivo=="image/jpg" || tipoarchivo=="image/jpeg" || tipoarchivo=="image/gif" || tipoarchivo=="video/mp4") {
        
    }else{

        $("#instructivo").val("");
                            Swal.fire({
                            icon: 'error',
                            text: 'Lo sentimos archivo no valido',
                            
                            })
    }

    
   



});



