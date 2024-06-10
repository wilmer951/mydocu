<?php
	require_once "Conexion.php";
	class DatosSubCmd extends Conexion{



#CONSULTA  DE COMANDOS
#-------------------------------------


public static function consultarComandosModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT cmd_id,cmd_des,cmd_com FROM $tabla ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}



#INGRESO DE COMANDO
#-------------------------------------

public static function ingresarComandoModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (cmd_des,cmd_com) VALUES (:descripcion,:comando)");	



    
    $stmt->bindParam(":descripcion", $datosModelo["namedescripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":comando", $datosModelo["namecomando"], PDO::PARAM_STR);

    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}



#CONSULTAR ID ACTUALIZAR.
#-------------------------------------

public static function consEditarCmdModelo($idCmd,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where cmd_id =:idCmd");	

    $stmt->bindParam(":idCmd",$idCmd, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}



#ACTUALIZAR  DE COMANDOS
#-------------------------------------

public static function actualizarComandoModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("UPDATE $tabla 

        set cmd_des=:descri, cmd_com=:comando

        WHERE cmd_id=:idcomando "


    );	

    
    $stmt->bindParam(":descri", $datosModelo["descri"], PDO::PARAM_STR);
    $stmt->bindParam(":comando", $datosModelo["comando"], PDO::PARAM_STR);
    $stmt->bindParam(":idcomando", $datosModelo["idcomando"], PDO::PARAM_INT);
    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}

#BORRAR DE COMANDO
#-------------------------------------

public static function borrarComandoModelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cmd_id = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}


}// fin clase principal