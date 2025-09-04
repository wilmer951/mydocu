<?php

class Controlador_Pefil {




    public static function consulParametroObjetivoControaldor($idobjetivo){

     
        
        $respuesta = DatosPerfil::consulParametroObjetivoModelo($idobjetivo,"indicadores");
        echo json_encode($respuesta);





    }





  


    

//********************* METODO CONSULTAR MENSAJES DE ALERTA  *******************************	    
    public static function consulPerfilCalidadPefilControlador(){

        session_start();
        $usuario=$_SESSION["usuario"];


        $respuesta = DatosPerfil::consulPerfilCalidadPefilModelo("calidad",$usuario);
        echo json_encode($respuesta);

    }











//********************* METODO CONSULTAR MENSAJES DE ALERTA  *******************************	    
public static function consulPerfilObjydemyPefilControlador(){

    session_start();
    $usuario=$_SESSION["usuario"];


    $respuesta = DatosPerfil::consulPerfilObjydemyPefilModelo("obj_udemy",$usuario);
    echo json_encode($respuesta);





    

}






    public static function consDetalleCalidadControlador($iddetalcalidad){

        $respuesta = DatosPerfil::consDetalleCalidadModelo($iddetalcalidad,"calidad");
        
         echo json_encode($respuesta);
    
    
        
    
    }
    













    

    //************* INSERCIÓN  DE BOTONES **************
	#------------------------------------
	public function ingresarCursoControlador(){

		if(isset($_POST["namecurso"])){

				$nombrecurso= strtolower($_POST["namecurso"]);
				
                
                $usuario=$_SESSION["usuario"];


                                        $tipoarchivo = explode ("/", $_FILES['adjuntocurso']['type']);
                                        $extecion=$tipoarchivo[1];
                            
                                            if ($extecion=="png"||$extecion=="jpg"||$extecion=="jpeg") {
                                            
                                                
                                                $dir_subida = 'Vista/Imagenes/certiUdemy/';
                                                $tipoarchivo = explode ("/", $_FILES['adjuntocurso']['type']); 
                                                $aleatorio=rand(0,99999);
                                                $nombrecompleto='certificado'.$aleatorio.'.'.$extecion;
                                                
                                
                                                $fichero_subido = $dir_subida .$nombrecompleto;





                                                $datosController = array( "nombrecurso"=>$nombrecurso, 
                                                "usuario"=>$usuario,
                                                "fechfinal"=>$_POST["fechacurso"],
                                                "tiempo"=>$_POST["duracioncurso"],
                                                "obsr"=>"",
                                                "adjunto"=>$nombrecompleto
                                              
                                                
                                              );
      












                                                
                                                if (move_uploaded_file($_FILES['adjuntocurso']['tmp_name'], $fichero_subido)) {




                                             $respuesta = DatosPerfil::ingresarCursoModelo($datosController, "obj_udemy");           
                                            
                                            
                                            
                                             if($respuesta == "success"){
                                                
                                                echo"
                                                
                                                <script>
                                                
                                                location.href ='index.php?ir=miperfil&st=ok';
                                                </script>
                                                ";
                                                
                                           
                                
                                
                                
                                                }
                                
                                                else{
                                
                                                    
                                                    echo"
                                                
                                                    <script>
                                                    
                                                    location.href ='index.php?ir=miperfil&st=fail';
                                                    </script>
                                                    ";
                                                }
                                    
                                            
                                            }
                                
                                            
                                                    
                                            
                                    }



                                












			

	
			
			}


		}





















}