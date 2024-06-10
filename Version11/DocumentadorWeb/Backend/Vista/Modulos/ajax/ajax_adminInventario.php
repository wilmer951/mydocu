<?php

require_once "../../../Controlador/Controlador_adminInventario.php";

require_once "../../../Modelo/Modelo_adminInventario.php";


class Ajax_adminInventario{



    public $idItemIven; 
    public $idasig; 
    public $ideditelemneto;
    public $idelemnt;

    public $idacceso; 
    public $cantacce; 
    public $obseacce; 


    public $comproserial; 
    public $comPlacaidem; 


    
    
    


    


    



    public function consEditarItemIventaAjax(){

        $idItemIven = $this->idItemIven;
        
        $respuesta = Controlador_adminInventario::consEditarItemIventaControlador($idItemIven);
        
   
        

    }



    


    public function consAsigancionItemIventarioAjax(){

        $idasig = $this->idasig;
        
        $respuesta = Controlador_adminInventario::consAsigancionItemIventarioControlador($idasig);
        
   
        

    }







    public function consEditelementIventarioAjax(){

        $ideditelemneto = $this->ideditelemneto;
        
        $respuesta = Controlador_adminInventario::consEditelementIventarioControlador($ideditelemneto);
        
   
        

    }

    


    public function consDetallIventarioAjax(){

        $idelemnt = $this->idelemnt;
   
     $respuesta = Controlador_adminInventario::consDetallIventarioControlador($idelemnt);
     

    }

    
    public function registrarAccesorioAjax(){

        $idacceso = $this->idacceso;
        $cantacce = $this->cantacce;
        $obseacce = $this->obseacce;
   

        $respuesta = Controlador_adminInventario::registrarAccesorioControlador($idacceso,$cantacce,$obseacce);
        
     

    }



    public function comprobarSerialAjax(){

        $comproserial = $this->comproserial;
        
   

        $respuesta = Controlador_adminInventario::comprobarSerialControlador($comproserial);
        
     

    }



    public function comprobarPlacaIdemialAjax(){

        $comPlacaidem = $this->comPlacaidem;
        
   

        $respuesta = Controlador_adminInventario::comprobarPlacaIdemialControaldor($comPlacaidem);
        
     

    }


    

	
    
    


}






if(isset( $_POST["ideditar"])){
	
	$a = new Ajax_adminInventario();
	$a -> idItemIven = $_POST["ideditar"];
	$a -> consEditarItemIventaAjax();

}





if(isset( $_POST["idasig"])){
	
	$b = new Ajax_adminInventario();
	$b -> idasig = $_POST["idasig"];
	$b -> consAsigancionItemIventarioAjax();

}


if(isset( $_POST["ideditarelement"])){
	
	$b = new Ajax_adminInventario();
	$b -> ideditelemneto = $_POST["ideditarelement"];
	$b -> consEditelementIventarioAjax();

}



if(isset( $_POST["idelemnt"])){
	
	$c = new Ajax_adminInventario();
	$c -> idelemnt = $_POST["idelemnt"];
	$c -> consDetallIventarioAjax();

}



if(isset( $_POST["idacceso"])){
	
	$d = new Ajax_adminInventario();
	$d -> idacceso = $_POST["idacceso"];
    $d -> cantacce = $_POST["cantacce"];
    $d -> obseacce = $_POST["obseacce"];
	$d -> registrarAccesorioAjax();

}



if(isset( $_POST["comproserial"])){
	
	$f = new Ajax_adminInventario();
	$f -> comproserial = $_POST["comproserial"];
	$f -> comprobarSerialAjax();

}




if(isset( $_POST["comPlacaidem"])){
	
	$g = new Ajax_adminInventario();
	$g -> comPlacaidem = $_POST["comPlacaidem"];
	$g -> comprobarPlacaIdemialAjax();

}

