

// Funcion validación de formulario de registro.



function validarformregis(){
var primernombre=$("#pnombrereg").val();
var segundonombre=$("#snombrereg").val();
var primerapellido=$("#papellidoreg").val();
var segundoapellido=$("#sapellidoreg").val();
var correo=$("#correoreg").val();
var genero = $('input:radio[name=generoreg]:checked').val();
var area=$("#areareg").val();
var std;





if (primernombre=='') {

$("#pnombrereg").addClass("is-invalid");
$("#pnombrereg").attr("placeholder", "Campo vacio o invalido");
std=1;


}else{
$("#pnombrereg").removeClass("is-invalid");
$("#pnombrereg").addClass("is-valid");

}





if (primerapellido=='') {

$("#papellidoreg").addClass("is-invalid");
$("#papellidoreg").attr("placeholder", "Campo vacio o invalido");
std=1;


}else{
$("#papellidoreg").removeClass("is-invalid");
$("#papellidoreg").addClass("is-valid");

}






if (correo=='') {

$("#correoreg").addClass("is-invalid");
$("#correoreg").attr("placeholder", "Campo vacio o invalido");
std=1;


}else{
$("#correoreg").removeClass("is-invalid");
$("#correoreg").addClass("is-valid");

}


if (genero == undefined) {

$("#generomreg").addClass("is-invalid");
$("#generofreg").addClass("is-invalid");
std=1;

}else{

$("#generomreg").addClass("is-valid");
$("#generofreg").addClass("is-valid");
}

if (area == '') {

$("#areareg").addClass("is-invalid");

std=1;


}else{

$("#areareg").addClass("is-valid");

}



if (std==1) {
	return false;
}else{

	return true;
}









}


// VAlidación de formulario de registro.