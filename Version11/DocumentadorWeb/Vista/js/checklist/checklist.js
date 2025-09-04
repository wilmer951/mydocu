
// FUNCIONES PARA MOSTRAR DIV OCULTOS EN CHECKLIST

$("#search").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#table tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});




$(document).ready(function(){
    
    $("#info1").click(function(){
    if($('#divinfo1').css('display') == 'none'){ 
   $('#divinfo1').show('slow'); 
	} else { $('#divinfo1').hide('slow'); }

		});

$("#info2").click(function(){
    if($('#divinfo2').css('display') == 'none'){ 
   $('#divinfo2').show('slow'); 
	} else { $('#divinfo2').hide('slow'); }

		});



$("#info3").click(function(){
    if($('#divinfo3').css('display') == 'none'){ 
   $('#divinfo3').show('slow'); 
	} else { $('#divinfo3').hide('slow'); }

		});

$("#info4").click(function(){
    if($('#divinfo4').css('display') == 'none'){ 
   $('#divinfo4').show('slow'); 
	} else { $('#divinfo4').hide('slow'); }

		});


$("#info5").click(function(){
    if($('#divinfo5').css('display') == 'none'){ 
   $('#divinfo5').show('slow'); 
	} else { $('#divinfo5').hide('slow'); }

		});


$("#info6").click(function(){
    if($('#divinfo6').css('display') == 'none'){ 
   $('#divinfo6').show('slow'); 
	} else { $('#divinfo6').hide('slow'); }

		});



$("#info7").click(function(){
    if($('#divinfo7').css('display') == 'none'){ 
   $('#divinfo7').show('slow'); 
	} else { $('#divinfo7').hide('slow'); }

		});


$("#info8").click(function(){
    if($('#divinfo8').css('display') == 'none'){ 
   $('#divinfo8').show('slow'); 
	} else { $('#divinfo8').hide('slow'); }

		});


$("#info9").click(function(){
    if($('#divinfo9').css('display') == 'none'){ 
   $('#divinfo9').show('slow'); 
	} else { $('#divinfo9').hide('slow'); }

		});



$("#info11").click(function(){
    if($('#divinfo11').css('display') == 'none'){ 
   $('#divinfo11').show('slow'); 
     } else { $('#divinfo11').hide('slow'); }

          });


});





// FUNCIONES PARA MOSTRAR DIV OCULTOS EN CHECKLIST





// FUNCIONES PARA CAMBIAR ESTADO.


$("#resulitem1").change(function(){

     var estado=$("#resulitem1").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador1').css('background-color', 'green');
        }else {
      $('#idindicador1').css('background-color', 'red');
    }     
});


$("#resulitem2").change(function(){

     var estado=$("#resulitem2").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador2').css('background-color', 'green');
        }else {
      $('#idindicador2').css('background-color', 'red');
    }     
});


$("#resulitem3").change(function(){

     var estado=$("#resulitem3").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador3').css('background-color', 'green');
        }else {
      $('#idindicador3').css('background-color', 'red');
    }     
});

$("#resulitem4").change(function(){

     var estado=$("#resulitem4").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador4').css('background-color', 'green');
        }else {
      $('#idindicador4').css('background-color', 'red');
    }     
});


$("#resulitem5").change(function(){

     var estado=$("#resulitem5").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador5').css('background-color', 'green');
        }else {
      $('#idindicador5').css('background-color', 'red');
    }     
});


$("#resulitem6").change(function(){

     var estado=$("#resulitem6").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador6').css('background-color', 'green');
        }else {
      $('#idindicador6').css('background-color', 'red');
    }     
});

$("#resulitem7").change(function(){

     var estado=$("#resulitem7").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador7').css('background-color', 'green');
        }else {
      $('#idindicador7').css('background-color', 'red');
    }     
});


$("#resulitem8").change(function(){

     var estado=$("#resulitem8").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador8').css('background-color', 'green');
        }else {
      $('#idindicador8').css('background-color', 'red');
    }     
});


$("#resulitem9").change(function(){

     var estado=$("#resulitem9").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador9').css('background-color', 'green');
        }else {
      $('#idindicador9').css('background-color', 'red');
    }     
});


$("#resulitem11").change(function(){

     var estado=$("#resulitem11").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador11').css('background-color', 'green');
        }else {
      $('#idindicador11').css('background-color', 'red');
    }     
});




$("#resulitem12").change(function(){

     var estado=$("#resulitem12").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicador12').css('background-color', 'green');
        }else {
      $('#idindicador12').css('background-color', 'red');
    }     
});





$("#resulitemst").change(function(){

     var estado=$("#resulitemst").val(); 
     console.log(estado);

     if(estado!=""){
          $('#idindicadorfin').css('background-color', 'green');
        }else {
      $('#idindicadorfin').css('background-color', 'red');
    }     
});





/////////////////////////////////////////////////////////////////////// FUNCION ACEPTACION DE TERMINOS  ////////////////////////////////////////////////////////////



