<?php

require_once "../../../Controlador/Controlador_subCmd.php";

require_once "../../../Modelo/Modelo_subCmd.php";


class Ajax_subCmd{

    public $idCmd; 



    public function consEditarCmdAjax(){

        $idCmd = $this->idCmd;
        
        $respuesta = Controlador_subCmd::consEditarCmdControlador($idCmd);
        
   
        

    }









 }// fin clase principal




 if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_subCmd();
	$a -> idCmd = $_POST["ideditar"];
	$a -> consEditarCmdAjax();

}

