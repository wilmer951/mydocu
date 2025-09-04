

///////////////////////////////////////////// FUNCION REPETICION DE PETICIONES INICIO  ///////////////////////////////////////////



function repetirPeticionPausaactiva(){

    
    
    var tiempopausa=$("#tiempo").val();
    var mls=tiempopausa*60000;


    console.log("Tiempo apertura alerta pausas activas: milsegundos - "+mls+" Minutos -"+tiempopausa);

    setInterval(consulMsgPausaActiva,+mls);  //600000  60000se repetira cada 10 minutos.

}

///////////////////////////////////////////// FUNCION REPETICION DE PETICIONES INICIO  ///////////////////////////////////////////





////////////////////////////////////// FUNCION PROGRAMACION DE ALERTA PAUSAS ACTIVAS INICIO ///////////////////////////////////////////

function consulMsgPausaActiva(){
    
  

    var estadoMSGPausaactiva = 1;
    
    var datos = new FormData();
  
    datos.append("controlMSGPausaactiva", estadoMSGPausaactiva);
    
    

	
	$.ajax({
		url:"Vista/Modulos/ajax/ajax_mspausaactiva.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){


            var resulalert2 = $.parseJSON(respuesta);
            
            console.log("Estado alerta: "+resulalert2[2]); 
          

            
// obtneer de tabla control estado de alerta pausas activas
            var estadoidmsgpausactivae=resulalert2[0];  //variable tabla de control 0 inactivo 1 activo
            var idmsgpausactivae =1; // variable tabla alertas trae el id de de la alerta

// obtneer de tabla control estado de alerta cambio de diademas
            var estadoidmsgcambiodiadema=resulalert2[1]; //variable tabla de control 0 inactivo 1 activo
            var idmsgcambiodiadema=2; // variable tabla alertas trae el id de de la alerta

            
            
// obtneer de tabla control estado de alerta cambio de accesorios            
            var estadoidmsgaccesorios=resulalert2[2];   //variable tabla de control 0 inactivo 1 activo
            var idmsgcambioacceosorios=3; // variable tabla alertas trae el id de de la alerta


console.log("Dias cambio accesorios 1: "+resulalert2[3]);
console.log("Dias cambio accesorios 2: "+resulalert2[4]);
            
        
                                     if (estadoidmsgpausactivae===1) {
                                                
                                        llamadoMsgPausasActivas(idmsgpausactivae);
        
                                        } 
        
        
        
                                        if (estadoidmsgcambiodiadema===1) {
                                                
                                            llamadoMsgPausasActivas(idmsgcambiodiadema);
            
                                            }


                                            if (estadoidmsgaccesorios===1) {
                                                
                                                llamadoMsgPausasActivas(idmsgcambioacceosorios);
                
                                                }














       

                  

             
                }   


                
            
    
        });










/*


    





*/

}

////////////////////////////////////// FUNCION PROGRAMACION DE ALERTA PAUSAS ACTIVAS FIN ///////////////////////////////////////////








/////////////////////////////////////////////////////////////////////// OPTENCIÓN DE ANUNCIO PAUSAS ACTIVAS  INICIO ////////////////////////////////////////////////////////////


function llamadoMsgPausasActivas(idmsgpausactivar){


    var idmsgpausactiva = idmsgpausactivar;// varkalbe id alerta.
    
    var datos = new FormData();
  
    datos.append("idmsgpausactiva", idmsgpausactiva);
    
    

	
	$.ajax({
		url:"Vista/Modulos/ajax/ajax_mspausaactiva.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){

            var resulalert2 = $.parseJSON(respuesta);

                            var estadoalert=resulalert2[6];
            
                                    if (estadoalert==1) {

                                        var version=Math.random();

                                        console.log(resulalert2);
                                        var idalert=resulalert2[0];
                                        var titulo=resulalert2[3];
                                        var mensaje=resulalert2[4];
                                        var imagen=resulalert2[5];
                                        

                                        $("#idmsgpa").val(idalert);
                                        $("#titlemsgpac").html(titulo);
                                        $("#msgmsgpac").html(mensaje);
                                        document.getElementById("imgmsgpac").src="Vista/Imagenes/pausaactivas/"+imagen+"?v="+version;
                                        $("#verinstructivo").html("<a href=javascript:ventanaSecundaria9('index.php?ir=viewpausaactiva&idinstr="+idalert+"')>Ver instructivo</a>");
                                        $("#pausasactivasalert").modal("show");

                                      
                                        if (idalert==="1" || idalert==="2") {
                                            
                                            $("#divcontenidomsg2").hide();
                                            $("#divcontenidomsg1").show();
                                        }else if (idalert==="3") {
                                            
                                            $("#divcontenidomsg1").hide();
                                            $("#divcontenidomsg2").show();
                                        }
                       

                                    }

            

                    }

                

            
    
        });

}


/////////////////////////////////////////////////////////////////////// OPTENCIÓN DE ANUNCIO PAUSAS ACTIVAS  FIN ////////////////////////////////////////////////////////////






/////////////////////////////////////////////////////////////////////// CONFIRMACIOÓN DE ACTIVIDAD INICIO  ////////////////////////////////////////////////////////////



function btnconfirmarmsgPausaActiva(btnconfirmar){


    var idAlerPausaActiva =  $("#idmsgpa").val(); //variable id alerta
    var btnconfirma = btnconfirmar;  // variable  valor confirmación de alerta
    
        

                        var datos = new FormData();
                        
                        datos.append("idAlerPausaActiva", idAlerPausaActiva);
                        datos.append("btnconfirma", btnconfirma);
                        
                        
                        
                        
                        $.ajax({
                            url:"Vista/Modulos/ajax/ajax_mspausaactiva.php",
                            method:"POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success:function(respuesta){
                                console.log("Guardadode pausaactiva: "+respuesta);


                                            if (respuesta!="success") {
                                                Swal.fire({
                                                    icon: "error",
                                                text: "error al guardar datos.",
                                                })
                                            }


                            }
                        
                        });
                        




}

/////////////////////////////////////////////////////////////////////// CONFIRMACIOÓN DE ACTIVIDAD FIN  ////////////////////////////////////////////////////////////


function btnconfirmarmsgAccesorios(btnconfirmar){
    
    window.open("index.php?ir=viewaccesorios","ventana11","width=400,height=700,scrollbars=NO");
    $("#pausasactivasalert").modal('hide');

    
    

}


