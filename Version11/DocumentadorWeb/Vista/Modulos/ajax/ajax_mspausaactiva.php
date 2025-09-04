<?php

require_once "../../../Controlador/Controlador_pausasactivas.php";
require_once "../../../Modelo/crud_pausaactiva.php";


class Ajax_msgpausaactiva{

//DECLARACIÓN DE VARIAVLES
    
    public $tipoalertapa;
    public $idmsgpausactiva;
    public $idAlertConfPausaActiva;
    public $confirmaciónAletPausaActiva;


    
// CONSULTAR MENSAJE DE PAUSAS ACTIVAS
    

public function  consultarMsgpausaactivaAjax(){

    $idmsgpausactiva = $this->idmsgpausactiva;
    $respuesta = Controlador_pausasactivas::pausasactivasControlador($idmsgpausactiva); 
    
}



// CONSULTAR EL INSTRUCTIVO DE PAUSAS ACTIVAS.

public function  instructivopausaactivaAjax(){

    

    $respuesta = Controlador_pausasactivas::instruactivasControlador(); 
    
}


// CONFIRMACIÓN DE PAUSAS ACTIVAS

public function  confirmarPausaActivaAjax(){

  

    $idAlertConfPausaActiva = $this->idAlertConfPausaActiva;
    $confirmaciónAletPausaActiva = $this->confirmaciónAletPausaActiva;
 
    
    $respuesta = Controlador_pausasactivas::ConfirmacionPausaActivaControlador($idAlertConfPausaActiva,$confirmaciónAletPausaActiva); 


    
}


// CONTROL DE PAUSAS ACTIVAS

public function  controlMsgPausasActivasAjax(){

  

                        $respuesta = Controlador_pausasactivas::controlMsgPausasActivasControlador(); 

                       

                  

}








 }//fin clase principal


 if(isset( $_POST["idmsgpausactiva"])){
	
	$w = new Ajax_msgpausaactiva();
    $w -> idmsgpausactiva = $_POST["idmsgpausactiva"];
	$w -> consultarMsgpausaactivaAjax();

}




if(isset( $_POST["tipoalertapa"])){
	
	$x = new Ajax_msgpausaactiva();
    $x -> tipoalertapa = $_POST["tipoalertapa"];
	$x -> instructivopausaactivaAjax();

}



if(isset( $_POST["idAlerPausaActiva"])){

	
	$Z = new Ajax_msgpausaactiva();
    $Z -> idAlertConfPausaActiva = $_POST["idAlerPausaActiva"];
    $Z -> confirmaciónAletPausaActiva = $_POST["btnconfirma"];
    $Z -> confirmarPausaActivaAjax();

}





if(isset( $_POST["controlMSGPausaactiva"])){

	
	$y = new Ajax_msgpausaactiva();        
    $y -> controlMsgPausasActivasAjax();

}


