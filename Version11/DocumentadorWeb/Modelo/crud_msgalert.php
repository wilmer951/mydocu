<?php

require_once "Conexion.php";

class Datosmsgalert extends Conexion{




# CONSULTA ALERTS
#-------------------------------------

    public static function consultaAlertsModelo($tabla){



        $stmt = Conexion::conectar()->prepare("SELECT * FROM alerts ORDER BY RAND() LIMIT 1");	


   

        

        $stmt->execute();
        
        return $stmt->fetch();

        $stmt->close();

    }




 
    




#PRIMER ESTADO LECTURA LOGIN 
#-------------------------------------
    public  static function consultarLecturaUusarioModelo($datosModelo, $tabla){


            $stmt = Conexion::conectar()->prepare("SELECT lec_alert FROM $tabla WHERE usuario = '$datosModelo'");	

            $stmt->execute();
            
            return $stmt->fetch();

            $stmt->close();

    }



# CONFIRMAR LECTURA ALERT
#-------------------------------------

    public static function confirmarLecturAlertaModelo($datosModelo,$tabla){



            $stmt = Conexion::conectar()->prepare("UPDATE $tabla set lec_alert='0' where usuario = '$datosModelo'");	

            $stmt->execute();
            
            return $stmt->fetch();

            $stmt->close();

    }





}//fin clase principal