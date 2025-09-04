<?php
	
	require_once "Conexion.php";

class DatosPerfil extends Conexion{




	



	public static function consulParametroObjetivoModelo($idobjetivo,$tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * from $tabla where id_indica='8'");	

		$stmt->bindParam(":idobje",$idobjetivo, PDO::PARAM_INT);

		$stmt->execute();
		
		return $stmt->fetch();

		$stmt->close();

	}













# CONSULTA NOTAS
#-------------------------------------

	public static function consulPerfilCalidadPefilModelo($tabla,$usuario){


		$stmt = Conexion::conectar()->prepare("SELECT * from $tabla WHERE year(now())=year(calidad.cal_fecha) and cal_id_user=:usuario order by cal_fecha desc");	

        $stmt->bindParam(":usuario",$usuario, PDO::PARAM_STR);

		$stmt->execute();
		
		return $stmt->fetchAll();

		$stmt->close();

	}




	# CONSULTA NOTAS
#-------------------------------------

public static function consulPerfilObjydemyPefilModelo($tabla,$usuario){
	

	$stmt = Conexion::conectar()->prepare("SELECT * from $tabla WHERE year(now())=year(obj_udemy.fech_udemy) and user_udemy =:usuario order by fcargue_udemy desc");	

	$stmt->bindParam(":usuario",$usuario, PDO::PARAM_STR);

	$stmt->execute();
	
	return $stmt->fetchAll();

	$stmt->close();

}









	public static function consDetalleCalidadModelo($idcalidad,$tabla){


		$stmt = Conexion::conectar()->prepare("SELECT 
		
			
			usuarios.nombres,
			calidad.cal_nreporte,
			calidad.cal_id,
			calidad.cal_tiem,
			calidad.cal_fecha,
			calidad.cal_ncaso,
			calidad.cal_caln1,
			calidad.cal_caln2,
			calidad.cal_caln3,
			calidad.cal_caln4,
			calidad.cal_caln5,
			calidad.cal_caltotal,
			calidad.cal_sopn1,
			calidad.cal_sopn2,
			calidad.cal_sopn3,
			calidad.cal_sopn4,
			calidad.cal_sopn5,
			calidad.cal_soptotal,
			calidad.cal_docun1,
			calidad.cal_docun2,
			calidad.cal_docun3,
			calidad.cal_docun4,
			calidad.cal_docun5,
			calidad.cal_docutotal,
			calidad.cal_coment
		
		 FROM $tabla inner JOIN usuarios on calidad.cal_id_user=usuarios.usuario where calidad.cal_nreporte='$idcalidad'");	
	
	
		$stmt->execute();
		return $stmt->fetch();
	
		$stmt->close();
	
	}









	


#INGRESO DE CURSO
#-------------------------------------

public static function ingresarCursoModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla 
	(user_udemy,nom_udemy,tiem_udemy,fech_udemy,obs_udemy,adjun_udemy,fcargue_udemy,est_udemy) VALUES 
	(:usuario,:nombrec,:tiempo,:fechfin,:obsrv,:adjunto,current_timestamp(),'1')");	

    
	$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
	$stmt->bindParam(":nombrec", $datosModelo["nombrecurso"], PDO::PARAM_STR);
    $stmt->bindParam(":fechfin", $datosModelo["fechfinal"], PDO::PARAM_STR);
	$stmt->bindParam(":tiempo", $datosModelo["tiempo"], PDO::PARAM_STR);
	$stmt->bindParam(":obsrv", $datosModelo["obsr"], PDO::PARAM_STR);
	$stmt->bindParam(":adjunto", $datosModelo["adjunto"], PDO::PARAM_STR);
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}


















}

