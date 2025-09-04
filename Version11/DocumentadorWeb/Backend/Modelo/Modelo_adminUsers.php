<?php
	require_once "Conexion.php";
	class Datos extends Conexion{

	

#CONSULTA  DE USUARIOS
#-------------------------------------


public static function consultaUsuariosModelo($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT usuarios.estado,usuarios.id,usuarios.usuario,usuarios.nombres,roles.nom_rol,perfil.nom_perfil
		
		FROM $tabla 
		inner JOIN roles on usuarios.rol=roles.id_rol  
		INNER JOIN perfil on usuarios.perfil=perfil.id_perfil
		where usuarios.usuario NOT IN  ('ADM','ADMTRO')");	


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

}






#REGISTRO  DE USUARIOS
#-------------------------------------

public static function registroUsuarioModelo($datosModelo, $tabla){


	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla 


	(usuario,nombres,password,perfil,id_login,ult_login,notas,lec_alert,rol,estado) VALUES 
		
		(:usuario,:nombres,:password,:perfil,'1','0000-00-00 00:00:00','','1',:rol,'1')");	

	
	$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
	$stmt->bindParam(":nombres", $datosModelo["nombres"], PDO::PARAM_STR);
	$stmt->bindParam(":password", $datosModelo["password"], PDO::PARAM_STR);
	$stmt->bindParam(":rol", $datosModelo["rol"], PDO::PARAM_STR);
	$stmt->bindParam(":perfil", $datosModelo["perfil"], PDO::PARAM_INT);

	if($stmt->execute()){

		return "success";

	}

	else{

		return "error";

	}

	$stmt->close();

}




#ACTULIZÁCIÓN DE USUARIOS
#-------------------------------------

public static function actualizarPasswrodModelo($datosModelo,$tabla){



	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
	 password=:password,id_login=1 where id=:id");	
	
	
	$stmt->bindParam(":password", $datosModelo["password"], PDO::PARAM_STR);
	$stmt->bindParam(":id", $datosModelo["idusuairo"], PDO::PARAM_INT);





	if($stmt->execute())
		{

		return "success";

		}

	else{

		return "error";

		}

	$stmt->close();

}




#BORRAR USUARIOS
#-------------------------------------

public static function borrarUsuariosModelo($datosModel, $tabla){

	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE $tabla.id = :id");
	$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

	if($stmt->execute()){

		return "success";

	}

	else{

		return "error";

	}

	$stmt->close();

}




#CONSULTA  DE USUARIOS EDITAR
#-------------------------------------


public static function consEditarUserModelo($iduser,$tabla){


	$stmt = Conexion::conectar()->prepare("SELECT id,usuario,nombres,perfil,rol,estado FROM $tabla where usuario =:id");	



	$stmt->bindParam(":id", $iduser, PDO::PARAM_STR);
	$stmt->execute();
	return $stmt->fetch();

	$stmt->close();

}




#ACTULIZÁCIÓN DE USUARIOS
#-------------------------------------

public static function actualizarUsuarioModelo($datosModelo,$tabla){



	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombres=:nom,perfil=:per,rol=:rol,estado=:st
	  where id =:id and usuario not in ('ADM','ADMTRO')" );	
	
	

	$stmt->bindParam(":id", $datosModelo["idusuairo"], PDO::PARAM_INT);
	$stmt->bindParam(":nom", $datosModelo["nombres"], PDO::PARAM_STR);
	$stmt->bindParam(":per", $datosModelo["perfil"], PDO::PARAM_INT);
	$stmt->bindParam(":rol", $datosModelo["rol"], PDO::PARAM_INT);
	$stmt->bindParam(":st", $datosModelo["estado"], PDO::PARAM_INT);





	if($stmt->execute())
		{

		return "success";

		}

	else{

		return "error";

		}

	$stmt->close();

}










public static function consultarRolesUsuariosModelo($tabla){


	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	



	$stmt->execute();
	return $stmt->fetchAll();

	$stmt->close();

}






public static function consultarPerfilUsuariosModelo($tabla){


	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	



	$stmt->execute();
	return $stmt->fetchAll();

	$stmt->close();

}

























public static function consulUsuariosAllModelo($tabla)
{


	$stmt = Conexion::conectar()->prepare("SELECT usuario,nombres FROM $tabla where usuario not in ('ADM','ADMTRO') ORDER BY nombres asc");


	$stmt->execute();
	return $stmt->fetchAll();

	$stmt->close();

}



public static function consulUsuariosActivosModelo($tabla)
{


	$stmt = Conexion::conectar()->prepare("SELECT usuario,nombres FROM $tabla where estado='1' and usuario not in ('ADM','ADMTRO') ORDER BY nombres asc");


	$stmt->execute();
	return $stmt->fetchAll();

	$stmt->close();

}










}//FIN CLASE PRINCIPAL