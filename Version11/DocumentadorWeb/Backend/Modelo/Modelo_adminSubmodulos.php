<?php
	require_once "Conexion.php";
	class DatosAdminSubmodulos extends Conexion{



     #CONSULTA  DE SUBMODULOS
#-------------------------------------


public static function consultarSubmoduloModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT submodulos.sub_id,submodulos.sub_nom,submodulos.sub_mod_id,modulos.mod_nom,submodulos.estado FROM $tabla 
        
        Inner JOIN modulos ON submodulos.sub_mod_id=modulos.mod_id
        ");	






    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}

    
    
  #CONSULTA  DE MODULOS SUBMODULOS
#-------------------------------------


public static function consultarModulosModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT mod_id,mod_nom,estado FROM $tabla ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}

    
    
#CONSULTAR ID ACTUALIZAR SUBMODULOS
#-------------------------------------

public static function consEditarSuboduloModelo($idSmodulo,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where  sub_id=:idmodulo");	

    $stmt->bindParam(":idmodulo",$idSmodulo, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}
    


#INGRESO DE SUBMODULOS
#-------------------------------------

public static function ingresarSubmoduloModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (sub_nom,sub_mod_id,estado) VALUES (:nombresubmodulo,:idmodulo,:estado)");	

    
    $stmt->bindParam(":nombresubmodulo", $datosModelo["nombresubmodulo"], PDO::PARAM_STR);
    $stmt->bindParam(":idmodulo", $datosModelo["idmodulo"], PDO::PARAM_INT);
    $stmt->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_INT);
    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}



#ACTUALIZAR  DE SUBMODULOS
#-------------------------------------

public static function actualizarSubmoduloModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set sub_nom=:nombresubmodulo,sub_mod_id=:idmodulo,estado=:estado WHERE sub_id=:idsubmodulo");	

    
    $stmt->bindParam(":nombresubmodulo", $datosModelo["nombresubmodulo"], PDO::PARAM_STR);
    $stmt->bindParam(":idsubmodulo", $datosModelo["idsubmodulo"], PDO::PARAM_INT);
    $stmt->bindParam(":idmodulo", $datosModelo["idmodulo"], PDO::PARAM_INT);
    $stmt->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_INT);
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}








#BORRAR DE SUBMODULOS
#-------------------------------------

public static function borrarSubmoduloModelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE sub_id = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}







    
    
    }//fin clase principal