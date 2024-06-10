$("#notas").change(function(){
    var notas = $("#notas").val();

	

	console.log(notas.includes("'"));

	if (notas.includes("'")==true) {
		console.log("Caracter no permitido");

		$("#divcacternopermitido").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Caracteres no permitidos(comilla simple)<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>')

	}else{


		$("#divcacternopermitido").html("");

    var datos = new FormData();
	datos.append("notas", notas);
	
	$.ajax({
		url:"Vista/Modulos/ajax/ajax_notas.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){



			if (respuesta!="success") {
				$("#modalreconexion").modal("show");
													  
			}else{}




		}


	});

}/* cierre corchete caracter no permitido*/
});



function autoguardadoNotas(){
    var notas = $("#notas").val();



    var datos = new FormData();
	datos.append("notas", notas);
	
	$.ajax({
		url:"Vista/Modulos/ajax/ajax_notas.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){



			if (respuesta=="success") {
				console.log("autoguardado de notas exitoso");
													  
			}




		}


	});

    
};
    
    
    
    