<?php
require_once "Conexion.php";
class Datos extends Conexion{



#Ingreso DE USUARIOS
#-------------------------------------
public static function consultaEmpleadosModelo($tabla){


$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");



        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

}



#CONSULTA DE USUARIOS
#-------------------------------------


public static function consultaUsuariosModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT id,usuario,nombres,password,perfil FROM $tabla ");


        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();

    }

#REGISTRO DE EMPLEADOS
#-------------------------------------

public static function registrarEmpleadoModelo($datosModelo, $tabla){


$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla 


(pnombre,snombre,papellido,sapellido,correo,genero,area) VALUES 

(:pnombre,:snombre,:papellido,:sapellido,:correo,:genero,:area)");


$stmt->bindParam(":pnombre", $datosModelo["primernombre"], PDO::PARAM_STR);
$stmt->bindParam(":snombre", $datosModelo["segundonombre"], PDO::PARAM_STR);
$stmt->bindParam(":papellido", $datosModelo["primerapellido"], PDO::PARAM_STR);
$stmt->bindParam(":sapellido", $datosModelo["segundoapellido"], PDO::PARAM_STR);
$stmt->bindParam(":correo", $datosModelo["correo"], PDO::PARAM_STR);
$stmt->bindParam(":genero", $datosModelo["genero"], PDO::PARAM_STR);
$stmt->bindParam(":area", $datosModelo["area"], PDO::PARAM_INT);

        if($stmt->execute()){

        return "success";

        }

        else{

        return "error";

        }

$stmt->close();

}



# EDITAR EMPLEADO
#-------------------------------------

public static function editarEmpleadoModelo($datosModelo,$tabla){




$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id=$datosModelo");

$stmt->execute();

return $stmt->fetch();

$stmt->close();




}




#ACTULIZÁCIÓN DE EMPLEADOS
#-------------------------------------

public static function actualizarEmpleadoModelo($datosModelo,$tabla){



$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
 pnombre=:pnombre,
 snombre=:snombre,
 papellido=:papellido,
 sapellido=:sapellido,
 correo=:correo,
 genero=:genero,
 area=:area


 where id=:id");


$stmt->bindParam(":pnombre", $datosModelo["primernombre"], PDO::PARAM_STR);
$stmt->bindParam(":snombre", $datosModelo["segundonombre"], PDO::PARAM_STR);
$stmt->bindParam(":papellido", $datosModelo["primerapellido"], PDO::PARAM_STR);
$stmt->bindParam(":sapellido", $datosModelo["segundoapellido"], PDO::PARAM_STR);
$stmt->bindParam(":correo", $datosModelo["correo"], PDO::PARAM_STR);
$stmt->bindParam(":genero", $datosModelo["genero"], PDO::PARAM_STR);
$stmt->bindParam(":area", $datosModelo["area"], PDO::PARAM_INT);
$stmt->bindParam(":id", $datosModelo["idempleadoedit"], PDO::PARAM_INT);






if($stmt->execute())
{

return "success";

}

else{

return "error";

}

$stmt->close();




}



#BORRAR EMPLEADO
#-------------------------------------

public static function eliminarEmpleadoModelo($datosModel, $tabla){

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















}//FIN CLASE PRINCIPAL
