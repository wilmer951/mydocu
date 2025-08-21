<?php
require_once "Conexion.php";

class Datoslogin extends Conexion{

    


    # LOGIN USUARIO
#-------------------------------------
    public  static function loginModelo($datosModelo, $tabla){


        $stmt = Conexion::conectar()->prepare("SELECT id,usuario,nombres,password,id_login,rol,estado  FROM $tabla WHERE usuario = :usuario");	

        
        $stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
        
        
        $stmt->execute();
        
        return $stmt->fetch();

        $stmt->close();

    }








}//FIN CLASE PRINCIPAL