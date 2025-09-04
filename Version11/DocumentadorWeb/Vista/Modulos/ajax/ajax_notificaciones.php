<?php

require_once "../../../Controlador/Controlador_notas.php";
require_once "../../../Modelo/crud_notas.php";

class Ajax_notificaciones{



    

    

//********************* ACTUALIZAR NOTAS  *******************************		

public function consulNotificacionesAjax(){

    echo "consultado";


    

}




}//FIN CLASE PRINCIPAL









if(isset( $_POST["consulNotificaciones"])){
	
	$f = new Ajax_notificaciones();
	$f -> consulNotificacionesAjax();

}
