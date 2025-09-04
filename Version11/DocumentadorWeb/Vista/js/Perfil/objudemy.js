function consultarObjudemy(){



    var fechaactual = new Date();


    

console.log("fecha actual "+fechaactual);


var idObjetivo = "8";   /*  ID DEL OBJETIVO */
var datos2 = new FormData();
datos2.append("idObjetivo", idObjetivo);


var promise = $.ajax({
    url:"Vista/Modulos/ajax/ajax_perfil.php",
    method:"POST",
    data: datos2,
    cache: false,
    contentType: false,
    processData: false,
    success:function(respuesta){

        

        var resulparamObjetivo = $.parseJSON(respuesta);


        

    
         cantidaddecursos=resulparamObjetivo["valor_indica"];
         porcMaxIndiUdemy=resulparamObjetivo["por_max_indica"];
         fechaCierre=resulparamObjetivo["feccierre_indica"];

         var arregloFecha = fechaCierre.split("-");
         var anio = arregloFecha[0];
         var mes = arregloFecha[1] - 1;
         var dia = arregloFecha[2];
         
         var fechacierreFormateada = new Date(anio, mes, dia)

        
            

         if (fechaactual.getTime() > fechacierreFormateada.getTime() ) {
            
            
            $("#viewMensgeCierreObjet").html("Lo sentimos se ha cerrado el periodo de cargue del objetivo, contacta con tu administrador");
            console.log("Lo sentimos ya se ha cerrado el periodo de cargue");

            $("#botonagregarcurso").attr('disabled', true);
            $("#botonagregarcurso").hide();
    
         }else{


            $("#viewMensgeCierreObjet").hide();
            console.log("Periodo de objetivo activo");

            $("#botonagregarcurso").attr('disabled', false);
         

           
         }







         

         console.log("Parametros generales");
         console.log("Cantidad de cursos a realizar "+cantidaddecursos);
         console.log("Procentaje maximo a objetner "+porcMaxIndiUdemy);
         console.log("Fecha de cierre  "+fechaCierre);
 





         $("#viewcantcursos").html(cantidaddecursos);
         $("#viewPorcencursos").html(porcMaxIndiUdemy);
         $("#viewFecCierrecencursos").html(fechaCierre);
         
         
             
                            
    }




});

/*   AJAX OPTIÓN DATOS GENERALES */







/*   AJAX CURSOS APROBADOS */


var consulUdemy = "consUdemy";
var datos = new FormData();
datos.append("consUdemy", consulUdemy);






$('#idresulobjudemy').html("");

promise.then(function(){ 
$.ajax({
    url:"Vista/Modulos/ajax/ajax_perfil.php",
    method:"POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    success:function(respuesta){

if (respuesta=="sindatos") {
        console.log("No hay cursos de udemy");
            
}else{
        var resulObjUdemy = $.parseJSON(respuesta);


        
        var cantidadaprobada=0;


                        for (let index = 0; index <  resulObjUdemy.length; index++) {

                            
                            var estado=resulObjUdemy[index]["est_udemy"];

                            if (estado==1) {estadov="pendiente aprobación"}
                            if (estado==2) {estadov="aprobado"}
                            if (estado==3) {estadov="rechazado"}



                            if (estado==2) {
                                cantidadaprobada=cantidadaprobada+1;
                            }




                            var fecha=resulObjUdemy[index]["fech_udemy"];
                            var nombrecurso=resulObjUdemy[index]["nom_udemy"];
                            var estado=resulObjUdemy[index]["est_udemy"];
                            var obsr=resulObjUdemy[index]["obs_udemy"];
                            
                            data='<tr><td scope="col">'+fecha+
                            '</td><td scope="col">'+nombrecurso+
                            '</td><td scope="col">'+estadov+
                            '</td><td scope="col">'+obsr+'</td></tr>';
                            
                            $('#idresulobjudemy').append(data);

                            

                            
                        }

                        console.log("cantidad de cursos estado aprobado " +cantidadaprobada )

                        
                        var promedyUdemy = Math.round((cantidadaprobada*100)/cantidaddecursos,2);

                        if (promedyUdemy>porcMaxIndiUdemy) {
                            promedyUdemy=porcMaxIndiUdemy;
                        }
                        console.log("Promedio de cursos " +promedyUdemy);
                        
                        
                        
                        $('#totalcursosaprobdos').html("Total de cursos aprobados "+cantidadaprobada+"/"+cantidaddecursos);
                        $('#promedioudemy').html(promedyUdemy+"%");
                    

        
                            
    }

    }


});



});



/*   AJAX CURSOS APROBADOS */




























    

    


}








/* VALIDAR ARCHIVO INSTRUCTIVO */

$("#adjuntocurso").change(function(){
    
    var archivo =$("#adjuntocurso")[0].files[0];
    var tipoarchivo =archivo.type;
    console.log(tipoarchivo);

    if (tipoarchivo!="image/jpg"&&tipoarchivo!="image/jpeg"&&tipoarchivo!="image/png") {
     
        
        $("#adjuntocurso").val("");
                            Swal.fire({
                            icon: 'error',
                            text: 'Lo sentimos archivo no valido',
                            
                            })
    }

    
   



});






$("#btningrearcurso").click(function(){

  

console.log("envioform");
    
    
    
});
    
    


