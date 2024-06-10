
    
    function repetirPeticionAlertLogin(){

    
    
        var tiempopausa=$("#tiempo").val();
        var mls=tiempopausa*60000;
    
    
        console.log("Tiempo apertura alerta login: milsegundos - "+mls+" Minutos -"+tiempopausa);
    
        setInterval(consulMsgAlert,+mls);  //600000  60000se repetira cada 10 minutos.
    
    }
    
    
    
    function consulMsgAlert(){


console.log("Se va a ejecutar la consulta de alertas");
    var conmsg = "yes";

    var datos = new FormData();
	datos.append("conmsg", conmsg);

	
	$.ajax({
		url:"Vista/Modulos/ajax/ajax_msgalert.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){

            var resulalert = $.parseJSON(respuesta);
            console.log("Resultaso mesange login"+resulalert);

            if(resulalert['alertst']!='none'){
            $("#imgalertmsg").attr('src','Vista/Imagenes/imgAlert/'+resulalert["img"]);
            $("#modalmsgalert").modal("show");

            
                }
         

        }



	});

}



    $("#btnconfirmarlectura").click(function(){

			
        var conflect = "oklectura";
        

            var datos = new FormData();
            datos.append("conflect", conflect);


            $.ajax({
                url:"Vista/Modulos/ajax/ajax_msgalert.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
                    console.log(respuesta);
                }

            });



});




        


 
