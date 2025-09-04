<?php

require_once "../../../Controlador/Controlador_adminObjetivos.php";

require_once "../../../Modelo/Modelo_adminObjetivos.php";


class Ajax_adminObjetivos{

    public $idcurso; 



    public function consDetalleCursoAjax(){

        $idcurso = $this->idcurso;
        
        
        $respuesta = Controlador_adminObjetivos::consDetalleCursoControlador($idcurso);
   
        

    }









 }// fin clase principal




 if(isset( $_POST["idcursoconsul"])){
	
	$a = new Ajax_adminObjetivos();
	$a -> idcurso = $_POST["idcursoconsul"];
	$a -> consDetalleCursoAjax();

}

