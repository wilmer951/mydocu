<?php
	require_once "Conexion.php";
	class DatosAdminPausaActiva extends Conexion{


#CONSULTA  DE ALERTS PAUSAS ACTIVAS
#-------------------------------------


public static function consultaAlertPausasActivasModelo($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

}







#CONSULTA  EDICION PAUSA ACTIVA
#-------------------------------------




public static function consEditarPausaActivaModelo($idpausa,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where alertpa_id=:idpausa");	

    $stmt->bindParam(":idpausa",$idpausa, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}




#ACTUALIZAR  PAUSAS ACTIVAS
#-------------------------------------

public static function actualizarPausaActivaModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set alertpa_titulo=:titulo,alertpa_mensaje=:mensaje,alertpa_estado=:estado WHERE alertpa_id=:idpausa");	

    
	$stmt->bindParam(":idpausa", $datosModelo["ideditar"], PDO::PARAM_INT);
    $stmt->bindParam(":titulo", $datosModelo["titulo"], PDO::PARAM_STR);
    $stmt->bindParam(":mensaje", $datosModelo["mensaje"], PDO::PARAM_STR);
	$stmt->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_INT);
    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}




#ACTUALIZAR  RANGO TIEMPO PAUSAS ACTIVAS
#-------------------------------------

public static function actualizarRangoTiempoModelo($rango, $tabla){



    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set valor=:valor WHERE id=1");	

    
	$stmt->bindParam(":valor",$rango, PDO::PARAM_INT);
    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}


#CONSULTAR  RANGO TIEMPO PAUSAS ACTIVAS
public static function consRangotiempModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id=1");	

    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}



#CONSULTA DIAS PARA CAMBIO DE ACCESORIOS

public static function consDiasCambioAccesoModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id=2");	

    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}





#ACTUALIZAR  DIAS CAMBIO ACCESORIOS DIADEMA
#-------------------------------------

public static function actualizarDiasCambioAcceModelo($dias, $tabla){


    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set valor=:valor WHERE id=2");	

    
	$stmt->bindParam(":valor",$dias, PDO::PARAM_INT);
    
    if($stmt->execute())
    {

    return "success";

    }

else{

    return "error";

    }

    $stmt->close();

}




#CONSULTAR  RESUMEN PAUSAS ACTIVAS
public static function consResumenPausasActivasModelo($fechainicial,$fechafin,$tabla){


    $stmt = Conexion::conectar()->prepare("
    
    select usuarios.usuario,usuarios.nombres, 
    count(if(report_pa.reportpa_alert_id=1,1, NULL) and if(report_pa.reportpa_conf=1,1, NULL) and if(report_pa.reportpa_fecha BETWEEN '$fechainicial' AND '$fechafin' ,1, NULL)   )as PA, 
    count(if(report_pa.reportpa_alert_id=2,1, NULL) and if(report_pa.reportpa_conf=1,1, NULL) and if(report_pa.reportpa_fecha BETWEEN '$fechainicial' AND '$fechafin' ,1, NULL) 	)as PD,
    count(if(report_pa.reportpa_alert_id=3,1, NULL) and if(report_pa.reportpa_conf=1,1, NULL) and if(report_pa.reportpa_fecha BETWEEN '$fechainicial' AND '$fechafin' ,1, NULL)	)as CA 

    from usuarios LEFT JOIN report_pa ON 
    report_pa.reportpa_user=usuarios.usuario 
    
    where 
    usuarios.usuario NOT IN  ('ADM','ADMTRO') and
    usuarios.rol in ('1','2') and
    usuarios.estado='1'
    
    GROUP BY usuarios.usuario ORDER by usuarios.nombres asc
    ");	

    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}


#CONSULTA  INSTRUCTIVOS
#-------------------------------------


public static function consInstructivosModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla inner join alert_pa_ac on instru_alert.instrupa_idalertpa =alert_pa_ac.alertpa_id ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}







#BORRAR INSTRUCTIVOS
#-------------------------------------

public static function borrarInstructivoMOdelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE instrupa_id = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}







#INSERTAR INSTRUCTIVO
#-------------------------------------

public static function InsertarInstructivoModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (instrupa_idalertpa,instrupa_medio,instrupa_estado) VALUES (:idalert,:nameinstru,1)");	

    
    $stmt->bindParam(":idalert", $datosModelo["idalert"], PDO::PARAM_INT);
    $stmt->bindParam(":nameinstru", $datosModelo["instru"], PDO::PARAM_STR);
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}



}//CIERRE METODO PRINCIPAL
