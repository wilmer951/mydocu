<?php

require_once "../../../Controlador/Controlador_subPsw.php";

require_once "../../../Modelo/Modelo_subPsw.php";


class Ajax_subPsw{

    public $idPsw; 



    public function consEditarPswAjax(){

        $idPsw = $this->idPsw;
        
        $respuesta = Controlador_subPsw::consEditarPswControlador($idPsw);
        
   
        

    }









 }// fin clase principal




 if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_subPsw();
	$a -> idPsw = $_POST["ideditar"];
	$a -> consEditarPswAjax();

}

