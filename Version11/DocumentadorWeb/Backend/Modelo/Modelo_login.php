<?php
	require_once "Conexion.php";
	class DatosLogin extends Conexion{

	

#lOGIN
#-------------------------------------
	public static function LoginModelo($datosModelo, $tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario = :usuario and password=:password");	

		
		$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModelo["password"], PDO::PARAM_STR);
		
        $stmt->execute();
        
        return $stmt->fetch();

        $stmt->close();

		}



	}//fin clase principal