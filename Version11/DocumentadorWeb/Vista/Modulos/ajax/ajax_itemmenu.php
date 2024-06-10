<?php
require_once "../../../Controlador/Controlador_itemmenu.php";
require_once "../../../Modelo/crud_itemmenu.php";



class Ajax{


    public $itemmenu;

//********************* METODO CONSULTA CATEGORIAS ALL *******************************		

                    public function consultableItemenuAjax(){

                        $itemmenu = $this->itemmenu;
                        $respuesta = Controlador_itemmenu::conTableItemMenuControlador($itemmenu); 

                        

                        echo $respuesta;

                        

                    }




}






if(isset( $_POST["itemmenu"])){
	
        $a = new Ajax();
        $a -> itemmenu = $_POST["itemmenu"];
        $a -> consultableItemenuAjax();
    
    }