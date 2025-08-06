<?php
require_once "Conexion.php";

class DatoscategoriaSub extends Conexion{

    


    # LOGIN USUARIO
#-------------------------------------
    public  static function obtnerCategoriaSub_subModelo($id_subcategoria,$estadoSubcategoria){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM viw_categoriasSub_sub where  id_subcategoria = :id_subcategoria and estado_subcategoria=:est_subcategoria");	

        $stmt->bindParam(":id_subcategoria", $id_subcategoria, PDO::PARAM_INT);
        $stmt->bindParam(":est_subcategoria", $estadoSubcategoria, PDO::PARAM_INT);
        
        
        $stmt->execute();
        
       return $stmt->fetchAll();

        $stmt->close();

    }








}//FIN CLASE PRINCIPAL