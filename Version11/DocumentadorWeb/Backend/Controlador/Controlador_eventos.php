<?php //************* ADMINISTRACION DE EVENTOS **************



class Controlador_eventos{







//************* CONSULTAR ESTADO DEL PLANIVIDACODR DE EVENTO **************




public function consulPlanifiEventosControlador(){


                        $respuesta = DatosEventos::consulPlanifiEventosModelo();

                                $count=count($respuesta);

                                    if ($count>0) {

                                          
                                        echo '
                                        <input class="form-check-input" type="checkbox" id="statusEvent" checked>
                                        '  ;
                                    }else{

                                        echo '
                                        <input class="form-check-input" type="checkbox" id="statusEvent">
                                        
                                        ';
                                    }





}








//************* INSERCIÓN  DE EVENTOS **************
	#------------------------------------
	public function ingresarEventoControlador(){

		if(isset($_POST["tipoAlert"])){

            $nameminuscula= strtolower($_POST["nombreEvento"]);
            $namesinespacio =str_replace(' ', '', $nameminuscula);
            $intervalo= $_POST["intervalo"];
            $recurrencia= $_POST["recurrencia"];
            $hora= $_POST["hora"];
            $tipo= $_POST["tipoAlert"];
            $comentario= $_POST["comenEvento"];
            

            $datetime = date('Y-m-d H:i:s', strtotime($hora));
				


		

				
									      

			

				$respuesta = DatosEventos::ingresarEventoModelo($tipo,$namesinespacio,$intervalo,$recurrencia,$datetime,$comentario);

				if($respuesta == "success"){
					
		
                    header("location:index.php?ir=adminPausasActivas&st=ok");


				}

				else{

					
				header("location:index.php?ir=adminPausasActivas&st=fail");
				}
	
			
			}


		}










//************* CONSULTAR ESTADO DE EVENTO **************




    public function consultarEventosControlador(){


        $respuesta = DatosEventos::consultarEventosModelo();
    
        foreach ($respuesta as $row => $item) {



                if ($item["EVENT_NAME"]!="reset") {
                    echo '

                    <th scope="row">'.$item["EVENT_NAME"].'</th>
                    <th ">'.$item["STARTS"].'</th>
                    <th scope="row">'.$item["INTERVAL_VALUE"].'</th>
                    <th scope="row">'.$item["INTERVAL_FIELD"].'</th>
                    <th scope="row">'.$item["EVENT_COMMENT"].'</th>
                    <th scope="row">'.$item["STATUS"].'</th>
                    <td> 
                        <button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborradoevento" onclick="functionBorrarevento(\''.$item["EVENT_NAME"].'\')">                
                        </button>
                            </td>
                        </tr>
                  ';

              
        }
    
    }

}



//************* BORRADO  DE EVENTOS **************


public function borrarEventosControlador(){

    if(isset($_POST["idEventoBorrado"])){

        $datosController = $_POST["idEventoBorrado"];
        
        $respuesta = DatosEventos::borrarEventosModelo($datosController);

        if($respuesta == "success"){

            header("location:index.php?ir=adminPausasActivas&st=ok");
        
        }else{

            header("location:index.php?ir=adminPausasActivas&st=fail");

        }


    }

}

















//************* INSERCIÓN  DE EVENTOS **************
	#------------------------------------
	public static function actualizarPLanifiEventosiaControlador($stevento){

		

				$respuesta = DatosEventos::actualizarPLanifiEventosiaEvento($stevento);

				if($respuesta == "success"){
					
		
                   echo 'Actualización success';


				}

				else{

					echo 'Actualización error';
			
				}
	
			
			}







     }









     