window.onload = function(){grafico1calidadgeneral(),graficosCategorias()}



$("#siregiscaso").change(function(){


    
    var checkregiscaso =$('input:radio[name=checkregiscaso]:checked').val()
    
    $("#nameformCaso").show();
    console.log("Registro caso " +checkregiscaso);
    
    $("input:text[name=nameformCaso]").val("");

});


$("#noregiscaso").change(function(){


    
    var checkregiscaso =$('input:radio[name=checkregiscaso]:checked').val()
    $("#nameformCaso").hide();
    
    console.log("Registro caso "+checkregiscaso);

    $("input:text[name=nameformCaso]").val("No registra caso");
    
});







$("#enviarformcalidad").click(function(){

    var usuar= $("#nameformUsuario").val();
    var tiempo= $("#nameformTiempo").val();
    var fecha= $("#nameformFecha").val();
    var caso= $("#nameformCaso").val();


    console.log(usuar);

    if (usuar!='' && tiempo!='' && fecha!='' &&caso!='' ){

        
        $("#modalregistroFormulario").modal("hide");
        $("#modalProcesandodatos").modal("show");
    }else{

        console.log("campo vacio");
    }
/* fin RESPUESTA 
    $("#modalProcesandodatos").modal("show");
    
    */
    
});
    
    






function grafico1calidadgeneral(){



    var totalevaluaciones='0';


    var stcalidad=$("#st").val();
    
    
    var datos = new FormData();
    datos.append("stcalidad", stcalidad);



    $.ajax({
        url:"Vista/Modulos/ajax/ajax_adminCalidad.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){ /* INCIO RESPUESTA */


console.log("respuesta grafico "+respuesta);
if (respuesta!='sindatos') {
    



                var resul = $.parseJSON(respuesta);
                console.log(resul);  
                var prcentaje =[];




                for (var index = 0; index < resul.length; index++) {
                    prcentaje.push((resul[index]).toFixed(2));
                    
                }
    
                Chart.register(ChartDataLabels);

            const data = {
                  labels: [
                    'Cumplimiento',
                    'Incumplimiento'
                    
                  ],
                  datasets: [{
                    label: 'My First Dataset',
                    data:prcentaje,
                    backgroundColor: [
                      '#71df3d',
                      '#ff6f5e'
                      
                    ],
                    hoverOffset: 4
                  }]


                  
                };
            

                const ctx = document.getElementById("graficogeneral")
            
                const myChart = new Chart(ctx, {
               type: 'doughnut',
                    data: data,
                    plugins: [ChartDataLabels],
                    options: {

            responsive: true,
                plugins: {
                  legend: {
                    position: 'top',
                  },
                  title: {
                    display: true,
                    text: 'Cumplimeinto General',
                  },


                  datalabels: {
              
                    formatter: function(value) {
                        return value +' % ';
                        
                      },
                      font: {
                        weight: 'bold',
                        size: 13,
                      },

                      color: [
                        'white',    // color for data at index 0
                        
                      ]



                },
            

                  tooltip: {
                    enabled: true,
                    callbacks: {
                        
                        label: (context)=>{
                            console.log(context.parsed)
                            console.log(context.label)
                            return context.label;
                            }
                            
                        
                            }
                        }
          
                


                        }
                    },

            

                });
            

            }else{


                console.log("no hay datos");
$('#nuldatagraficageneral').html("no hay graficas para mostrar");
                
            }




                  
       
                    } /* fin RESPUESTA */


            });
   

}


















$("#caln1").change(function(){
    $("#totalnota").val("0");

    if( $('#caln1').prop('checked') ) {
        $("#nocal1").val("20");
    }else{
        $("#nocal1").val("0");

    }
    

    var calnot1=parseInt($("#nocal1").val());
    var calnot2=parseInt($("#nocal2").val());
    var calnot3=parseInt($("#nocal3").val());
    var calnot4=parseInt($("#nocal4").val());
    var calnot5=parseInt($("#nocal5").val());

var subcaliad=calnot1+calnot2+calnot3+calnot4+calnot5;

console.log(subcaliad);

$("#resulcal").val(subcaliad);
$("#resulcalv").val(subcaliad);



var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));

});


$("#caln2").change(function(){
    $("#totalnota").val("0");

    if( $('#caln2').prop('checked') ) {
        $("#nocal2").val("20");
    }else{
        $("#nocal2").val("0");

    }
    

    var calnot1=parseInt($("#nocal1").val());
    var calnot2=parseInt($("#nocal2").val());
    var calnot3=parseInt($("#nocal3").val());
    var calnot4=parseInt($("#nocal4").val());
    var calnot5=parseInt($("#nocal5").val());

var subcaliad=calnot1+calnot2+calnot3+calnot4+calnot5;

console.log(subcaliad);

$("#resulcal").val(subcaliad);
$("#resulcalv").val(subcaliad);


var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));






});



$("#caln3").change(function(){
    $("#totalnota").val("0");

    if( $('#caln3').prop('checked') ) {
        $("#nocal3").val("20");
    }else{
        $("#nocal3").val("0");

    }
    

    var calnot1=parseInt($("#nocal1").val());
    var calnot2=parseInt($("#nocal2").val());
    var calnot3=parseInt($("#nocal3").val());
    var calnot4=parseInt($("#nocal4").val());
    var calnot5=parseInt($("#nocal5").val());

var subcaliad=calnot1+calnot2+calnot3+calnot4+calnot5;

console.log(subcaliad);

$("#resulcal").val(subcaliad);
$("#resulcalv").val(subcaliad);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));



});



$("#caln4").change(function(){
    $("#totalnota").val("0");

    if( $('#caln4').prop('checked') ) {
        $("#nocal4").val("20");
    }else{
        $("#nocal4").val("0");

    }
    

    var calnot1=parseInt($("#nocal1").val());
    var calnot2=parseInt($("#nocal2").val());
    var calnot3=parseInt($("#nocal3").val());
    var calnot4=parseInt($("#nocal4").val());
    var calnot5=parseInt($("#nocal5").val());

var subcaliad=calnot1+calnot2+calnot3+calnot4+calnot5;

console.log(subcaliad);

$("#resulcal").val(subcaliad);
$("#resulcalv").val(subcaliad);


var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));


});




$("#caln5").change(function(){
    $("#totalnota").val("0");

    if( $('#caln5').prop('checked') ) {
        $("#nocal5").val("20");
    }else{
        $("#nocal5").val("0");

    }
    

    var calnot1=parseInt($("#nocal1").val());
    var calnot2=parseInt($("#nocal2").val());
    var calnot3=parseInt($("#nocal3").val());
    var calnot4=parseInt($("#nocal4").val());
    var calnot5=parseInt($("#nocal5").val());

var subcaliad=calnot1+calnot2+calnot3+calnot4+calnot5;

console.log(subcaliad);

$("#resulcal").val(subcaliad);
$("#resulcalv").val(subcaliad);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));


});






















$("#soport1").change(function(){
    $("#totalnota").val("0");

    if( $('#soport1').prop('checked') ) {
        $("#nosopor1").val("20");
        
    }else{
        $("#nosopor1").val("0");

    }
    

    var sopono1=parseInt($("#nosopor1").val());
    var sopono2=parseInt($("#nosopor2").val());
    var sopono3=parseInt($("#nosopor3").val());
    var sopono4=parseInt($("#nosopor4").val());
    var sopono5=parseInt($("#nosopor5").val());

var subsopor=sopono1+sopono2+sopono3+sopono4+sopono5;

console.log(subsopor);
    


$("#resulsopor").val(subsopor);
$("#resulsoporv").val(subsopor);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));



});


$("#soport2").change(function(){
    $("#totalnota").val("0");

    if( $('#soport2').prop('checked') ) {
        $("#nosopor2").val("20");
    }else{
        $("#nosopor2").val("0");

    }
    

    var sopono1=parseInt($("#nosopor1").val());
    var sopono2=parseInt($("#nosopor2").val());
    var sopono3=parseInt($("#nosopor3").val());
    var sopono4=parseInt($("#nosopor4").val());
    var sopono5=parseInt($("#nosopor5").val());

var subsopor=sopono1+sopono2+sopono3+sopono4+sopono5;

console.log(subsopor);
    


$("#resulsopor").val(subsopor);
$("#resulsoporv").val(subsopor);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));





});



$("#soport3").change(function(){
    $("#totalnota").val("0");

    if( $('#soport3').prop('checked') ) {
        $("#nosopor3").val("20");
    }else{
        $("#nosopor3").val("0");

    }
    

    var sopono1=parseInt($("#nosopor1").val());
    var sopono2=parseInt($("#nosopor2").val());
    var sopono3=parseInt($("#nosopor3").val());
    var sopono4=parseInt($("#nosopor4").val());
    var sopono5=parseInt($("#nosopor5").val());

var subsopor=sopono1+sopono2+sopono3+sopono4+sopono5;

console.log(subsopor);
    


$("#resulsopor").val(subsopor);
$("#resulsoporv").val(subsopor);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));



});



$("#soport4").change(function(){
    $("#totalnota").val("0");

    if( $('#soport4').prop('checked') ) {
        $("#nosopor4").val("20");
    }else{
        $("#nosopor4").val("0");

    }
    

    var sopono1=parseInt($("#nosopor1").val());
    var sopono2=parseInt($("#nosopor2").val());
    var sopono3=parseInt($("#nosopor3").val());
    var sopono4=parseInt($("#nosopor4").val());
    var sopono5=parseInt($("#nosopor5").val());

var subsopor=sopono1+sopono2+sopono3+sopono4+sopono5;

console.log(subsopor);
    


$("#resulsopor").val(subsopor);
$("#resulsoporv").val(subsopor);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));



});




$("#soport5").change(function(){
    $("#totalnota").val("0");

    if( $('#soport5').prop('checked') ) {
        $("#nosopor5").val("20");
    }else{
        $("#nosopor5").val("0");

    }
    

    var sopono1=parseInt($("#nosopor1").val());
    var sopono2=parseInt($("#nosopor2").val());
    var sopono3=parseInt($("#nosopor3").val());
    var sopono4=parseInt($("#nosopor4").val());
    var sopono5=parseInt($("#nosopor5").val());

var subsopor=sopono1+sopono2+sopono3+sopono4+sopono5;

console.log(subsopor);
    


$("#resulsopor").val(subsopor);
$("#resulsoporv").val(subsopor);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));



});
















$("#docu1").change(function(){
    $("#totalnota").val("0");

    if( $('#docu1').prop('checked') ) {
        $("#nodocu1").val("20");
        
    }else{
        $("#nodocu1").val("0");

    }
    

    var docuno1=parseInt($("#nodocu1").val());
    var docuno2=parseInt($("#nodocu2").val());
    var docuno3=parseInt($("#nodocu3").val());
    var docuno4=parseInt($("#nodocu4").val());
    var docuno5=parseInt($("#nodocu5").val());

var subdocu=docuno1+docuno2+docuno3+docuno4+docuno5;

console.log(subdocu);
    


$("#resuldocu").val(subdocu);
$("#resuldocuv").val(subdocu);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));



});


$("#docu2").change(function(){
    $("#totalnota").val("0");

    if( $('#docu2').prop('checked') ) {
        $("#nodocu2").val("20");
    }else{
        $("#nodocu2").val("0");

    }
    

    var docuno1=parseInt($("#nodocu1").val());
    var docuno2=parseInt($("#nodocu2").val());
    var docuno3=parseInt($("#nodocu3").val());
    var docuno4=parseInt($("#nodocu4").val());
    var docuno5=parseInt($("#nodocu5").val());

var subdocu=docuno1+docuno2+docuno3+docuno4+docuno5;

console.log(subdocu);
    


$("#resuldocu").val(subdocu);
$("#resuldocuv").val(subdocu);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));




});



$("#docu3").change(function(){
    $("#totalnota").val("0");

    if( $('#docu3').prop('checked') ) {
        $("#nodocu3").val("20");
    }else{
        $("#nodocu3").val("0");

    }
    

    var docuno1=parseInt($("#nodocu1").val());
    var docuno2=parseInt($("#nodocu2").val());
    var docuno3=parseInt($("#nodocu3").val());
    var docuno4=parseInt($("#nodocu4").val());
    var docuno5=parseInt($("#nodocu5").val());

var subdocu=docuno1+docuno2+docuno3+docuno4+docuno5;

console.log(subdocu);
    


$("#resuldocu").val(subdocu);
$("#resuldocuv").val(subdocu);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));


});



$("#docu4").change(function(){
    $("#totalnota").val("0");

    if( $('#docu4').prop('checked') ) {
        $("#nodocu4").val("20");
    }else{
        $("#nodocu4").val("0");

    }
    

    var docuno1=parseInt($("#nodocu1").val());
    var docuno2=parseInt($("#nodocu2").val());
    var docuno3=parseInt($("#nodocu3").val());
    var docuno4=parseInt($("#nodocu4").val());
    var docuno5=parseInt($("#nodocu5").val());

var subdocu=docuno1+docuno2+docuno3+docuno4+docuno5;

console.log(subdocu);
    


$("#resuldocu").val(subdocu);
$("#resuldocuv").val(subdocu);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));



});




$("#docu5").change(function(){
    $("#totalnota").val("0");

    if( $('#docu5').prop('checked') ) {
        $("#nodocu5").val("20");
    }else{
        $("#nodocu5").val("0");

    }
    

    var docuno1=parseInt($("#nodocu1").val());
    var docuno2=parseInt($("#nodocu2").val());
    var docuno3=parseInt($("#nodocu3").val());
    var docuno4=parseInt($("#nodocu4").val());
    var docuno5=parseInt($("#nodocu5").val());

var subdocu=docuno1+docuno2+docuno3+docuno4+docuno5;

console.log(subdocu);
    


$("#resuldocu").val(subdocu);
$("#resuldocuv").val(subdocu);

var subcalidad=parseInt($("#resulcal").val());
var subsoporte=parseInt($("#resulsopor").val());
var subdocu=parseInt($("#resuldocu").val());

var totalnota=(subcalidad+subsoporte+subdocu)/3;
$("#totalnota").val(Math.round(totalnota,0));



});












/* funcion edición de botton */
function functionVerdatallecalidad(ideditaro){
 
    var idcalidad=ideditaro;
    console.log("id de callidad es "+idcalidad);







    var datos = new FormData();
        datos.append("idcalidad", idcalidad);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminCalidad.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
                     
                   
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);  
                        
                    
                        if (resul["cal_caln1"]>0) {calitem1="Cumplido 20%" }else{calitem1="Incumplido 0%"}
                        if (resul["cal_caln2"]>0) {calitem2="Cumplido 20%" }else{calitem2="Incumplido 0%"}
                        if (resul["cal_caln3"]>0) {calitem3="Cumplido 20%" }else{calitem3="Incumplido 0%"}
                        if (resul["cal_caln4"]>0) {calitem4="Cumplido 20%" }else{calitem4="Incumplido 0%"}
                        if (resul["cal_caln5"]>0) {calitem5="Cumplido 20%" }else{calitem5="Incumplido 0%"}


                        if (resul["cal_sopn1"]>0) {soportem1="Cumplido 20%" }else{soportem1="Incumplido 0%"}
                        if (resul["cal_sopn2"]>0) {soportem2="Cumplido 20%" }else{soportem2="Incumplido 0%"}
                        if (resul["cal_sopn3"]>0) {soportem3="Cumplido 20%" }else{soportem3="Incumplido 0%"}
                        if (resul["cal_sopn4"]>0) {soportem4="Cumplido 20%" }else{soportem4="Incumplido 0%"}
                        if (resul["cal_sopn5"]>0) {soportem5="Cumplido 20%" }else{soportem5="Incumplido 0%"}

                        if (resul["cal_docun1"]>0) {docutem1="Cumplido 20%" }else{docutem1="Incumplido 0%"}
                        if (resul["cal_docun2"]>0) {docutem2="Cumplido 20%" }else{docutem2="Incumplido 0%"}
                        if (resul["cal_docun3"]>0) {docutem3="Cumplido 20%" }else{docutem3="Incumplido 0%"}
                        if (resul["cal_docun4"]>0) {docutem4="Cumplido 20%" }else{docutem4="Incumplido 0%"}
                        if (resul["cal_docun5"]>0) {docutem5="Cumplido 20%" }else{docutem5="Incumplido 0%"}

       
                        var califiaciontotal=((parseInt(resul["cal_caltotal"])+parseInt(resul["cal_soptotal"])+parseInt(resul["cal_docutotal"]))/3).toFixed(2);




                        

                        $("#detallidreporte").html(resul["cal_nreporte"]);
                        $("#detallnombre").html(resul["nombres"]);
                        $("#detallfecha").html(resul["cal_fecha"]);
                        $("#detallTllamada").html(resul["cal_tiem"]+" Min");
                        $("#detallcaso").html(resul["cal_ncaso"]);
                        
                        $("#detacaliitem1").html(calitem1);
                        $("#detacaliitem2").html(calitem2);
                        $("#detacaliitem3").html(calitem3);
                        $("#detacaliitem4").html(calitem4);
                        $("#detacaliitem5").html(calitem5);

                        $("#detasoportem1").html(soportem1);
                        $("#detasoportem2").html(soportem2);
                        $("#detasoportem3").html(soportem3);
                        $("#detasoportem4").html(soportem4);
                        $("#detasoportem5").html(soportem5);

                        $("#detadocutem1").html(docutem1);
                        $("#detadocutem2").html(docutem2);
                        $("#detadocutem3").html(docutem3);
                        $("#detadocutem4").html(docutem4);
                        $("#detadocutem5").html(docutem5);
                        

                        $("#detacomentario").html("<div class='divcomentarios'> <span class='fw-bold'>Comentarios:</span> "+resul["cal_coment"]+"</div>");



                        $("#detasubcalidad").html(resul["cal_caltotal"]+"%");
                        $("#detasubsoporte").html(resul["cal_soptotal"]+"%");
                        $("#detasubdocu").html(resul["cal_docutotal"]+"%");
                        $("#detatotalcalidad").html(califiaciontotal+"%");

                        
                        
                        
                        

                        
                                                  
    
                            }
        
                    });











}








function graficosCategorias(){



      


    var stcalidad="graficacategorias";
    
    
    var datos = new FormData();
    datos.append("graficacategorias", stcalidad);



    $.ajax({
        url:"Vista/Modulos/ajax/ajax_adminCalidad.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){/* INCIO RESPUESTA */

if (respuesta=="sindatos") {
console.log("sin datos categorias");

$('#nuldatagraficacatego').html("no hay greficas para mostrar");
}else{



                var resul = $.parseJSON(respuesta);
       
                
                console.log(resul);  

            
                
                
                
                var prcentajecumplicali = resul["calidad"].toFixed(2);
                var prcentajeincuplicali = (100-prcentajecumplicali).toFixed(2);

                var prcentajecumplisopor = resul["soporte"].toFixed(2);
                var prcentajeincuplisopor = (100-prcentajecumplisopor).toFixed(2);

                var prcentajecumplidocu = resul["docu"].toFixed(2);
                var prcentajeincuplidocu = (100-prcentajecumplidocu).toFixed(2);





                console.log("Cantidad de notas "+ resul["cantnotas"]);

                console.log("Cumplimiento categoria calidad "+ prcentajecumplicali);

                console.log("Cumplimiento categoria soporte "+ prcentajecumplisopor);

                console.log("Cumplimiento categoria documentación "+ prcentajecumplidocu);

                $("#canttotalevalua").html(resul["cantnotas"]);


/* GRAFICO CALIDAD */

                                        Chart.register(ChartDataLabels);

                                    const data = {
                                        labels: [
                                            'Cumplimiento',
                                            'Incumplimiento'
                                            
                                        ],
                                        datasets: [{
                                            label: 'My First Dataset',
                                            data:[prcentajecumplicali,prcentajeincuplicali],
                                            backgroundColor: [
                                            '#71df3d',
                                            '#ff6f5e'
                                            
                                            ],
                                            hoverOffset: 4
                                        }]


                                        
                                        };
                                    

                                        const ctx = document.getElementById("graficocalidad")
                                    
                                        const myChart = new Chart(ctx, {
                                         type: 'pie',
                                            data: data,
                                            plugins: [ChartDataLabels],
                                            options: {

                                            responsive: true,
                                                plugins: {
                                                legend: {
                                                    display:false,
                                                    position: 'top',
                                                },
                                                title: {
                                                    display: true,
                                                    text: 'Calidad',
                                                },


                                                datalabels: {
                                            
                                                    formatter: function(value) {
                                                return value +' % ';
                                                
                                            },
                                            font: {
                                                weight: 'bold',
                                                size: 10,
                                            },

                                            color: [
                                                'white',    // color for data at index 0
                                                
                                            ]



                                        },
                                    

                                        tooltip: {
                                            enabled: true,
                                            callbacks: {
                                                
                                                label: (context)=>{
                                                    console.log(context.parsed)
                                                    console.log(context.label)
                                                    return context.label;
                                                    }
                                                    
                                                
                                                    }
                                                }
                                
                                        


                                                }
                                            },

                                    

                                        });
                                    

/* GRAFICO CALIDAD */








/* GRAFICO SOPORTE */

Chart.register(ChartDataLabels);

const data2 = {
    labels: [
        'Cumplimiento',
        'Incumplimiento'
        
    ],
    datasets: [{
        label: 'My First Dataset',
        data:[prcentajecumplisopor,prcentajeincuplisopor],
        backgroundColor: [
        '#71df3d',
        '#ff6f5e'
        
        ],
        hoverOffset: 4
    }]


    
    };


    const ctx2 = document.getElementById("grafisoporte")

    const myChart2 = new Chart(ctx2, {
     type: 'pie',
        data: data2,
        plugins: [ChartDataLabels],
        options: {

        responsive: true,
            plugins: {
            legend: {
                display:false,
                position: 'top',
            },
            title: {
                display: true,
                text: 'Soporte',
            },


            datalabels: {
        
                formatter: function(value) {
            return value +' % ';
            
        },
        font: {
            weight: 'bold',
            size: 10,
        },

        color: [
            'white',    // color for data at index 0
            
        ]



    },


    tooltip: {
        enabled: true,
        callbacks: {
            
            label: (context)=>{
                console.log(context.parsed)
                console.log(context.label)
                return context.label;
                }
                
            
                }
            }

    


            }
        },



    });


/* GRAFICO SOPORTE */



/* GRAFICO DOCUMENTACION */

Chart.register(ChartDataLabels);

const data3 = {
    labels: [
        'Cumplimiento',
        'Incumplimiento'
        
    ],
    datasets: [{
        label: 'My First Dataset',
        data:[prcentajecumplidocu, prcentajeincuplidocu],
        backgroundColor: [
        '#71df3d',
        '#ff6f5e'
        
        ],
        hoverOffset: 4
    }]


    
    };


    const ctx3 = document.getElementById("grafidocumentacion")

    const myChart3 = new Chart(ctx3, {
     type: 'pie',
        data: data3,
        plugins: [ChartDataLabels],
        options: {

        responsive: true,
            plugins: {
            legend: {
                display:false,
                position: 'top',
            },
            title: {
                display: true,
                text: 'Documentación',
            },


            datalabels: {
        
                formatter: function(value) {
            return value +' % ';
            
        },
        font: {
            weight: 'bold',
            size: 10,
        },

        color: [
            'white',    // color for data at index 0
            
        ]



    },


    tooltip: {
        enabled: true,
        callbacks: {
            
            label: (context)=>{
                console.log(context.parsed)
                console.log(context.label)
                return context.label;
                }
                
            
                }
            }

    


            }
        },



    });


/* GRAFICO DOCUMENTACION */


};





























                  
       
                    } 


            });
   

}














function generatePdf() {

    window.jsPDF = window.jspdf.jsPDF;
    html2canvas(document.querySelector("#imprmidiv")).then(canvas => {  	
        var dataURL = canvas.toDataURL();    
        var pdf = new jsPDF();
        pdf.addImage(dataURL, 'JPEG', 4, 20); //addImage(image, format, x-coordinate, y-coordinate, width, height)
        pdf.save("Reporte Invividual.pdf");
});
}