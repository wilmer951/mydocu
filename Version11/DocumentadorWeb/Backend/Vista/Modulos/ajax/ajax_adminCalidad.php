<?php

require_once "../../../Controlador/Controlador_adminCalidad.php";

require_once "../../../Modelo/Modelo_adminCalidad.php";


class Ajax_adminCalidad{


    public $iddetallcalidad; 

    



                public function consDetalleCalidadAjax(){

                    $iddetallcalidad = $this->iddetallcalidad;
                    
                    $respuesta = Controlador_adminCalidad::consDetalleCalidadControlador($iddetallcalidad);
                    
            
                    

                }










                public function consGraficoGeneralCalidadAjax(){

                    $respuesta = Controlador_adminCalidad::consGraficoGeneralCalidadControlador();
                    
           
                       

                    }






                    public function consGraficoCategoraisCalidadAjax(){

           

                       
                    $respuesta = Controlador_adminCalidad::consGraficoCategoraisControlador();
                        
               
                           
    
                        }
    
    



                    



    
}





    
    if(isset( $_POST["idcalidad"])){
	
        $a = new Ajax_adminCalidad();
        $a -> iddetallcalidad = $_POST["idcalidad"];
        $a -> consDetalleCalidadAjax();


            }



            if(isset( $_POST["stcalidad"])){
	
                $b = new Ajax_adminCalidad();
                $b -> consGraficoGeneralCalidadAjax();
            
            }      
            
        
         
            
            if(isset( $_POST["graficacategorias"])){
	
                $c = new Ajax_adminCalidad();
                $c -> consGraficoCategoraisCalidadAjax();
            
            }      
            


            