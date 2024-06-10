

$("#checkMTOP").change(function(){

console.log("Ha seleccionado MTOP");


$(".divcheckMtop").css('display','block');
$(".divcheckMSO").css('display','none');
$(".divcheckCamara").css('display','none');
$("#divcopicheckPlantilla").html("");
$("#inputSolucion").css('display','block');






});


$("#checkMSO").change(function(){

    console.log("Ha seleccionado MSO");

        $(".divcheckMSO").css('display','block');    
        $(".divcheckMtop").css('display','none'); 
        $(".divcheckCamara").css('display','none');
     $("#divcopicheckPlantilla").html("");
     
     $("#inputSolucion").css('display','block');








    });




    



    $("#checkCamara").change(function(){

        console.log("Ha seleccionado camara");


        $(".divcheckCamara").css('display','block');
        $(".divcheckMSO").css('display','none');    
        $(".divcheckMtop").css('display','none'); 
  
        $("#divcopicheckPlantilla").html("");
        

        $("#inputSolucion").css('display','block');


        });
        





        $("#btnchecksoluplanEis").change(function(){

            if( $('#btnchecksoluplanEis').prop('checked') ) {
                var solucion="Luego de realizar estas validaciones se evidencia funcionamiento de los dispositivos"
                console.log("caso cnn soución");
                $("#labelchecksolucion").html("Solucionado.");

                $("#divocultocontacto").css('display','none');
    


                
            }else{
                console.log("caso sin soución");
                var solucion="Luego de realizar estas validaciones se evidencia que la falla continua, se escala el caso para su revisión."
                $("#labelchecksolucion").html("Sin solución.");

                $("#divocultocontacto").css('display','block');
            }
    

    
            });
            







    $("#btngenearPlatCheckEis").click(function() {





        
        
        var getdispositivo=  $('input:radio[name=radio]:checked').val();
        console.log("accion para "+getdispositivo);






      
        if( $('#itmemtop1').prop('checked') ) {
            var chckEisdispoMtop1="Se realiza reinicio de servicios de licencia y MorphoTop. \n";
        }else{

            var chckEisdispoMtop1="";
        }



        if( $('#itmemtop2').prop('checked') ) {
            console.log("seleccion2");
            var chckEisdispoMtop2="Se realiza reconexión de dispositivo MorphoTop. \n";
        }else{

            var chckEisdispoMtop2="";
        }








        if( $('#itmemtop3').prop('checked') ) {
            var chckEisdispoMtop3="Se elimina en el administrador de dispositivos todo el hardware que no se encuentra conectado. \n";
        }else{

            var chckEisdispoMtop3="";
        }



        if( $('#itmemtop4').prop('checked') ) {
            var chckEisdispoMtop4="Se revisa que el dispositivo esté conectado en un puerto USB 3. \n";
        }else{

            var chckEisdispoMtop4="";
        }



        if( $('#itmemtop5').prop('checked') ) {
            var chckEisdispoMtop5="Se revisa que en el administrador de dispositivos que el MSO y Morpho top se visualice sin ningún tipo de error. \n";
        }else{

            var chckEisdispoMtop5="";
        }



        if( $('#itmemtop6').prop('checked') ) {
            var chckEisdispoMtop6="Se revisa que el perfil de energia se encuentre en máximo rendimiento. \n";
        }else{

            var chckEisdispoMtop6="";
        }



        if( $('#itmemtop7').prop('checked') ) {
            var chckEisdispoMtop7="Se valida que la licencia se encuentre instalada en la aplicación UI Multiprotect License Manager. \n";
        }else{

            var chckEisdispoMtop7="";
        }



        if( $('#itmemtop8').prop('checked') ) {
            var chckEisdispoMtop8="Se valida que el Mtop sea reconocido en la aplicación 'GUI' Multiprotect License Manager (VERIF). \n";
        }else{

            var chckEisdispoMtop8="";
        }





                if ($('#itmemtop9').val().length > 0) {
                    console.log($('#itmemtop9').val());
                    var chckEisdispoMtop9 = $('#itmemtop9').val()+"\n";
                    
                }else {
                    var chckEisdispoMtop9 = "";

                }



        

    


            var arraycheckEisMtop=[chckEisdispoMtop1,chckEisdispoMtop2,chckEisdispoMtop3,chckEisdispoMtop4,chckEisdispoMtop5,chckEisdispoMtop6,chckEisdispoMtop7,chckEisdispoMtop8,chckEisdispoMtop9];
            console.log(arraycheckEisMtop);








            


            if( $('#itmemso1').prop('checked') ) {
                
                var chckEisdispoMso1="Se elimina en el administrador de dispositivos todo el hardware que no se encuentra conectad. \n";
            }else{
    
                var chckEisdispoMso1="";
            }
    



            
            if( $('#itmemso2').prop('checked') ) {
                
                var chckEisdispoMso2="Se revisa dispositivo este conectado. \n";
            }else{
    
                var chckEisdispoMso2="";
            }
    


            
            if( $('#itmemso3').prop('checked') ) {
                
                var chckEisdispoMso3="Se revisa en el administrador de dispositivos que el MSO y Morpho top se visualice sin ningún tipo de error. \n";
            }else{
    
                var chckEisdispoMso3="";
            }
    


            
            if( $('#itmemso4').prop('checked') ) {
                
                var chckEisdispoMso4="Se valida que el certificado Certificate Entity SDI. \n";
            }else{
    
                var chckEisdispoMso4="";
            }
    


            
            if( $('#itmemso5').prop('checked') ) {
                
                var chckEisdispoMso5="Se valida que en el  Multiprotect License Manager se visualiza el MSO. \n";
            }else{
    
                var chckEisdispoMso5="";
            }
    



            
            if( $('#itmemso6').prop('checked') ) {
                
                var chckEisdispoMso6="Se ejecuta el patch 2. \n";
            }else{
    
                var chckEisdispoMso6="";
            }
    


            if ($('#itmemoo7').val().length > 0) {
                console.log($('#itmemoo7').val());
                var chckEisdispoMso7 = $('#itmemoo7').val()+"\n";
                
            }else {
                var chckEisdispoMso7 = "";

            }








         
            
            
            
            
            
            
    
    
            var arraycheckEisMso=[chckEisdispoMso1,chckEisdispoMso2,chckEisdispoMso3,chckEisdispoMso4,chckEisdispoMso5,chckEisdispoMso6,chckEisdispoMso7];

        


            if( $('#itmecam1').prop('checked') ) {
                
                var chckEisdispoCam1="Se valida la versión de chrome. \n ";
            }else{
    
                var chckEisdispoCam1="";
            }


            if( $('#itmecam2').prop('checked') ) {
                
                var chckEisdispoCam2="Se desconecta la cámara web del equipo. \n";
            }else{
    
                var chckEisdispoCam2="";
            }



            if( $('#itmecam3').prop('checked') ) {
                
                var chckEisdispoCam3="Se elimina en el administrador de dispositivos todo el hardware que no se encuentran conectado. \n";
            }else{
    
                var chckEisdispoCam3="";
            }


            if( $('#itmecam4').prop('checked') ) {
                
                var chckEisdispoCam4="Se reinicia el equipo. \n";
            }else{
    
                var chckEisdispoCam4="";
            }



            if( $('#itmecam5').prop('checked') ) {
                
                var chckEisdispoCam5="Se conecta la cámara web. \n";
            }else{
    
                var chckEisdispoCam5="";
            }



            if( $('#itmecam6').prop('checked') ) {
                
                var chckEisdispoCam6="Se valida en el administrador de dispositivos que se haya instalado correctamente la cámara, Mtop, Mso. \n";
            }else{
    
                var chckEisdispoCam6="";
            }
    


            if( $('#itmecam7').prop('checked') ) {
                
                var chckEisdispoCam7="Se realiza instalación de EIS_install según tipo de estación. \n";
            }else{
    
                var chckEisdispoCam7="";
            }
    


            if( $('#itmecam9').prop('checked') ) {
                
                var chckEisdispoCam9="Se realiza reinstalación driver de camara. \n";
            }else{
    
                var chckEisdispoCam9="";
            }
    







            if ($('#itmecam8').val().length > 0) {
                console.log($('#itmecam8').val());
                var chckEisdispoCam8 = $('#itmecam8').val()+"\n";
                
            }else {
                var chckEisdispoCam8 = "";

            }










            
            
            
            
            
            
            


            var arraycheckEisCam=[chckEisdispoCam1,chckEisdispoCam2,chckEisdispoCam3,chckEisdispoCam4,chckEisdispoCam5,chckEisdispoCam6,chckEisdispoCam7,chckEisdispoCam8,chckEisdispoCam9];

 
        

   
            $("#divcopicheckPlantilla").html("");
            
            
            var ip =$("#checEISip").val();
            var model= $("#checEISmodel").val();




            if( $('#btnchecksoluplanEis').prop('checked') ) {
                

                
                var solucion="Luego de realizar estas validaciones se evidencia funcionamiento de los dispositivos."
                
                
                
            }else{
                
                var solucion="Luego de realizar estas validaciones se evidencia que la falla continua, se escala el caso para su revisión."
                var contacto ="Numero celular de contacto: "+$("#checEISCel").val();
            }
    



            if (ip==""||model=="") {


                $("#divocultocopyplantilla").css('display','none');
                
                Swal.fire({
                    title: "<strong>Debes diligenciar todos los campos</strong>",
                    text: "IP - Modelo",
                    icon: "info",
                 })
            }else{

                


                setTimeout(function() {
                    $("#mensajealertaexitoso").fadeOut(1000);
                },3000);

             
             
                setTimeout(function() {
                    $("#mensajealertaexitoso").fadeIn(1000);
                },10);
                
           







               
         

              

                $("#idloader").css('display','none');
                $("#divocultocopyplantilla").css('display','block');
                
                $("#divcopicheckPlantilla").addClass("blur-in");



            $("#divcopicheckPlantilla").append("Se realizan las siguientes validaciones: \n \n");
            $("#divcopicheckPlantilla").append("Dirección IP: "+ip+".\n");
            $("#divcopicheckPlantilla").append("Modelo de equipo: "+model+".\n\n");
            
       
            
            
            





                if (getdispositivo=="1") {


                    for (let index = 0; index < arraycheckEisMtop.length; index++) {
                        const element = arraycheckEisMtop[index];
                        $("#divcopicheckPlantilla").append(arraycheckEisMtop[index]);
                       }


                }else if (getdispositivo=="2") {
                    

                    for (let index = 0; index < arraycheckEisMso.length; index++) {
                        const element = arraycheckEisMso[index];
                        $("#divcopicheckPlantilla").append(arraycheckEisMso[index]);
                       }


                       

                }else if (getdispositivo=="3") {
                    


                    for (let index = 0; index < arraycheckEisCam.length; index++) {
                        const element = arraycheckEisCam[index];
                        $("#divcopicheckPlantilla").append(arraycheckEisCam[index]);
                       }

                }






            
    

       
       
       
       
       
       $("#divcopicheckPlantilla").append(solucion+"\n"); /* GENERAL */
     $("#divcopicheckPlantilla").append(contacto);

          
 
    

}
         });
        


        





















         $("fomrcheckEis").submit(function(e){

            e.preventDefault();
           
       
        });

















        $("#btnlimpiarPlatCheckEis").click(function() {

            $('#fomrcheckEis')[0].reset()

            $("#idloader").css('display','block');
            $("#divocultocopyplantilla").css('display','none');


            $(".divcheckMtop").css('display','none');
            $(".divcheckMSO").css('display','none');
            $(".divcheckCamara").css('display','none');
            $("#inputSolucion").css('display','none');



        });






  