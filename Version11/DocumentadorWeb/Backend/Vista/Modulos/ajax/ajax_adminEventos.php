<?php

require_once "../../../Controlador/Controlador_eventos.php";

require_once "../../../Modelo/Modelo_eventos.php";


class Ajax_eventos{


    public $stevento;

//ACTUALIZAR PLANIFICADOR DE EVENTOS

    public function actualizarPLanifiEventosiaAjax(){

        $stevento = $this->stevento;
        
    
        
        $respuesta = Controlador_eventos::actualizarPLanifiEventosiaControlador($stevento); 
    
        
    
    }
    




}





    if(isset( $_POST["stevento"])){
	
        $a = new Ajax_eventos();
        $a-> stevento = $_POST["stevento"];
        $a -> actualizarPLanifiEventosiaAjax();
    
    }
    

