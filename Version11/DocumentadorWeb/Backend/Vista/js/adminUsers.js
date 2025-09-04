function functionresetpass(ideditaro){

	var idusu=ideditaro;
	
	
$('input[name="idrsetpas"]').val(idusu);

}



function functionBorrarusu(idborrado){

	var str=idborrado;
$('input[name="idusuborrado"]').val(str);


}




/* funcion edición de botton */
function functionEditarUser(ideditaro){

	var ideditar=ideditaro;
    $('input[name="idEditar"]').val(ideditar);
    

    var datos = new FormData();
        datos.append("ideditar", ideditar);
    
     $.ajax({
                url:"Vista/Modulos/ajax/Ajax_adminUsers.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
                     

					var resul = $.parseJSON(respuesta);
					console.log(respuesta);
					$('input[name="idusrEditar"]').val(resul["id"]);
					$('input[name="userEditar"]').val(resul["usuario"]);
					$('input[name="nomeditaruser"]').val(resul["nombres"]);
					$('#perfilEditar > option[value="'+resul["perfil"]+'"]').attr('selected','selected');
					$('#rolEditar > option[value="'+resul["rol"]+'"]').attr('selected','selected');
					$('#estadoEditar > option[value="'+resul["estado"]+'"]').attr('selected','selected');

					

    
                            }
        
                    });

}

