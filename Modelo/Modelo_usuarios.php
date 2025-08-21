<?php
require_once "Conexion.php";

class Datosusuario extends Conexion{

    


    # LOGIN USUARIO
#-------------------------------------
    public  static function obtenerUsuariosModelo(){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM viw_usuarios");	

        
        
        $stmt->execute();
        
        return $stmt->fetchAll();

        $stmt->close();

    }





    #-------------------------------------
    public  static function resetPawwordModelo($data){



    $stmt = Conexion::conectar()->prepare("update  usuarios set `password`=:newPass where id=:id");	

              
        $stmt->bindParam(":id", $data["id_usuario"], PDO::PARAM_INT);
        $stmt->bindParam(":newPass", $data["new_pass"], PDO::PARAM_STR);

                
                    if($stmt->execute()){

                        return "success";

                    }

                    else{

                        return "error";

                    }

                    $stmt->close();

                }

    


















}//FIN CLASE PRINCIPAL