<?php
	require_once "Conexion.php";
	class DatosAdminCalidad extends Conexion{

#CONSULTA  DE CATEGORIAS
#-------------------------------------






public static function consultarNameUsuario($datosModelo,$tabla){

    $stmt = Conexion::conectar()->prepare("SELECT nombres FROM $tabla where usuario=:usuario");	
    $stmt->bindParam(":usuario", $datosModelo, PDO::PARAM_STR);

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();


}






public static function ingresarFomularioCalidadModelo($datosModelo,$tabla){





    $stmt = Conexion::conectar()->prepare("

    
    INSERT INTO $tabla (
    cal_nreporte,
    cal_id_user,
    cal_tiem,
    cal_fecha,
    cal_ncaso,
    cal_caln1,
    cal_caln2,
    cal_caln3,
    cal_caln4,
    cal_caln5,
    cal_caltotal,
    cal_sopn1,
    cal_sopn2,
    cal_sopn3,
    cal_sopn4,
    cal_sopn5,
    cal_soptotal,
    cal_docun1,
    cal_docun2,
    cal_docun3,
    cal_docun4,
    cal_docun5,
    cal_docutotal,
    cal_coment
    )


     VALUES (
    :nreporte,
    :usuario,
    :tiempo,
    :fecha,
    :ncaso,
    :cal1,
    :cal2,
    :cal3,
    :cal4,
    :cal5,
    :caltotal,
    :sopor1,
    :sopor2,
    :sopor3,
    :sopor4,
    :sopor5,
    :soportotal,
    :docu1,
    :docu2,
    :docu3,
    :docu4,
    :docu5,
    :docutotal,
    :comantarios
    )");	

     





    $stmt->bindParam(":nreporte", $datosModelo["nreporte"], PDO::PARAM_STR);
     $stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
     $stmt->bindParam(":tiempo", $datosModelo["tiempo"], PDO::PARAM_STR);
     $stmt->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);
     $stmt->bindParam(":ncaso", $datosModelo["ncaso"], PDO::PARAM_STR);
     $stmt->bindParam(":cal1", $datosModelo["cal1"], PDO::PARAM_INT);
     $stmt->bindParam(":cal2", $datosModelo["cal2"], PDO::PARAM_INT);
     $stmt->bindParam(":cal3", $datosModelo["cal3"], PDO::PARAM_INT);
     $stmt->bindParam(":cal4", $datosModelo["cal4"], PDO::PARAM_INT);
     $stmt->bindParam(":cal5", $datosModelo["cal5"], PDO::PARAM_INT);
     $stmt->bindParam(":caltotal", $datosModelo["caltotal"], PDO::PARAM_INT);
     $stmt->bindParam(":sopor1", $datosModelo["sopor1"], PDO::PARAM_INT);
     $stmt->bindParam(":sopor2", $datosModelo["sopor2"], PDO::PARAM_INT);
     $stmt->bindParam(":sopor3", $datosModelo["sopor3"], PDO::PARAM_INT);
     $stmt->bindParam(":sopor4", $datosModelo["sopor4"], PDO::PARAM_INT);
     $stmt->bindParam(":sopor5", $datosModelo["sopor5"], PDO::PARAM_INT);
     $stmt->bindParam(":soportotal", $datosModelo["soportotal"], PDO::PARAM_INT);
     $stmt->bindParam(":docu1", $datosModelo["docu1"], PDO::PARAM_INT);
     $stmt->bindParam(":docu2", $datosModelo["docu2"], PDO::PARAM_INT);
     $stmt->bindParam(":docu3", $datosModelo["docu3"], PDO::PARAM_INT);
     $stmt->bindParam(":docu4", $datosModelo["docu4"], PDO::PARAM_INT);
     $stmt->bindParam(":docu5", $datosModelo["docu5"], PDO::PARAM_INT);
     $stmt->bindParam(":docutotal", $datosModelo["docutotal"], PDO::PARAM_INT);
     $stmt->bindParam(":comantarios", $datosModelo["comantarios"], PDO::PARAM_STR);






if($stmt->execute()){

    return "success";

}

else{

    return "error";

}

$stmt->close();




     }






    
     public static function consulIndividualCaliModelo($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT 
        
        
        usuarios.nombres,
        calidad.cal_nreporte,
        calidad.cal_id,
        calidad.cal_nreporte,
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
                
         FROM $tabla inner JOIN usuarios on calidad.cal_id_user=usuarios.usuario
         where year(now())=year(calidad.cal_fecha)
         
         ");	


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







public static function consCantidaddeNotas($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT count(*) as cantnotas FROM $tabla   where year(now())=year(calidad.cal_fecha)");	

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}




public static function totalacumuladoNotas($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  where year(now())=year(calidad.cal_fecha)");	

    
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}

    
    

    

public static function itemrecurrentesCalidadModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT
    
    
    count(if(calidad.cal_caln1='0',calidad.cal_caln1, NULL)) as calin1,
    count(if(calidad.cal_caln2='0',calidad.cal_caln2, NULL)) as calin2,
    count(if(calidad.cal_caln3='0',calidad.cal_caln3, NULL)) as calin3,
    count(if(calidad.cal_caln4='0',calidad.cal_caln4, NULL)) as calin4,
    count(if(calidad.cal_caln5='0',calidad.cal_caln5, NULL)) as calin5,
    
    count(if(calidad.cal_sopn1='0',calidad.cal_caln1, NULL)) as soporn1,
    count(if(calidad.cal_sopn2='0',calidad.cal_caln2, NULL)) as soporn2,
    count(if(calidad.cal_sopn3='0',calidad.cal_caln3, NULL)) as soporn3,
    count(if(calidad.cal_sopn4='0',calidad.cal_caln4, NULL)) as soporn4,
    count(if(calidad.cal_sopn5='0',calidad.cal_caln5, NULL)) as soporn5,
    
    
    count(if(calidad.cal_docun1='0',calidad.cal_docun1, NULL)) as docun1,
    count(if(calidad.cal_docun2='0',calidad.cal_docun2, NULL)) as docun2,
    count(if(calidad.cal_docun3='0',calidad.cal_docun3, NULL)) as docun3,
    count(if(calidad.cal_docun4='0',calidad.cal_docun4, NULL)) as docun4,
    count(if(calidad.cal_docun5='0',calidad.cal_docun5, NULL)) as docun5
   
FROM
 
    
     $tabla
     
     where year(now())=year(calidad.cal_fecha)
     ");	

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}




public static function promedioGeneraluserModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT count(*) as cantidadeva,usuarios.nombres, avg((cal_caltotal+cal_soptotal+cal_docutotal)/3) as promedio from $tabla INNER JOIN usuarios on calidad.cal_id_user=usuarios.usuario   where year(now())=year(calidad.cal_fecha) GROUP by calidad.cal_id_user
    ");	

    
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}









public static function consGraficoCategoraisCalidadControlador($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT sum(calidad.cal_caltotal) as cal_caltotal FROM $tabla where year(now())=year(calidad.cal_fecha) 
    ");	

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}



public static function consGraficoCategoraisSoporteControlador($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT sum(calidad.cal_soptotal) as cal_soptotal FROM $tabla where year(now())=year(calidad.cal_fecha)
    ");	

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}




public static function consGraficoCategoraisDocuControlador($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT sum(calidad.cal_docutotal) as cal_docutotal FROM $tabla where year(now())=year(calidad.cal_fecha)
    ");	

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}









public static function consulconsecutivoreporteModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT cal_id from $tabla order by cal_id DESC LIMIT 1");	

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}







public static function consulcorreonotificaciones($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT valor from $tabla where parametro='correo'");	

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}



public static function consulautenticorreonotificaciones($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT valor from $tabla where parametro='pcorreo'");	

    
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}









    
    }