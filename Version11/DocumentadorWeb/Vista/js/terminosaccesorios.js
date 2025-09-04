





$("#btnconfiryacess").attr('disabled', 'disabled');



/*  CONTROL ACEPTACIÓN DE TERMINOS */
$("#terminosentrega").change(function() {

    var accesorio1 =  $("#accesorio1").prop('checked'); // varible acceosrio 1 
    var accesorio2 =  $("#accesorio2").prop('checked');
    var terminos =  $("#terminosentrega").prop('checked');

if (terminos==false) {

    $("#btnconfiryacess").attr('disabled', true);
    $("#accesorio1").prop("checked", false);
    $("#accesorio2").prop("checked", false);
 
} 

else if (terminos==true  && accesorio1==false &&  accesorio2==false ) {

    $("#btnconfiryacess").attr('disabled', true);


    Swal.fire({
        icon: "warning",
        text: "Debes seleccionar almenos un elemento recibido.",
      })    

      $("#terminosentrega").prop("checked", false);
   
} 




else if (terminos==true && accesorio1==true || accesorio2==true  ) {


    
        Swal.fire({
           icon: "info",
           text: "Al realizar la aceptación de terminos, doy confirmación de la entrega de los accesorios seleccionados",
         })


        $("#btnconfiryacess").attr('disabled', false);


    }else{

        $("#btnconfiryacess").attr('disabled', true);
    }


});






$("#accesorio1").change(function() {

     var accesorio1 =  $("#accesorio1").prop('checked'); // varible acceosrio 1 
    
       if (accesorio1==false) {

    
        $("#terminosentrega").prop("checked", false);
        $("#btnconfiryacess").attr('disabled', true);
    
    
        }


});



$("#accesorio2").change(function() {

    var accesorio2 =  $("#accesorio2").prop('checked'); // varible acceosrio 1 
    
    if (accesorio2==false) {

 
     $("#terminosentrega").prop("checked", false);
     $("#btnconfiryacess").attr('disabled', true);
 
 
     }
    


});




