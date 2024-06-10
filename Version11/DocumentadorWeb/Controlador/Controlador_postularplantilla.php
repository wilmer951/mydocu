<?php
	

	class Controlador_postularplantilla{


            //********************* METODO CONSULTA MODULOS ALL *******************************	

            public function consultaModulosControladorall(){

                $respuesta = Datospostplantilla::consultaModulosModeloall("modulos");

                foreach ($respuesta as $row => $item) {
                    
                    echo '
                    <option value="'.$item["mod_id"].'">'.$item["mod_nom"].'</option>
            
                    ';
            
                }

            }



            #POSTULAR PLANTILLA
	#------------------------------------
	public function postularPlantillaControlador(){

		if(isset($_POST["moduregistro"])){

			
			
			$usuario=$_SESSION["usuario"];


				$datosController = array( 
										  "modulo"=>$_POST["moduregistro"], 
										  "submodulo"=>$_POST["submregistro"], 
										  "categoria"=>$_POST["catregistro"], 
									      "des"=>$_POST["descName"],
									      "dia"=>$_POST["diaName"],
									      "sol"=>$_POST["solName"],
									      "usuario"=>$usuario,
										  )
				;
				
				
			

				$respuesta = Datospostplantilla::postularPlantillaModelo($datosController,"post_plantilla");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=postularplanti&st=ok");



				}

				else{

					
				header("location:index.php?ir=postularplanti&st=fail");
				}
	
			
			}


		}





    }