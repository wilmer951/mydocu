<?php
	require_once "Conexion.php";
	class DatosAdminCategorias extends Conexion{

#CONSULTA  DE CATEGORIAS
#-------------------------------------


public static function consultarCategoriasModelo($tabla){

    
    $stmt = Conexion::conectar()->prepare("SELECT 

        modulos.mod_nom,
        modulos.mod_id,
        submodulos.sub_id,
        categorias.cate_id,
        submodulos.sub_nom,
        categorias.cate_sub_id,
        categorias.cate_nom,
        categorias.estado, 
        categorias.cate_des1,
        categorias.cate_des2,
        categorias.cate_dia1,
        categorias.cate_dia2,
        categorias.cate_sol1,
        categorias.cate_sol2,
        categorias.cate_inp_des1,
        categorias.cate_inp_des2,
        categorias.cate_inp_dia1,
        categorias.cate_inp_dia2,
        categorias.cate_inp_sol1,
        categorias.cate_inp_sol2,
        categorias.cate_tip_id,
        categorias.cate_sev_id,
        categorias.cate_fre_id,
        categorias.cate_check,
        categorias.estado



    FROM $tabla 

    inner JOIN submodulos ON categorias.cate_sub_id=submodulos.sub_id
    inner join modulos on submodulos.sub_mod_id=modulos.mod_id

    ");	


$stmt->execute();
return $stmt->fetchAll();

$stmt->close();




}





#CONSULTA  DE SUBMODULOS CATEGORIAS
#-------------------------------------


public static function consultaSubmodulosModelo($idsubmodulo,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT sub_id,sub_nom FROM $tabla where sub_mod_id= $idsubmodulo");	



    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}



#CONSULTA  DE INPUTS CATEGORIAS
#-------------------------------------


public static function consultarInputsModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT inp_id,inp_nom,inp_des FROM $tabla ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}




#INGRESO DE CATEGORIA
#-------------------------------------

public static function ingresarCategoriaModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("


        INSERT INTO $tabla (
        cate_sub_id,
        cate_nom,
        cate_des1,
        cate_inp_des1,
        cate_des2,
        cate_inp_des2,
        cate_dia1,
        cate_inp_dia1,
        cate_dia2,
        cate_inp_dia2,
        cate_sol1,
        cate_inp_sol1,
        cate_sol2,
        cate_inp_sol2,
        cate_tip_id,
        cate_sev_id,
        cate_fre_id,
        cate_check,
        estado)


         VALUES (
         :idsubmodulo,
         :titulo,
         :des1,
         :inp_des1,
         :des2,
         :inp_des2,
         :dia1,
         :inp_dia1,
         :dia2,
         :inp_dia2,
         :sol1,
         :inp_sol1,
         :sol2,
         :inp_sol2,
         :tipo,
         :seve,
         :fre,
         null,
         :estado)");	

         






    
    $stmt->bindParam(":idsubmodulo", $datosModelo["idsub"], PDO::PARAM_INT);
    $stmt->bindParam(":titulo", $datosModelo["titulo"], PDO::PARAM_STR);
    $stmt->bindParam(":des1", $datosModelo["des1"], PDO::PARAM_STR);
    $stmt->bindParam(":inp_des1", $datosModelo["inp_des1"], PDO::PARAM_INT);
    $stmt->bindParam(":des2", $datosModelo["des2"], PDO::PARAM_STR);
    $stmt->bindParam(":inp_des2", $datosModelo["inp_des2"], PDO::PARAM_INT);
    $stmt->bindParam(":dia1", $datosModelo["dia1"], PDO::PARAM_STR);
    $stmt->bindParam(":inp_dia1", $datosModelo["inp_dia1"], PDO::PARAM_INT);
    $stmt->bindParam(":dia2", $datosModelo["dia2"], PDO::PARAM_STR);
    $stmt->bindParam(":inp_dia2", $datosModelo["inp_dia2"], PDO::PARAM_INT);
    $stmt->bindParam(":sol1", $datosModelo["sol1"], PDO::PARAM_STR);	
    $stmt->bindParam(":inp_sol1", $datosModelo["inp_sol1"], PDO::PARAM_INT);
    $stmt->bindParam(":sol2", $datosModelo["sol2"], PDO::PARAM_STR);	
    $stmt->bindParam(":inp_sol2", $datosModelo["inp_sol2"], PDO::PARAM_INT);
    $stmt->bindParam(":tipo", $datosModelo["tipo"], PDO::PARAM_INT);
    $stmt->bindParam(":seve", $datosModelo["seve"], PDO::PARAM_INT);
    $stmt->bindParam(":fre", $datosModelo["fre"], PDO::PARAM_INT);
    $stmt->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_INT);

    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}




#CONSULTA EDITAR CATEGORIAS.
#-------------------------------------

public static function consEditarCategoriaModelo($idSmodulo,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT 
    
    
    
    modulos.mod_nom,
        modulos.mod_id,
        submodulos.sub_id,
        categorias.cate_id,
        submodulos.sub_nom,
        categorias.cate_sub_id,
        categorias.cate_nom,
        categorias.estado, 
        categorias.cate_des1,
        categorias.cate_des2,
        categorias.cate_dia1,
        categorias.cate_dia2,
        categorias.cate_sol1,
        categorias.cate_sol2,
        categorias.cate_inp_des1,
        categorias.cate_inp_des2,
        categorias.cate_inp_dia1,
        categorias.cate_inp_dia2,
        categorias.cate_inp_sol1,
        categorias.cate_inp_sol2,
        categorias.cate_tip_id,
        categorias.cate_sev_id,
        categorias.cate_fre_id,
        categorias.cate_check,
        categorias.estado

    FROM $tabla 

    inner JOIN submodulos ON categorias.cate_sub_id=submodulos.sub_id
    inner join modulos on submodulos.sub_mod_id=modulos.mod_id
    
     where  cate_id=:idmodulo");	

    $stmt->bindParam(":idmodulo",$idSmodulo, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}
    





#ACTUALIZAR CATEGORIAS
#-------------------------------------

public static function actualizarcategoriaModelo($datosModelo, $tabla){


    $stmt = Conexion::conectar()->prepare("


        UPDATE $tabla 
        
    set 	cate_sub_id=:idsubm,
        cate_nom=:titulo,
        cate_des1=:des1,
        cate_inp_des1=:inp_des1,
        cate_des2=:des2,
        cate_inp_des2=:inp_des2,
        cate_dia1=:dia1,
        cate_inp_dia1= :inp_dia1,
        cate_dia2=:dia2,
        cate_inp_dia2=:inp_dia2,
        cate_sol1=:sol1,
        cate_inp_sol1=:inp_sol1,
        cate_sol2=:sol2,
        cate_inp_sol2=:inp_sol2,
        cate_tip_id=:tipo,
        cate_sev_id=:seve,
        cate_fre_id=:fre,
        estado=:estado

        where cate_id=:idcat

    ");	








    $stmt->bindParam(":idcat", $datosModelo["idcate"], PDO::PARAM_INT);
    $stmt->bindParam(":idsubm", $datosModelo["idsub"], PDO::PARAM_INT);
    $stmt->bindParam(":titulo", $datosModelo["titulo"], PDO::PARAM_STR);
    $stmt->bindParam(":des1", $datosModelo["des1"], PDO::PARAM_STR);
    $stmt->bindParam(":inp_des1", $datosModelo["inp_des1"], PDO::PARAM_INT);
    $stmt->bindParam(":des2", $datosModelo["des2"], PDO::PARAM_STR);
    $stmt->bindParam(":inp_des2", $datosModelo["inp_des2"], PDO::PARAM_INT);
    $stmt->bindParam(":dia1", $datosModelo["dia1"], PDO::PARAM_STR);
    $stmt->bindParam(":inp_dia1", $datosModelo["inp_dia1"], PDO::PARAM_INT);
    $stmt->bindParam(":dia2", $datosModelo["dia2"], PDO::PARAM_STR);		
    $stmt->bindParam(":inp_dia2", $datosModelo["inp_dia2"], PDO::PARAM_INT);
    $stmt->bindParam(":sol1", $datosModelo["sol1"], PDO::PARAM_STR);		
    $stmt->bindParam(":inp_sol1", $datosModelo["inp_sol1"], PDO::PARAM_INT);
    $stmt->bindParam(":sol2", $datosModelo["sol2"], PDO::PARAM_STR);		
    $stmt->bindParam(":inp_sol2", $datosModelo["inp_sol2"], PDO::PARAM_INT);
    $stmt->bindParam(":tipo", $datosModelo["tipo"], PDO::PARAM_INT);
    $stmt->bindParam(":seve", $datosModelo["seve"], PDO::PARAM_INT);
    $stmt->bindParam(":fre", $datosModelo["fre"], PDO::PARAM_INT);
    $stmt->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_INT);

    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}



#BORRAR DE CATEGORIA
#-------------------------------------

public static function borrarCategoriaModelo($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cate_id = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}





}//fin clase principal