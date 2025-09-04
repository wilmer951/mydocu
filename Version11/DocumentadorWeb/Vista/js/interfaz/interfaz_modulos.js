/*=============================================
CONSULTAR SUBCATEGORIAS
=============================================*/



$("#selectmodulo").change(function(){

        
    $("#selectCategoria").empty().append('<option selected>Seleccione una opcion</option>');
    $('.divbotones').css('display','none');
    $('.divloading').css('display','block');
    $('.infotipificacion').css('display','none');


    
    
    

    var modulo = $("#selectmodulo option:selected").val();

    
    

var datos = new FormData();
datos.append("modulo", modulo);


$.ajax({
url:"Vista/Modulos/ajax/ajax_interfaz.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){

    
$('#selectSubmodulo').html(respuesta);

}

});

});


/*=============================================
CONSULTAR SUBMODULOS
=============================================*/



$("#selectSubmodulo").change(function(){

    $("#selectCategoria").val("0");
    $('#divInput').css('display','none');
    $("#selectCategoria option[value="+0+"]").attr("selected",true);
    var categoria = $("#selectSubmodulo option:selected").val();

    
    

var datos = new FormData();
datos.append("submodulo", categoria);

$.ajax({
url:"Vista/Modulos/ajax/ajax_interfaz.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){

$('#selectCategoria').html(respuesta);

}

});

});


/*=============================================
CONSULTAR INPUTS
=============================================*/



$("#selectCategoria").change(function(){

    
    
var idCategoria = $("#selectCategoria option:selected").val();




var datos = new FormData();
datos.append("categoria", idCategoria);

$.ajax({
url:"Vista/Modulos/ajax/ajax_interfaz.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){
    var resul = $.parseJSON(respuesta);
    
    

                $('.divinputs').html("");
                $('.divinputs').append('<input id="idcategoria" type="hidden" value="'+idCategoria+'"></input>');
                for (let i = 0; i < resul.length; i++) {
                    

                $('.divinputs').append('<input id="'+resul[i]['inp_id']+'" class="form-control form-control-sm mb-1" type="text" placeholder="'+resul[i]['inp_des']+'" ></input>')      
                                    
                }

                
                

    

}

});

});








