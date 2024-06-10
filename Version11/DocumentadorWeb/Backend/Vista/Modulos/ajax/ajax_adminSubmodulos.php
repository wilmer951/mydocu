<?php

require_once "../../../Controlador/Controlador_adminSubmodulos.php";

require_once "../../../Modelo/Modelo_adminSubmodulos.php";


class Ajax_adminSubmodulos{


 

    public $idSmodulo; 



    public function consEditarSubmoduloAjax(){

        $idSmodulo = $this->idSmodulo;
        
        $respuesta = Controlador_adminSubmodulos::consEditarSuboduloControlador($idSmodulo);
        
   
        

    }








}//fin clase principal





if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_adminSubmodulos();
	$a -> idSmodulo = $_POST["ideditar"];
	$a -> consEditarSubmoduloAjax();

}



