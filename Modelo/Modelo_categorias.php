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




    #-------------------------------------
    public  static function crearcategoriaModelo($data){



    $stmt = Conexion::conectar()->prepare("


        INSERT INTO categoria (nom_cat,desc_cat,est_cat) VALUES (:nombre,:descripcion,1)");	

              
        $stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $data["descripcion"], PDO::PARAM_STR);

                
                    if($stmt->execute()){

                        return "success";

                    }

                    else{

                        return "error";

                    }

                    $stmt->close();

                }

    









}//FIN CLASE PRINCIPAL