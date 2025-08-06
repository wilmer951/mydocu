<?php
require_once "Conexion.php";

class Datoscategoria extends Conexion{

    


    # LOGIN USUARIO
#-------------------------------------
    public  static function obtnercategoriaModelo($status){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM viw_categorias where estado_categoria=:status");	


      $stmt->bindParam(":status", $status, PDO::PARAM_INT);
        
        
        $stmt->execute();
        
        return $stmt->fetchAll();

        $stmt->close();

    }








}//FIN CLASE PRINCIPAL