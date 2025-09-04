<?php
require_once "Conexion.php";

class Datoslogin extends Conexion{

    


    # LOGIN USUARIO
#-------------------------------------
    public  static function loginModelo($datosModelo, $tabla){


        $stmt = Conexion::conectar()->prepare("SELECT id,usuario,nombres,password,id_login,rol,estado  FROM $tabla WHERE usuario = :usuario and password=:password");	

        
        $stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModelo["password"], PDO::PARAM_STR);
        
        $stmt->execute();
        
        return $stmt->fetch();

        $stmt->close();

    }



#PRIMER LOGIN
#-------------------------------------
    public  static function primerLoginModelo($datosModelo, $tabla){


        $stmt = Conexion::conectar()->prepare("SELECT id_login  FROM $tabla WHERE usuario = $datosModelo");	

        
        
        $stmt->execute();
        
        return $stmt->fetch();

        $stmt->close();

    }



#ACTUALIZAR ULTIMO LOGIN
#-------------------------------------
    public  static function ultimoLoginModelo($datosModelo, $tabla){


        $stmt = Conexion::conectar()->prepare("

         UPDATE $tabla set ult_login=CURRENT_TIMESTAMP  WHERE id=$datosModelo");	

            
        
        $stmt->execute();
        
        return $stmt->fetch();

        $stmt->close();



    }

#-------------------------------------

    public static function cambiarPassModelo($datosModelo,$tabla){



        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
        password=:password,id_login=0 where usuario=:usuario");	
        
    
        $stmt->bindParam(":password", $datosModelo["password"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);


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