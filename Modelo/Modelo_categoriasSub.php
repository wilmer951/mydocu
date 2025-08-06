<?php
require_once "Conexion.php";

class DatoscategoriaSub extends Conexion{

    


    # LOGIN USUARIO
#-------------------------------------
    public  static function obtnerCategoriaSubModelo($idCategoria,$estadoSubcategoria){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM viw_categoriasSub where  id_subcategoria = :id_categoria and estado_subcategoria=:est_subcategoria");	

        $stmt->bindParam(":id_categoria", $idCategoria, PDO::PARAM_INT);
        $stmt->bindParam(":est_subcategoria", $estadoSubcategoria, PDO::PARAM_INT);
        
        
        $stmt->execute();
        
       return $stmt->fetchAll();

        $stmt->close();

    }








}//FIN CLASE PRINCIPAL