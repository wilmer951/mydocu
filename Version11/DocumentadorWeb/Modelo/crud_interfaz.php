<?php
	
    require_once "Conexion.php";

class Datosinterfaz extends Conexion{



#CONSULTA  DE MODULOS
#-------------------------------------

    public static function consultaModulosModelo($tabla){


        $stmt = Conexion::conectar()->prepare("SELECT mod_id,mod_nom FROM $tabla where estado=1 ORDER BY mod_nom ASC");	


        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();

    }



#CONSULTA  DE SUBMODULOS
#-------------------------------------


    public static function consultaSubmodulosModelo($idsubmodulo,$tabla){


        $stmt = Conexion::conectar()->prepare("SELECT sub_id,sub_nom FROM $tabla where sub_mod_id= $idsubmodulo and estado=1 ORDER BY sub_nom ASC");	



        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();

    }




#CONSULTA  DE CATEGORIAS
#-------------------------------------


    public static function consultaCategoriasModelo($submodulo,$tabla){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE cate_sub_id=$submodulo and estado=1 ORDER BY cate_nom ASC");	


        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();

    }



#CONSULTA  DE INPUTS
#-------------------------------------


    public static function consultainputsModelo($categoria,$tabla){


        $stmt = Conexion::conectar()->prepare("SELECT inputs.inp_id,inputs.inp_des from $tabla 

                inner join inputs ON 
                categorias.cate_inp_des1=inputs.inp_id OR
                categorias.cate_inp_des2=inputs.inp_id or
                categorias.cate_inp_dia1=inputs.inp_id OR
                categorias.cate_inp_dia2=inputs.inp_id OR
                categorias.cate_inp_sol1=inputs.inp_id OR
                categorias.cate_inp_sol2=inputs.inp_id 

                WHERE categorias.cate_id=$categoria and estado=1 and inputs.inp_id!=1 ORDER BY inputs.inp_id ASC");	


            $stmt->execute();
            return $stmt->fetchAll();

            $stmt->close();

    }





#CONSULTA  DE PLANTILLAS
#-------------------------------------


    public static function consultarPlantillasModelo($categoria,$tabla){


         $stmt = Conexion::conectar()->prepare("SELECT * from $tabla 
    
            inner JOIN tip_solicitud ON
            categorias.cate_tip_id = tip_solicitud.id_tip
            inner JOIN severidad on 
            categorias.cate_sev_id = severidad.id_sev
            inner join frecuencia ON
            categorias.cate_fre_id = frecuencia.id_fre
        WHERE categorias.cate_id=$categoria and estado=1");	


        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();

    }



}//fin clase principal