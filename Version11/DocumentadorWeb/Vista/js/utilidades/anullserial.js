$("#btnconserialt").click(function(){
var oficina=$("#conserialt").val();
console.log(oficina);


if (oficina=='') {

alert("campos vacios");

}else{

$("#queryconestado").html("select * from cupo where atroficina = '"+oficina+"' and doctipo = 'N' and estado = 'T'");
$("#btncopycons").css('display','block');	
}



});















$("#btndelserialt").click(function(){
var oficina=$("#delserialt").val();


if (oficina=='') {

alert("campos vacios");
}else{


$("#querydeleteserial").html("delete cupo where atroficina = '"+oficina+"' and doctipo = 'N' and estado = 'T'");
$("#btncopydelete").css('display','block');

}


});




$("#btnqueryinsert").click(function(){


 $("#queryinsercupo").html("");

		var oficina=$("#codoficina").val();
		var tiporcx=$("#tiporcx").val();
		var listcupos=$("#listcupos").val();
		var fecha=$("#fechaasig").val();

if (oficina==''||tiporcx=='' ||listcupos==''||fecha=='') {

			alert('todos los campos deben ser diligenciados');

}else{


				var res = listcupos.split(",");
				



				for (var i = 0; i < res.length; i++) {

				      $("#queryinsercupo").append("insert into cupo values ('"+tiporcx+"', '"+res[i]+"', '"+oficina+"', '0', '"+oficina+"', '"+fecha+"', '"+fecha+"', '"+res[i]+"', 'A', NULL, NULL); ");
				      
				}


				$("#btncopyinsert").css('display','block');


}


});







$("#btnquerycon").click(function(){


 $("#queryconcupo").html("");

		var oficina=$("#codoficinacon").val();
		var tiporcx=$("#tiporcxcon").val();
		var listcupos=$("#listcuposcon").val();
		

if (oficina==''||tiporcx=='' ||listcupos=='') {

			alert('todos los campos deben ser diligenciados');

}else{


				var res = listcupos.split(",");
				

				$("#queryconcupo").html("select * from cupo where atroficina= '"+oficina+"' and doctipo ='"+tiporcx+"' and serialprimer in ('0'");

				for (var i = 0; i < res.length; i++) {

					

				      $("#queryconcupo").append(",'"+res[i]+"'");
				      
				      
				}

				$("#queryconcupo").append(");")

				$("#btncopycon").css('display','block');


}


});


 