function changuePass(){

	
		
	var password = $("#namepasseditar").val();
	var password2 = $("#namepasseditar2").val();



	/* VALIDAR USUARIO */



	/* VALIDAR PASSWORD */

	

		
		if(password!=password2){

					

			
			$("label[for='exampleInputPassword1']").text("Contraseñas no coincide.");

			return false;
		}

	


	
return true;

}
