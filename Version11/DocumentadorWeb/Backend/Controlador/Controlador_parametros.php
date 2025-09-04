<?php //************* ADMINISTRACION DE PARAMTEROS **************



class Controlador_parametrosadm{



//************* CONSULTA DE PAPRAMETROS **************


public function consParametrosControlador(){



    $respuesta = Datosparametros::consParametrosModeloadm("parametros");

    foreach ($respuesta as $row => $item) {

            if ($item["id"]==1) {
                                
                echo'
                <input type="hidden" id="tiempo" value="'.$item["valor"].'">
                
                
                
                    ';


            }

        }
                            

}



    }
