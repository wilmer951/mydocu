<?php

require_once "../../../Controlador/Controlador_adminUsers.php";

require_once "../../../Modelo/Modelo_adminUsers.php";


class Ajax_adminUsers{




    public $idUsr; 



    public function consEditarUserAjax(){

        $idUsr = $this->idUsr;
        
        $respuesta = Controlador_adminUsers::consEditarUserControlador($idUsr);
        
   
        

    }






}


if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_adminUsers();
	$a -> idUsr = $_POST["ideditar"];
	$a -> consEditarUserAjax();

}

