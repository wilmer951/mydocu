<?php
	
	require_once "Conexion.php";

class Datospostplantilla extends Conexion{




    #CONSULTA  DE MODULOS ALL
#-------------------------------------


public static function consultaModulosModeloall($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT mod_id,mod_nom FROM $tabla ORDER BY mod_nom ASC");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}


#INGRESO POSTULACÓN DE PLANTILLAS
#-------------------------------------

public static function postularPlantillaModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla 
        (post_plan_mod,post_plan_sub,post_plan_cate,post_plan_des,post_plan_dia,post_plan_sol,post_plan_usr,post_plan_fech) VALUES (:modulo,:submodulo,:categoria,:des,:dia,:sol,:usuario,now())");	


    
    
    $stmt->bindParam(":modulo", $datosModelo["modulo"], PDO::PARAM_INT);
    $stmt->bindParam(":submodulo", $datosModelo["submodulo"], PDO::PARAM_INT);
    $stmt->bindParam(":categoria", $datosModelo["categoria"], PDO::PARAM_INT);
    $stmt->bindParam(":des", $datosModelo["des"], PDO::PARAM_STR);
    $stmt->bindParam(":dia", $datosModelo["dia"], PDO::PARAM_STR);
    $stmt->bindParam(":sol", $datosModelo["sol"], PDO::PARAM_STR);
    $stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}




}
