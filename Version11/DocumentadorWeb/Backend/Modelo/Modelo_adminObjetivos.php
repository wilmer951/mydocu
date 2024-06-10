<?php
	require_once "Conexion.php";
	class DatosAdminObjetivos extends Conexion{


#CONSULTA  DE INPUTS
#-------------------------------------


public static function consulObjetivoUdemyusuariosModelo($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT usuarios.nombres, COUNT(obj_udemy.id_objudemy) as curapbrobados 
FROM $tabla 
LEFT JOIN obj_udemy ON usuarios.usuario=obj_udemy.user_udemy 

where 
	usuarios.usuario NOT IN  ('ADM','ADMTRO') and 
    usuarios.rol NOT IN  (4)and
    usuarios.estado=1 and
obj_udemy.est_udemy is null or obj_udemy.est_udemy=2 and
year(now())=year(obj_udemy.fech_udemy)

GROUP BY usuarios.usuario 
ORDER BY curapbrobados DESC
        ");	


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

}












public static function consulcurospendienteaprobacionModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT obj_udemy.id_objudemy,usuarios.nombres,estadoaprobaciones.nom_aproba FROM $tabla 
INNER JOIN usuarios on obj_udemy.user_udemy=usuarios.usuario 
INNER JOIN estadoaprobaciones on obj_udemy.est_udemy=estadoaprobaciones.id_aprob
where year(now())=year(obj_udemy.fech_udemy)
order BY obj_udemy.fcargue_udemy DESC
    ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}






public static function consDetalleCursoModelo($idcurso,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT obj_udemy.id_objudemy,usuarios.nombres,obj_udemy.nom_udemy,obj_udemy.tiem_udemy,obj_udemy.fech_udemy,obj_udemy.obs_udemy,obj_udemy.adjun_udemy,estadoaprobaciones.id_aprob,estadoaprobaciones.nom_aproba from $tabla 
    INNEr JOIN usuarios on obj_udemy.user_udemy=usuarios.usuario
    INNER JOIN estadoaprobaciones on obj_udemy.est_udemy=estadoaprobaciones.id_aprob
    WHERE obj_udemy.id_objudemy=$idcurso
    ");	


    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}








public static function cantCursosObjeUdemyModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id_indica=8");	


    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}











#ACTUALIZAR  DE INPUTS
#-------------------------------------

public static function cambioEstadoCursoModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set est_udemy=:stcurso,obs_udemy=:comentariosCurso WHERE id_objudemy=:idcurso");	

    
    $stmt->bindParam(":idcurso", $datosModelo["idcurso"], PDO::PARAM_INT);
    $stmt->bindParam(":stcurso", $datosModelo["stcurso"], PDO::PARAM_INT);
    $stmt->bindParam(":comentariosCurso", $datosModelo["comentariosCurso"], PDO::PARAM_STR);
    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}





}//fin clase principal
