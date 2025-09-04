<?php
	require_once "Conexion.php";
	class DatosAdminModulos extends Conexion{

#CONSULTA  DE MODULOS
#-------------------------------------


public static function consultarModulosModelo($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT mod_id,mod_nom,estado FROM $tabla ");	


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

}




#CONSULTAR EDITAR MODULOS.
#-------------------------------------

public static function consEditarModuloModelo($idmodulo,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where mod_id=:idmodulo");	

    $stmt->bindParam(":idmodulo",$idmodulo, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}


#INGRESO  DE MODULOS
#-------------------------------------


public static function ingresarModuloModelo($datosModelo, $tabla){


	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (mod_nom,estado) VALUES (:modulo,:estado)");	

	
	$stmt->bindParam(":modulo",$datosModelo["modulo"], PDO::PARAM_STR);
	$stmt->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_INT);
	
	

	if($stmt->execute()){

		return "success";

	}

	else{

		return "error";

	}

	$stmt->close();

}







#ACTUALIZAR  DE MODULOS
#-------------------------------------

public static function actualizarModuloModelo($datosModelo, $tabla){


	$stmt = Conexion::conectar()->prepare("UPDATE $tabla set mod_nom=:nombremodulo,estado=:estado WHERE mod_id=:idmodulo");	

	
	$stmt->bindParam(":nombremodulo", $datosModelo["nombremodulo"], PDO::PARAM_STR);
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




#BORRAR DE MODULOS
#-------------------------------------

public static function borrarModuloModelo($datosModel, $tabla){

	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE mod_id = :id");
	$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

	if($stmt->execute()){

		return "success";

	}

	else{

		return "error";

	}

	$stmt->close();

}





}// cierre metodo princiipal
