<?php
	require_once "Conexion.php";
	class DatosEventos extends Conexion{





#CONSULTA  DE PLANIFICADOR DE EVENTOS
#-------------------------------------


public static function consulPlanifiEventosModelo(){


    


    $stmt = Conexion::conectar()->prepare("SELECT * FROM INFORMATION_SCHEMA.PROCESSLIST where USER='event_scheduler'");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();


}



#INGRESO DE EVENTOS
#-------------------------------------

public static function ingresarEventoModelo($tipo,$namesinespacio,$intervalo,$recurrencia,$datetime,$comentario){


if ($tipo==1) {
    $stmt = Conexion::conectar()->prepare("
    
    CREATE DEFINER=`root`@`localhost` EVENT $namesinespacio 
    ON SCHEDULE EVERY $intervalo $recurrencia STARTS '$datetime' 
    ON COMPLETION NOT PRESERVE  
    ENABLE COMMENT '$comentario'
    DO update controlalertpausaa set cntr_pa_pa =0
    
    
    
    ");	
}


if ($tipo==2) {
    $stmt = Conexion::conectar()->prepare("
    
    CREATE DEFINER=`root`@`localhost` EVENT $namesinespacio 
    ON SCHEDULE EVERY $intervalo $recurrencia STARTS '$datetime' 
    ON COMPLETION NOT PRESERVE  
    ENABLE COMMENT '$comentario'
    DO update controlalertpausaa set cntr_pa_di =0
    
    
    
    ");	
}


if ($tipo==3) {
    $stmt = Conexion::conectar()->prepare("
    
    CREATE DEFINER=`root`@`localhost` EVENT $namesinespacio 
    ON SCHEDULE EVERY $intervalo $recurrencia STARTS '$datetime' 
    ON COMPLETION NOT PRESERVE  
    ENABLE COMMENT '$comentario'
    DO update controlalertacces set acc_acc1 =0,acc_acc2 =0
    
    
    
    ");	
}




    
    
    
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}
















#CONSULTA  DE EVENTOS
#-------------------------------------


public static function consultarEventosModelo(){


    


    $stmt = Conexion::conectar()->prepare("SELECT * FROM INFORMATION_SCHEMA.EVENTS");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();


}

#BORRAR DE EVENTOS
#-------------------------------------

public static function borrarEventosModelo($datosModel){

    $stmt = Conexion::conectar()->prepare("DROP EVENT $datosModel");
    

    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();

}







#ACTUALIZAR PALNIFAICARO DE EVENTOS
#-------------------------------------


public static function actualizarPLanifiEventosiaEvento($stevento){


    
    if ($stevento=="true") {
        $stmt = Conexion::conectar()->prepare("
        
        SET GLOBAL event_scheduler = ON;
        
        
        ");	
    }
    

    if ($stevento=="false") {
        $stmt = Conexion::conectar()->prepare("
        
        SET GLOBAL event_scheduler = OFF;
        
        ");	
    }
    


    if($stmt->execute()){

        return "success";

    }

    else{

        return "error";

    }

    $stmt->close();;


}












}


     