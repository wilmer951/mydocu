<?php

class Controlador_msgalert {



//********************* METODO CONSULTAR MENSAJES DE ALERTA  *******************************	    
    public static function consultarMsgAlertControlador(){

        session_start();
        $usuario=$_SESSION["usuario"];




        $conf_lectura= Datosmsgalert::consultarLecturaUusarioModelo($usuario,"usuarios");
            
        $estadoalert=array(
            "alertst"=>"none"

        );
            $respuesta = Datosmsgalert::consultaAlertsModelo("alerts");
        
            if ($respuesta["est_alert"]==1 & $conf_lectura["lec_alert"]==1) {
                echo json_encode($respuesta);

            }else{

                echo json_encode($estadoalert);
            }



    }




//********************* METODO CONFIRMAR LECTURA MENSAJES DE ALERTA  *******************************	    

public static function confirmarLecturAlertaControlador(){

    session_start();
    $usuario=$_SESSION["usuario"];
    
    $respuesta = Datosmsgalert::confirmarLecturAlertaModelo($usuario,"usuarios");
    
        
    
    }
    







     }//fin clase principal+