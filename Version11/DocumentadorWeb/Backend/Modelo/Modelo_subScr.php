<?php
	require_once "Conexion.php";
	class DatosSubScr extends Conexion{


#CONSULTA  DE SCRIPT
#-------------------------------------


public static function consultarScriptModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT scp_id,scp_des,scp_scp FROM $tabla ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}


#INGRESO DE SCP
#-------------------------------------

public static function ingresarScriptModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (scp_des,scp_scp) VALUES (:descripcion,:scp)");	



    
    $stmt->bindParam(":descripcion", $datosModelo["descri"], PDO::PARAM_STR);
    $stmt->bindParam(":scp", $datosModelo["scp"], PDO::PARAM_STR);

    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}



#CONSULTAR ID ACTUALIZAR.
#-------------------------------------

public static function consEditarScrModelo($idScr,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where scp_id =:idScr");	

    $stmt->bindParam(":idScr",$idScr, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}


#ACTULIZÁCIÓN DE SCP
#-------------------------------------

public static function actualizarScpModelo($datosModelo,$tabla){



    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
     scp_des=:descp, scp_scp=:scp where scp_id=:id");	
    
    
    $stmt->bindParam(":descp", $datosModelo["desscp"], PDO::PARAM_STR);
    $stmt->bindParam(":scp", $datosModelo["scp"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModelo["idscp"], PDO::PARAM_INT);





    if($stmt->execute())
        {

        return "success";

        }

    else{

        return "error";

        }

    $stmt->close();
}

#BORRAR SCP
#-------------------------------------

public static function borrarScpModelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE scp_id = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}

 }// fin clase principal