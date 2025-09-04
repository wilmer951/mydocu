<?php
	require_once "Conexion.php";
	class DatosSubPsw extends Conexion{


#INGRESO DE PSW
#-------------------------------------

public static function ingresarPswModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (psw_apli,psw_usu,psw_psw,psw_mod) VALUES (:nameaplicacion,:nameusuario,:namepsw,:nameidmodulo)");	

    
    $stmt->bindParam(":nameaplicacion", $datosModelo["nameaplicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":nameusuario", $datosModelo["nameusuario"], PDO::PARAM_STR);
    $stmt->bindParam(":namepsw", $datosModelo["namepsw"], PDO::PARAM_STR);
    $stmt->bindParam(":nameidmodulo", $datosModelo["nameidmodulo"], PDO::PARAM_INT);
    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}



#CONSULTA  DE PSW
#-------------------------------------


public static function consultarPswModelo($tabla){


            $stmt = Conexion::conectar()->prepare("SELECT psw_id,psw_apli,psw_usu,psw_psw,psw_mod FROM $tabla ");	


            $stmt->execute();
            return $stmt->fetchAll();

            $stmt->close();

}



#CONSULTAR ID ACTUALIZAR.
#-------------------------------------

public static function consEditarPswModelo($idPsw,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where psw_id =:idPsw");	

    $stmt->bindParam(":idPsw",$idPsw, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}



#ACTUALIZAR  DE PSW
#-------------------------------------

public static function actualizarPswModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("UPDATE $tabla 

        set psw_apli=:apli, psw_usu=:usuario, psw_psw=:psw, psw_mod=:idmodulo

        WHERE psw_id=:idpsw "


    );	

    
    $stmt->bindParam(":apli", $datosModelo["apli"], PDO::PARAM_STR);
    $stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":psw", $datosModelo["psw"], PDO::PARAM_STR);
    $stmt->bindParam(":idpsw", $datosModelo["idpsw"], PDO::PARAM_INT);
    $stmt->bindParam(":idmodulo", $datosModelo["idmodulo"], PDO::PARAM_INT);
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}



#BORRAR DE PSW
#-------------------------------------

public static function borrarPswModelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE psw_id = :id");
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