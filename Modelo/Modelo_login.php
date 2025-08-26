<?php
require_once "Conexion.php";

class Datoslogin extends Conexion{

    


    # LOGIN USUARIO
#-------------------------------------
    public  static function loginModelo($datosModelo){


        $stmt = Conexion::conectar()->prepare("SELECT *  FROM vista_usuarios_con_roles WHERE usuario = :usuario");	

        
        $stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
        
        
        $stmt->execute();
        
        return $stmt->fetch();

        $stmt->close();

    }








}//FIN CLASE PRINCIPAL