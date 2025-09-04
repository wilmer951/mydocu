<?php

require_once "../../../Controlador/Controlador_adminModulos.php";

require_once "../../../Modelo/Modelo_adminModulos.php";


class Ajax_adminModulos{

    public $idModulo; 



    public function consEditarModuloAjax(){

        $idModulo = $this->idModulo;
        
        $respuesta = Controlador_adminModulos::consEditarModuloControlador($idModulo);
        
   
        

    }









 }// fin clase principal




 if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_adminModulos();
	$a -> idModulo = $_POST["ideditar"];
	$a -> consEditarModuloAjax();

}

