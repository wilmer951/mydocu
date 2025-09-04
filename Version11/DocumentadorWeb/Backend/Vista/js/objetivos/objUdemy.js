


/* funcion borrado eventos */

function functionVerdatalleobjUdemy(idcurso){

    console.log("Id curso udemy consultado "+idcurso);    







    var idcursoconsul=idcurso;

    var datos = new FormData();
        datos.append("idcursoconsul", idcursoconsul);
    
     $.ajax({
                url:"Vista/Modulos/ajax/ajax_adminObjetivos.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){
                     
                    var resul = $.parseJSON(respuesta);
                    console.log(resul);  
                    

                    if (resul["id_aprob"]!=1) {
                        $("#btnaprobarcurso").prop('disabled', true);
                        $("#btnrechazarcurso").prop('disabled', true);

                        
                    }else{

                        $("#btnaprobarcurso").prop('disabled', false);
                        $("#btnrechazarcurso").prop('disabled', false);
                    }



                
                var idCurso=resul["id_objudemy"];
                var nomIngeniero=resul["nombres"];
                var nomCurso=resul["nom_udemy"];
                var duracionCurso=resul["tiem_udemy"];
                var fechfinalcurso=resul["fech_udemy"];
                var obserCurso=resul["obs_udemy"];
                var estadoCurso=resul["nom_aproba"];
                var imgCertiCurso=resul["adjun_udemy"];


                

                $("#nomIngeniero").html(nomIngeniero);
                $("#nomCurso").html(nomCurso);
                $("#duracionCurso").html(duracionCurso);
                $("#fechfinalcurso").html(fechfinalcurso);
                $("#obserCurso").html(obserCurso);
                $("#estadoCurso").html(estadoCurso);

                $("#idcursocambioestado").val(idCurso);
                
                
                




                $("#imgCertiCurso").attr('src','../Vista/Imagenes/certiUdemy/'+imgCertiCurso);
                     
                            }
        
                    });














 
        

}
/* funcion boraddo de boton */







$("#btnaprobarcurso").click(function(){

    $("#estadoAprobacion").val("2");
    
});
    

$("#btnrechazarcurso").click(function(){

    $("#estadoAprobacion").val("3");
});
    