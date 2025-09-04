<?php

require_once "../../../Controlador/Controlador_adminPausasActivas.php";

require_once "../../../Modelo/Modelo_adminPausasActivas.php";


class Ajax_adminPausaActiva{


        public $idpausa;
        public $rango;
        public $dias;


        public $fechainicio;
        public $fechafin;
        
        

        


    
    



    //************************************************************ */
    public function consEditarPausaactivanAjax(){

        $idpausa = $this->idpausa;
        

        $respuesta = Controlador_adminPausasActivas::consEditarPausaActivaControlador($idpausa);
        
   
        

    }




//**  ACTUALIZAR RANGO DE TIEPM PAUSA ACTIVA***** */

    public function actualizarRangoTiempoAjax(){

        $rango = $this->rango;
        

        $respuesta = Controlador_adminPausasActivas::actualizarRangoTiempoControlador($rango);
        
   
        

    }


//**  ACTUALIZAR DIAS CAMBIO ACCEOSRIOS***** */

public function actualizarDiasCambioAcceAjax(){

    $dias = $this->dias;
    

    $respuesta = Controlador_adminPausasActivas::actualizarDiasCambioAcceControlador($dias);

}




    //**  CONSULTAR RESUMEN PAUSAS ACTIVAS***** */

public function consResumenPausasActivasAjax(){

    $fechainicio = $this->fechainicio;
    $fechafin = $this->fechafin;
    

    $respuesta = Controlador_adminPausasActivas::consResumenPausasActivasControlador($fechainicio,$fechafin);

}










}// fin clase principal








 if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_adminPausaActiva();
	$a -> idpausa = $_POST["ideditar"];
	$a -> consEditarPausaactivanAjax();

}


if(isset( $_POST["rango"])){
	
	$b = new Ajax_adminPausaActiva();
	$b -> rango = $_POST["rango"];
	$b -> actualizarRangoTiempoAjax();

}


if(isset( $_POST["dias"])){
	
	$c = new Ajax_adminPausaActiva();
	$c -> dias = $_POST["dias"];
	$c -> actualizarDiasCambioAcceAjax();

}






if(isset( $_POST["resumen"])){
	
	$d = new Ajax_adminPausaActiva();
    $d -> fechainicio = $_POST["fechainicial"];
    $d -> fechafin = $_POST["fechafin"];
	$d -> consResumenPausasActivasAjax();

}



