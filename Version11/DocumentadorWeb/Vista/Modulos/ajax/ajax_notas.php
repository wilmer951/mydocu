<?php

require_once "../../../Controlador/Controlador_notas.php";
require_once "../../../Modelo/crud_notas.php";

class Ajax_notas{


    public $actualizarnotas;



    

    

//********************* ACTUALIZAR NOTAS  *******************************		

public function actualizarnotasajax(){

    $actualizarnotas = $this->actualizarnotas;
    
    $respuesta = Controlador_notas::actualizarNotasControador($actualizarnotas); 
    
    

}




}//FIN CLASE PRINCIPAL









if(isset( $_POST["notas"])){
	
	$f = new Ajax_notas();
	$f -> actualizarnotas = $_POST["notas"];
	$f -> actualizarnotasajax();

}
