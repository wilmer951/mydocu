<?php
	require_once "Conexion.php";
	class Datosadmininfo extends Conexion{







        

#INGRESO  DE ARTICULO
#-------------------------------------


public static function ingresarArticuloModelo($datosModelo, $tabla){


	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (tit_art,text_art,fecha_art) VALUES (:tituloArti,:descrarticulo,current_timestamp())");	

	
	$stmt->bindParam(":tituloArti",$datosModelo["tituloArti"], PDO::PARAM_STR);
	$stmt->bindParam(":descrarticulo", $datosModelo["descrarticulo"], PDO::PARAM_STR);
	
	

	if($stmt->execute()){

		return "success";

	}

	else{

		return "error";

	}

	$stmt->close();

}





#ACTUALIZAR  DE ARTICULO
#-------------------------------------


public static function actualizarArticuloModelo($datosModelo, $tabla){


	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tit_art=:tituloArti,text_art=:descrarticulo,fecha_art=current_timestamp() where id_art=:idarti
    
    ");	

	
    $stmt->bindParam(":idarti",$datosModelo["idarti"], PDO::PARAM_INT);
	$stmt->bindParam(":tituloArti",$datosModelo["tituloArti"], PDO::PARAM_STR);
	$stmt->bindParam(":descrarticulo", $datosModelo["descrarticulo"], PDO::PARAM_STR);
	
	

	if($stmt->execute()){

		return "success";

	}

	else{

		return "error";

	}

	$stmt->close();

}










# CONSULTA ARTITULOS DE INFO
#-------------------------------------

public static function consultaArticuloInfoModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT id_art,tit_art,text_art FROM $tabla ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}




public static function consEditarArtiModelo($idArti,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id_art=:idArti");	

    $stmt->bindParam(":idArti",$idArti, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}





#BORRAR DE ARTICULO
#-------------------------------------

public static function borrarArticuloModelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_art = :id");
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