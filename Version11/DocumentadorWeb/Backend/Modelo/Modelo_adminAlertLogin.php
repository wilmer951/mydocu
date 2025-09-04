<?php
	require_once "Conexion.php";
	class Datosadminalertlogin extends Conexion{





        #-------- ALERT HOME


public static function consultarvistapreviamsgModelo($tabla,$idaleaotrio){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE  id_alert = :id");	

    $stmt->bindParam(":id", $idaleaotrio, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}







#ACTULIZÁCIÓN ALERT LOGIN.
#-------------------------------------

public static function acTualizarAlertLoginModelo($datosModelo,$tabla){



    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla  (text_alert,est_alert,tipo_alert,detalle,img,fech_alert) VALUES (:mens,:est,:tip,:det,:img,:fech)")
    ;	
    
    
    $stmt->bindParam(":mens", $datosModelo["mens"], PDO::PARAM_STR);
    $stmt->bindParam(":det", $datosModelo["det"], PDO::PARAM_STR);
    $stmt->bindParam(":est", $datosModelo["est"], PDO::PARAM_INT);
    $stmt->bindParam(":tip", $datosModelo["tip"], PDO::PARAM_INT);
    $stmt->bindParam(":fech", $datosModelo["fech"], PDO::PARAM_STR);
    $stmt->bindParam(":img", $datosModelo["img"], PDO::PARAM_STR);





    if($stmt->execute())
        {

        return "success";

        }

    else{

        return "error";

        }

    $stmt->close();
}






#CONSULTAR IMG ALER LOGIN
#-------------------------------------


public static function consultaAlertloginModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla order by id_alert desc");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}



#BORRAR IMG ALER LOGIN
#-------------------------------------

public static function borrarAlertloginModelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_alert = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}





 }