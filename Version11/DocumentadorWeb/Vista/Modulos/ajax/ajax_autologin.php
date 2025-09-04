<?php

require_once "../../../Controlador/Controlador_autologin.php";


class Ajax_Autologin{



//********************* CONSULTAR VARIABLE DE SESION ACTIVA   *******************************		

public function autoLoginAjax(){

    
    
    $respuesta = Controlador_autoLogin::autoLoginControlador(); 
    
    
    

}




}//FIN CLASE PRINCIPAL









if(isset( $_POST["consultLogin"])){
	
	$t = new Ajax_Autologin();
	$t -> autoLoginAjax();

}
