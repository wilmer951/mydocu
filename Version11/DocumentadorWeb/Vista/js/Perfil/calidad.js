function consultarCalidad(){


    var consulCalidad = "consCalidad";
        

    var datos = new FormData();
    datos.append("consulCalidad", consulCalidad);

    $('#idresulCalid').html("");
    $.ajax({
        url:"Vista/Modulos/ajax/ajax_perfil.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){
            
            var resulcalidad = $.parseJSON(respuesta);
            var conteodenotas=resulcalidad.length;
            console.log("total notas obtenidas "+conteodenotas);
            console.log(resulcalidad);
            var totalpromedio=0;
            var sumadenotas=0;
            
            var keyCount  = Object.keys(resulcalidad).length;
            console.log("cantidad de notas" + keyCount);

            var count=1;

            

            for (let index = 0; index <  resulcalidad.length; index++) {

                var idreportenota=resulcalidad[index]["cal_nreporte"];

                
                
                var nota1=parseInt(resulcalidad[index]["cal_caltotal"]);
                var nota2=parseInt(resulcalidad[index]["cal_soptotal"]);
                var nota3=parseInt(resulcalidad[index]["cal_docutotal"]);
                var subnota=Math.round((nota1+nota2+nota3)/3);
                
                data='<tr><td scope="col">'+count+
                '</td><td scope="col">'+resulcalidad[index]["cal_fecha"]+
                '</td><td scope="col">%'+nota1+
                '</td><td scope="col">%'+nota2+
                '</td><td scope="col">%'+nota3+
                '</td><td scope="col">%'+subnota+
                /*'</td><td scope="col"> '+resulcalidad[index]["cal_coment"]+'</td></tr>';*/

                '</td><td scope="col"><button type="button" class="btn btn-outline-warning btnutili btn-sm" data-bs-toggle="modal" data-bs-target="#modalverdetalle" onclick="functionVerdatallecalidad(\''+idreportenota+'\');">ver</button></td></tr>';
                
                $('#idresulCalid').append(data);

                sumadenotas=sumadenotas+subnota;

                totalpromedio= Math.round((sumadenotas/keyCount),2);


                count++;
              
                        
            }



            console.log("tota promedio "+totalpromedio);
            $('#promediototalcalidad').html(totalpromedio+"%");
            
                                    
                    if (conteodenotas>0) {
                        
                    

                                if (totalpromedio>=95) {
                                    $('#notaalusivacalidad').html("Excelente trabajo continua así");
                                    $("#imgnotacalidad").attr("src","Vista/Imagenes/carafeliz.png");
                                }else if (totalpromedio>=90 && totalpromedio<95){

                                    $('#notaalusivacalidad').html("Vas bien pero aun puedes mejorar.");
                                    $("#imgnotacalidad").attr("src","Vista/Imagenes/caragino.png");
                                }else if (totalpromedio<90){

                                    $('#notaalusivacalidad').html("Algo no anda bien, debes tomar las acciones pertinentes.");
                                    $("#imgnotacalidad").attr("src","Vista/Imagenes/caratriste.png");
                                }
                                
                            }else{

                                    $('#notaalusivacalidad').html("No se han cargado tus notas, consulta mas tarde..");
                                    $("#imgnotacalidad").attr("src","");
                                }

                                


        }


    });

    

    


}




function functionVerdatallecalidad(idreport){

    var idcalidad=idreport;
    console.log("id de callidad es "+idcalidad);







    var datos = new FormData();
        datos.append("idcalidad", idcalidad);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_perfil.php",
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