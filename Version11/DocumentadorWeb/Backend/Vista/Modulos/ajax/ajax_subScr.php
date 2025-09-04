<?php

require_once "../../../Controlador/Controlador_subScr.php";

require_once "../../../Modelo/Modelo_subScr.php";


class Ajax_subScr{

    public $idScr; 



    public function consEditarScrAjax(){

        $idScr = $this->idScr;
        
        $respuesta = Controlador_subScr::consEditarScrControlador($idScr);
        
   
        

    }









 }// fin clase principal




 if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_subScr();
	$a -> idScr = $_POST["ideditar"];
	$a -> consEditarScrAjax();

}

