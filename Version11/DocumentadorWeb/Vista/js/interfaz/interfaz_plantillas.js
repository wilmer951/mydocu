$(".btnefect").click(function() {
   
    $ele=$(this);
    //'WebkitAnimation' : webkitAnimationEnd, OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation'
    $ele.addClass("add-effect").on( 'webkitAnimationEnd mozAnimationEnd oAnimationEnd oanimationend animationend', function() {
       $( this ).removeClass("add-effect"); 
    });
 
 
 });







$("#generarplantilla").click(function(){
    
    
    $(".infotipificacion").html("");
    

    $('.divloading').css('display','none');
    $('.divbotones').css('display','block');
    $('.imglogo').css('display','none'); 
    $('.infotipificacion').css('display','block');

    var categoriaId=$("#idcategoria").val();
    

    var inpdespartone="";
    var inpdespartwo="";
    var inpdiapartone="";
    var inpdiaparttwo="";
    var inpsolpartone="";
    var inpsolparttwo="";
    

    var despartone="";
    var despartwo="";
    var diapartone="";
    var diaparttwo="";
    var solpartone="";
    var solparttwo="";


    var descripcion="";
    var diagnostico="";
    var solucion="";
    var cierre="";



    var forminputs = $(this).parents('form:first');


    

var datos = new FormData();
datos.append("categoriaId", categoriaId);

$.ajax({
url:"Vista/Modulos/ajax/ajax_interfaz.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){
    var resul = $.parseJSON(respuesta);

    console.log(resul);
    $(".infotipificacion").html('<li> Tipo: '+resul[0]['nom_tip']+'</li>'+
                                 '<li> Severidad: '+resul[0]['nom_sev']+'</li>'+ 
                                 '<li> Frecuencia : '+resul[0]['nom_fre']+'</li>'                            
                );
             
                
        var checklist=resul[0]['cate_check'];
                


    if (checklist!=null||checklist&&""||checklist && undefined) {
        console.log("Plantilla con checklist");

        
        $("#btnsoluicioncheck").css('display','block');
        $("#btnsoluicion").css('display','none'); 
   



        $('#btnsoluicioncheck').prop('href','javascript:ventanaSecundaria8("index.php?ir='+resul[0]['cate_check']+'")');


        



        
    }else{


        console.log("Plantilla sin checklist");
        $("#btnsoluicion").css('display','block'); 
        $("#btnsoluicioncheck").css('display','none'); 
    }






    if (resul[0]['cate_des1']!=null) {
        despartone=resul[0]['cate_des1'];
    }

    if (resul[0]['cate_des2']!=null) {
        despartwo=resul[0]['cate_des2'];
    }


    if (resul[0]['cate_dia1']!=null) {
        diapartone=resul[0]['cate_dia1'];
    }

    if (resul[0]['cate_des2']!=null) {
        diaparttwo=resul[0]['cate_dia2'];
    }



    if (resul[0]['cate_sol1']!=null) {
        solpartone=resul[0]['cate_sol1'];
    }

    if (resul[0]['cate_sol2']!=null) {
        solparttwo=resul[0]['cate_sol2'];
    }





	$('input[type=text]',forminputs).each(function(){
        
            if ($(this).prop("id")==resul[0]['cate_inp_des1']) {
                inpdespartone=$(this).val();
            }

            if ($(this).prop("id")==resul[0]['cate_inp_des2']) {
                inpdespartwo=$(this).val();
            }

            if ($(this).prop("id")==resul[0]['cate_inp_dia1']) {
                inpdiapartone=$(this).val();
            }


            if ($(this).prop("id")==resul[0]['cate_inp_dia2']) {
                inpdiaparttwo=$(this).val();
            }

            if ($(this).prop("id")==resul[0]['cate_inp_sol1']) {
                inpsolpartone=$(this).val();
            }

            if ($(this).prop("id")==resul[0]['cate_inp_sol2']) {
                inpsolparttwo=$(this).val();
            }

    });

    descripcion = despartone+inpdespartone+despartwo+inpdespartwo+'.';
    diagnostico= diapartone+inpdiapartone+diaparttwo+inpdiaparttwo+'.';
    solucion= solpartone+inpsolpartone+solparttwo+inpsolparttwo+'.';
    cierre="Funcionario autoriza el cierre del caso.";


    console.log(descripcion);
    console.log(diagnostico);
    console.log(solucion);


    $('#copydes').val(descripcion);
    $('#copydia').val(diagnostico);
    $('#copysol').val(solucion);
    $('#copycie').val(cierre);


    $('#verDesc').html('<div>'+descripcion+'</div>');
    $('#verDia').html('<div>'+diagnostico+'</div>');
    $('#verSol').html('<div>'+solucion+'</div>');
    $('#verCie').html('<div>'+cierre+'</div>');


           
}

});



});