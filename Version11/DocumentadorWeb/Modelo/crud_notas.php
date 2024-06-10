<?php
	
	require_once "Conexion.php";

class Datosnotas extends Conexion{

# CONSULTA NOTAS
#-------------------------------------

	public static function notasModelo($id,$tabla){


		$stmt = Conexion::conectar()->prepare("SELECT notas from $tabla WHERE id='$id'");	

		$stmt->execute();
		
		return $stmt->fetch();

		$stmt->close();

	}





# ACTUALIZAR NOTAS
#-------------------------------------

	public static function actualizarNotasModelo($id,$notas,$tabla){




		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET notas='$notas' WHERE id='$id'");	

				if($stmt->execute())
					{

					return "success";

					}

				else{

					return "error";

					}

		$stmt->close();

	}



}//FIN CLASE PRINCIPAL
