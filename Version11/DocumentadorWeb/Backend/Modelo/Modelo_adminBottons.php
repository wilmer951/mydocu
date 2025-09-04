<?php
	require_once "Conexion.php";
	class DatosAdminBottons extends Conexion{


#CONSULTA  DE INPUTS
#-------------------------------------


public static function consultarInputsModelo($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT inp_id,inp_nom,inp_des FROM $tabla ");	


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

}


public static function consEditarButtonModelo($idbutton,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT inp_id,inp_nom,inp_des FROM $tabla where inp_id=:idbutton");	

    $stmt->bindParam(":idbutton",$idbutton, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}



#ACTUALIZAR  DE INPUTS
#-------------------------------------

public static function actualizarBottonModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set inp_nom=:nameinput,inp_des=:descripcion WHERE inp_id=:idinput");	

    
    $stmt->bindParam(":nameinput", $datosModelo["nameinput"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datosModelo["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":idinput", $datosModelo["idinput"], PDO::PARAM_INT);
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}



#INGRESO DE INPUTS
#-------------------------------------

public static function ingresarBottonModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (inp_nom,inp_des) VALUES (:nameinput,:descripcion)");	

    
    $stmt->bindParam(":nameinput", $datosModelo["nameinput"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datosModelo["descripcion"], PDO::PARAM_STR);
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}




#BORRAR DE INPUTS
#-------------------------------------

public static function borrarBottonModelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE inp_id = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}







}//fin clase principal
