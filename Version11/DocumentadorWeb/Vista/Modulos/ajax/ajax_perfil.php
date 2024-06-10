<?php
require_once "../../../Controlador/Controlador_perfil.php";
require_once "../../../Modelo/crud_perfil.php";




class Ajax_perfil{


    public $iddetallcalidad;
    public $idObjeti;

    










    public function consulParametroObjetivoAjax(){

        $idObjeti = $this->idObjeti;

        $respuesta = Controlador_Pefil::consulParametroObjetivoControaldor($idObjeti); 

        

        

    }







//********************* METODO CONSULTA CATEGORIAS ALL *******************************		

                    public function consulPerfilCalidadPefilAjax(){

                        

                        $respuesta = Controlador_Pefil::consulPerfilCalidadPefilControlador(); 

                        

                        

                    }










                    public function consDetalleCalidadAjax(){

                        $iddetallcalidad = $this->iddetallcalidad;
                        
                        $respuesta = Controlador_Pefil::consDetalleCalidadControlador($iddetallcalidad);
                        
                
                        
    
                    }
    
    


                    public function consulPerfilObjydemyPefilAjax(){

                        

                        $respuesta = Controlador_Pefil::consulPerfilObjydemyPefilControlador(); 

                        

                        

                    }





















}






if(isset( $_POST["consulCalidad"])){
	
        $a = new Ajax_perfil();
        $a -> consulPerfilCalidadPefilAjax();
    
    }





    if(isset( $_POST["idcalidad"])){
	
        $b = new Ajax_perfil();
        $b -> iddetallcalidad = $_POST["idcalidad"];
        $b -> consDetalleCalidadAjax();


            }




        

                    if(isset( $_POST["consUdemy"])){
	
                        $c = new Ajax_perfil();
                        $c -> consulPerfilObjydemyPefilAjax();
                    
                    }





                    if(isset( $_POST["idObjetivo"])){
	
                        $e = new Ajax_perfil();
                        $e -> idObjeti = $_POST["idObjetivo"];
                        $e -> consulParametroObjetivoAjax();
                
                
                            }
                
                

                    