<?php

require_once "../../../Controlador/Controlador_interfaz.php";
require_once "../../../Modelo/crud_interfaz.php";

class Ajax_interfaz{


    public $consultasubmodulos;
    public $consultacategoria;
    public $consultainputs;
    public $consultaPlantillas;


    

    
//********************* METODO CONSULTA SUBMODULOS  *******************************		

public function consultarsubmoduloiaAjax(){

    $consultasubmodulos = $this->consultasubmodulos;
    

    $respuesta = Controlador_interfaz::consultaSubmodulosControlador($consultasubmodulos); 

    

    }





//********************* METODO CONSULTA CATEGORIAS  *******************************		

public function consultarCategoriaAjax(){

    $categoriaConsulta = $this->consultacategoria;
    

    $respuesta = Controlador_interfaz::consultaCategoriasControlador($categoriaConsulta); 

    

}




//********************* METODO CONSULTA INPUTS  *******************************		

public function consultarinputsAjax(){

    $consultainputs = $this->consultainputs;
    

    $respuesta = Controlador_interfaz::consultainputsControlador($consultainputs); 
    echo $respuesta;
    

}




//********************* METODO CONSULTA PLANTILLAS  *******************************		

public function consultarPlantillasAjax(){

    $categoriaId = $this->consultaPlantillas;
    

    $respuesta = Controlador_interfaz::consultarPlantillasControlador($categoriaId); 
    echo $respuesta;
    

}


}//FIN CLASE PRINCIPAL









if(isset( $_POST["modulo"])){
	
	$a = new Ajax_interfaz();
	$a -> consultasubmodulos = $_POST["modulo"];
	$a -> consultarsubmoduloiaAjax();

}


if(isset( $_POST["submodulo"])){
	
	$b = new Ajax_interfaz();
	$b-> consultacategoria = $_POST["submodulo"];
	$b -> consultarCategoriaAjax();

}


if(isset( $_POST["categoria"])){
	
	$c = new Ajax_interfaz();
	$c-> consultainputs = $_POST["categoria"];
	$c -> consultarinputsAjax();

}



if(isset( $_POST["categoriaId"])){
	
	$d = new Ajax_interfaz();
	$d-> consultaPlantillas = $_POST["categoriaId"];
	$d -> consultarPlantillasAjax();

}
