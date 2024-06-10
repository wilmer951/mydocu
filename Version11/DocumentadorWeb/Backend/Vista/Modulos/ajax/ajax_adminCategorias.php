<?php

require_once "../../../Controlador/Controlador_adminCategorias.php";

require_once "../../../Modelo/Modelo_adminCategorias.php";


class Ajax_adminCategorias{


public $consultasubmodulos;
public $idCategoria;




//********************* METODO CONSULTA SUBMODULOS  *******************************		

public function consultarsubmoduloiaAjax(){

    $consultasubmodulos = $this->consultasubmodulos;
    

    $respuesta = Controlador_adminCategorias::consultaSubmodulosControlador($consultasubmodulos); 

    

}





public function consEditarCategoriaAjax(){

    $idCategoria = $this->idCategoria;
    
    $respuesta = Controlador_adminCategorias::consEditarCategoriaControlador($idCategoria);
    

    

}





}





if(isset( $_POST["modulo"])){
	
	$a = new Ajax_adminCategorias();
	$a-> consultasubmodulos = $_POST["modulo"];
	$a -> consultarsubmoduloiaAjax();

}



if(isset( $_POST["ideditar"])){
	
	$b = new Ajax_adminCategorias();
	$b -> idCategoria = $_POST["ideditar"];
	$b -> consEditarCategoriaAjax();

}





