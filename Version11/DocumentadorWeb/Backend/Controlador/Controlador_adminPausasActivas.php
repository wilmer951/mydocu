<?php //************* ADMINISTRACION DE PAUSAS ACTIVAS **************



class Controlador_adminPausasActivas{



//************* CONSULTA DE PAUSAS ACTIVAS **************


public function consultaAlertPausasActivasControlador(){

    $respuesta = DatosAdminPausaActiva::consultaAlertPausasActivasModelo("alert_pa_ac");

    foreach ($respuesta as $row => $item) {
            
        
        echo'

                     <tr>
                        <th scope="row">'.$item["alertpa_id"].'</th>
                        <td>' .$item["alertpa_nom"].'</td>
                        <td>'.$item["alertpa_estado"].'</td>
                        <td>
                                <button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarPausaactivas(\''.$item["alertpa_id"].'\')">
                                    
                                </button>
                        </td>
                        


                        </tr>


     ';


    }



    
 }






 

//************* EDICION DE PAUSA ACTIVA **************

public static function consEditarPausaActivaControlador($idpuasa){

    $respuesta = DatosAdminPausaActiva::consEditarPausaActivaModelo($idpuasa,"alert_pa_ac");
    
     echo json_encode($respuesta);
}






//************* ACTUALIZACIÓN DE PAUSAS ACTIVAS **************
	#------------------------------------
	public function actualizarPausaActivaControlador(){

		if(isset($_POST["ideditar"])){

				
				$datosController = array( "ideditar"=>$_POST["ideditar"],
                                          "titulo"=>$_POST["nameTituloEditar"], 
                                          "mensaje"=>$_POST["nameMensajeditar"],
									      "estado"=>$_POST["estadoeditar"]);

			

				$respuesta = DatosAdminPausaActiva::actualizarPausaActivaModelo($datosController, "alert_pa_ac");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminPausasActivas&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminPausasActivas&st=fail");
				}
	
			
			}


		}




        


//************* ACTUALIZACIÓN TIEMPO AALERTA PAUSAS ACTIVAS **************
	#------------------------------------
	public static function actualizarRangoTiempoControlador($rango){


        if ($rango>0) {
            # code...
        

				$respuesta = DatosAdminPausaActiva::actualizarRangoTiempoModelo($rango, "parametros");


				
				if($respuesta == "success"){
					
					
				echo "success";



				}

				else{

					
                    echo "error";
				}
	

            }else{

					
                echo "error";
            }

			
	

		}




//************* CONSULTAR TIEMPO AALERTA PAUSAS ACTIVAS **************
	#------------------------------------
	public function consRangotiempControlador(){



        $respuesta = DatosAdminPausaActiva::consRangotiempModelo("parametros");


        echo '
        
        
            
        <input id="rangetimepausa" class="form-range" type="range" min="1" max="60" value="'.$respuesta["valor"].'" class="slider"/>
        <h3 id="output">'.$respuesta["valor"].' Minuto(s)</h3>

        ';


}




//************* CONSULTAR TIEMPO AALERTA PAUSAS ACTIVAS **************
	#------------------------------------
	public function consDiasCambioAccesoControlador(){



        $respuesta = DatosAdminPausaActiva::consDiasCambioAccesoModelo("parametros");


        echo '
        
        <input id="diasCambioAC" type="text" class="form-control"  value="'.$respuesta["valor"].'" style="text-align: center;">
            
        ';


}

        

//************* ACTUALIZACIÓN DIAS CAMBIO DE ACCESORIOS  **************
	#------------------------------------
	public static function actualizarDiasCambioAcceControlador($dias){



		$respuesta = DatosAdminPausaActiva::actualizarDiasCambioAcceModelo($dias, "parametros");


		
		if($respuesta == "success"){
	
			echo 'success';
	
	
	
			}
	
			else{
	
				
				echo "error";
			}
	


}





//************* RESUMEN CONTEO PASUAS ACTIVAS **************


public static function consResumenPausasActivasControlador($fechainicial,$fechafin){

    $respuesta = DatosAdminPausaActiva::consResumenPausasActivasModelo($fechainicial,$fechafin,"alert_pa_ac");

    echo json_encode($respuesta);



    
 }



 //************* CONSULTAR INSTRUCTIVOS **************


 public function consInstructivosControlador(){

    $respuesta = DatosAdminPausaActiva::consInstructivosModelo("instru_alert");

    foreach ($respuesta as $row => $item) {


        $tipoarchivo = explode (".", $item["instrupa_medio"]); 



        echo '     <tr>        
        <td>'.$item["alertpa_nom"].'</td>   
        ';
            
            if ( $tipoarchivo[1]=="png" || $tipoarchivo[1]=="jpg" || $tipoarchivo[1]=="gif" || $tipoarchivo[1]=="jpeg" ) {
                echo'
            
            <td>
                        <a href="..\Vista\Imagenes\pausaactivas\instrutivos/'.$item["instrupa_medio"].'" data-toggle="lightbox" data-gallery="mixedgallery" class="col-sm-4">
                          <img src="Vista\Imagenes\iconoverimagen.png" class="img-fluid" style="max-width: 40px;">
                        </a>
              </td>

        
    
    
    
         ';

    
            }


            if ( $tipoarchivo[1]=="mp4") {
                echo '
                
     
                    <td>
                          <a href="..\Vista\Imagenes\pausaactivas\instrutivos/'.$item["instrupa_medio"].'" data-toggle="lightbox" data-gallery="mixedgallery" class="col-sm-4">
                          <img src="Vista\Imagenes\iconovervideo.png" class="img-fluid" style="max-width: 40px;">
                            </a>
                      </td>

   
                
                ';
            }

            echo '
            
                            <td>
                                 <button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborradoinstru" onclick="functionBorrarInstru(\''.$item["instrupa_id"].'\',\''.$item["instrupa_medio"].'\')">
                                </button>
                            </td>
  
              </tr>
            
            
            
            ';






    
            }



    
 }



//************* BORRADO  DE INSTRUCTIVOS **************


public function borrarInstructivoControlador(){

    if(isset($_POST["idborradoinstru"])){

        $datosController = $_POST["idborradoinstru"];
		$namearchivo=$_POST["nameborradoinstru"];
		
        


		If (unlink('..\Vista\Imagenes\pausaactivas\instrutivos/'.$namearchivo.'')) {


			$respuesta = DatosAdminPausaActiva::borrarInstructivoMOdelo($datosController, "instru_alert");

			if($respuesta == "success"){
	
				
				header("location:index.php?ir=adminPausasActivas&st=ok");
			
				
			
			}else{
	
				header("location:index.php?ir=adminPausasActivas&st=fail");
	
			}
	


		  } else {
			header("location:index.php?ir=adminPausasActivas&st=fail");
		  }










       

    }

}








//************* INSERTAR INSTRUCTIVO **************
	#------------------------------------
	public function InsertarInstructivoControlador(){

		if(isset($_POST["tipoAlertinstru"])){

				

			$tipoarchivo = explode ("/", $_FILES['instructivo']['type']);
			$extecion=$tipoarchivo[1];

				if ($extecion=="png"||$extecion=="jpg"||$extecion=="jpeg"||$extecion=="gif"||$extecion=="mp4") {
				
					
					$dir_subida = '../Vista/Imagenes/pausaactivas/instrutivos/';
					$tipoarchivo = explode ("/", $_FILES['instructivo']['type']); 
					$aleatorio=rand(0,99999);
					$nombrecompleto='instructivo'.$aleatorio.'.'.$extecion;
					
	
					$fichero_subido = $dir_subida .$nombrecompleto;
					
					if (move_uploaded_file($_FILES['instructivo']['tmp_name'], $fichero_subido)) {
					


						$datosController = array(
							"idalert"=>$_POST["tipoAlertinstru"],
							"instru"=>$nombrecompleto
				
				
							);

						$respuesta = DatosAdminPausaActiva::InsertarInstructivoModelo($datosController, "instru_alert");


						if($respuesta == "success"){
					
					
							header("location:index.php?ir=adminPausasActivas&st=ok");
			
			
			
							}
			
							else{
			
								
							header("location:index.php?ir=adminPausasActivas&st=fail");
							}

					
					} else {
						header("location:index.php?ir=adminPausasActivas&st=fail");
					}
				}else{



					header("location:index.php?ir=adminPausasActivas&st=fail");

				}





		

				
				
				

			

			
	
			
			}


		}




}//fin clase principal