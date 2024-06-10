<?php //************* ADMINISTRACION DE BOTONES **************



class Controlador_parametros{



//************* CONSULTA DE PAPRAMETROS **************


public function consParametrosControlador(){


    $respuesta = Datosparametros::consParametrosModelo("parametros");

    foreach ($respuesta as $row => $item) {


            if ($item["id"]==1) {
                        
                            echo'
                            <input type="hidden" id="tiempo" value="'.$item["valor"].'">
                            
                                ';


                        }
                                                
        
            }


 


}

}

