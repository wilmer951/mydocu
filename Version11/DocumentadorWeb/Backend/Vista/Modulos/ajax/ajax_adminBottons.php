<?php

require_once "../../../Controlador/Controlador_adminBottons.php";

require_once "../../../Modelo/Modelo_adminBottons.php";


class Ajax_adminBottons{

    public $idButton; 



    public function consEditarButtonAjax(){

        $idButton = $this->idButton;
        
        $respuesta = Controlador_adminBottons::consEditarButtonControlador($idButton);
        
   
        

    }









 }// fin clase principal




 if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_adminBottons();
	$a -> idButton = $_POST["ideditar"];
	$a -> consEditarButtonAjax();

}

