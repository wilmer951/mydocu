<?php
	
	require_once "Conexion.php";

class Datospausaactiva extends Conexion{

# CONSULTA ALERTA PAUSAS ACTIVAS
#-------------------------------------

	public static function pausasactivasModelo($tabla,$idmsgpausactiva){


		$stmt = Conexion::conectar()->prepare("SELECT * from $tabla where alertpa_id=$idmsgpausactiva and alertpa_estado=1");	

		$stmt->execute();
		
		return $stmt->fetch();

		$stmt->close();

	}


# CONSULTA INSTRUCTIVO  PAUSAS ACTIVAS
#-------------------------------------

	public static function instruactivasModelo($tabla,$idalerta){


		$stmt = Conexion::conectar()->prepare("SELECT * from $tabla where instrupa_idalertpa=$idalerta and instrupa_estado=1");	

		$stmt->execute();
		
		return $stmt->fetchAll();

		$stmt->close();

	}







#-------------------------------------
public static function ConfirmacionPausaActivaModelo($datosModelo,$tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (reportpa_user,reportpa_alert_id,reportpa_conf) VALUES (:usuario,:idalert,:cnfirmacion)");	

    
	$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":idalert", $datosModelo["idalert"], PDO::PARAM_INT);
	$stmt->bindParam(":cnfirmacion", $datosModelo["cnfirmacion"], PDO::PARAM_INT);
    

	if($stmt->execute()){

		// actulización tabla de control pausa activa 

	

		return "success";





}

else{

return "error";

}

$stmt->close();

}






# CONSULTA   PAUSAS ACTIVAS
#-------------------------------------

public static function consulcontrolMsgPausasActivasModelo($usuario,$tabla){


	$stmt = Conexion::conectar()->prepare("SELECT * from $tabla where cntr_pa_user=:usuario");	


	$stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);

	$stmt->execute();
	
	return $stmt->fetch();

	$stmt->close();

}


# CONSULTA CAMBIO DE ACCESORIOS.
#-------------------------------------

public static function consulcontrolMsgAccesoriosModelo($usuario,$tabla){


	$stmt = Conexion::conectar()->prepare("SELECT * from $tabla where acc_usr_id=:usuario");	


	$stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);

	$stmt->execute();
	
	return $stmt->fetch();

	$stmt->close();

}




# updateControlPausasActivas
#-------------------------------------

public static function updatecontrolMsgPausasActivasModelo($datosModelo,$tabla){




	if ($datosModelo["idalert"]==1 && $datosModelo["cnfirmacion"]==1  ) {
					
		$stmt = Conexion::conectar()->prepare("update controlalertpausaa set cntr_pa_pa='1',cntr_pa_pafecha=current_timestamp() where cntr_pa_user=:usuario");	
		$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
		if($stmt->execute()){


			return "success";
		}


		$stmt->close();

	}
	// actulización tabla de control cambio de diadema

	if ($datosModelo["idalert"]==2 && $datosModelo["cnfirmacion"]==1  ) {
		
		$stmt = Conexion::conectar()->prepare("update controlalertpausaa set cntr_pa_di='1',cntr_pa_difecha=current_timestamp()	where cntr_pa_user=:usuario");	
		$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
		if($stmt->execute()){


			return "success";
		}

		$stmt->close();

	}


		// actulización tabla de control cabmio de accesorios confimracion OK

		if ($datosModelo["idalert"]==3 && $datosModelo["cnfirmacion"]==1  ) {
		
			$stmt = Conexion::conectar()->prepare("update controlalertpausaa set cntr_pa_ca='1',cntr_pa_cafecha=current_timestamp()	where cntr_pa_user=:usuario");	
			$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
			if($stmt->execute()){
	
	
				return "success";
			}
	
			$stmt->close();
	
		}

			// actulización tabla de control cabmio de accesorios confimracion fAIL

			if ($datosModelo["idalert"]==3 && $datosModelo["cnfirmacion"]==0  ) {
		
				$stmt = Conexion::conectar()->prepare("update controlalertacces set acc_acc1 ='1',acc_acc2 ='1' where acc_usr_id=:usuario");	
				$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
				if($stmt->execute()){
		
		
					return "success";
				}
		
				$stmt->close();
		
			}












}







#INGRESO  REPORTE ACCESIORS
#-------------------------------------


public static function confiAccesorios1Modelo($usuario,$accesorio,$tabla){


	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (report_ac_usr,report_ac_item,report_ac_fecha) VALUES (:usuario,:accesorio,current_timestamp())");	

	$stmt->bindParam(":usuario",$usuario, PDO::PARAM_STR);
	$stmt->bindParam(":accesorio",$accesorio, PDO::PARAM_INT);

	if($stmt->execute()){


				if ($accesorio==1) { 

								$stmt = Conexion::conectar()->prepare("update controlalertacces set acc_acc1 ='1',acc_acc1_date =current_timestamp(),acc_acc2 ='1'	where acc_usr_id=:usuario");	
								$stmt->bindParam(":usuario",$usuario, PDO::PARAM_STR);
								if($stmt->execute()){
						
						
									return "success";
								}

						
					}


					if ($accesorio==2) { 

						$stmt = Conexion::conectar()->prepare("update controlalertacces set acc_acc2 ='1',acc_acc2_date =current_timestamp(),acc_acc1 ='1'	where acc_usr_id=:usuario");	
						$stmt->bindParam(":usuario",$usuario, PDO::PARAM_STR);
						if($stmt->execute()){
				
				
							return "success";
						}

				
			}


	
			

	}


	else{

		return "error";

	}


	$stmt->close();

}









# CONSULTA DIAS CAMBIO DE ACCESORIOS.
#-------------------------------------

public static function consulDiasCambioAccesoriosModelo($tabla){


	$stmt = Conexion::conectar()->prepare("SELECT * from $tabla where id=2");	

	$stmt->execute();
	
	return $stmt->fetch();

	$stmt->close();

}



# CONSULTAR MIS DIAS DE CAMBIO DE ACCESORIOS.
#-------------------------------------

public static function consulUserDiasAcceModelo($usuario,$tabla){


	$stmt = Conexion::conectar()->prepare("SELECT * from $tabla where acc_usr_id =:usuario");	


	$stmt->bindParam(":usuario",$usuario, PDO::PARAM_STR);

	$stmt->execute();
	
	return $stmt->fetch();

	$stmt->close();

}






}//FIN CLASE PRINCIPAL
