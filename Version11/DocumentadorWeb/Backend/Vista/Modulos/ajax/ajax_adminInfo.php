<?php

require_once "../../../Controlador/Controlador_adminInfo.php";

require_once "../../../Modelo/Modelo_adminInfo.php";


class Ajax_adminInfo{

    
    public $idArti; 



    public function consEditarArtiAjax(){

        $idArti = $this->idArti;
        
        $respuesta = Controlador_adminInfo::consEditarArtiControlador($idArti);
        
   
        

    }




}





if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_adminInfo();
	$a -> idArti = $_POST["ideditar"];
	$a -> consEditarArtiAjax();

}

