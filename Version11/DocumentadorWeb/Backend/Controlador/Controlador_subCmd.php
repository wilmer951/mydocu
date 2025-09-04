<?php //************* ADMINITRACIÓN DE COMANDOS **************
	


    

	class Controlador_subCmd  {



//********************* CONSULTA DE COMANDOS  *******************************


public function consultarComandosControlador(){

	
		


    $respuesta = DatosSubCmd::consultarComandosModelo("cmd");

        foreach ($respuesta as $row => $item) {
    echo'



            <tr>
                    <th scope="row">'.$item["cmd_id"].'</th>
                    <td>'.$item["cmd_des"].'</td>
                    <td>'.$item["cmd_com"].'</td>
                    
                    <td>
                    <button type="button" class="btn btn-outline-primary btnedit"  data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarCmd(\''.$item["cmd_id"].'\')">
                        
                            </button>
                    </td>
                    <td>
                                <button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarCmd(\''.$item["cmd_id"].'\')">
                        
                                </button>
                    </td>
                    </tr>


         ';


}
}


#INGRESO DE COMANDOS
	#------------------------------------
	public function ingresarComandoControlador(){

		if(isset($_POST["namedescripingreso"])){


				$datosController = array( "namedescripcion"=>$_POST["namedescripingreso"],
										  "namecomando"=>$_POST["namecomandoingreso"] 
									      )
				;
				
				$respuesta = DatosSubCmd::ingresarComandoModelo($datosController, "cmd");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=subCmd&st=ok");



				}

				else{

					
				header("location:index.php?ir=subCmd&st=fail");
				}
	
			
			}


		}

    
    


        #CONSULTAR EDICION DE CMD
	#------------------------------------
    public function consEditarCmdControlador($idcmd){



        $respuesta = DatosSubCmd::consEditarCmdModelo($idcmd,"cmd");
        
         echo json_encode($respuesta);
      
      
      }
    
    

#ACTUALIZAR  DE COMANDOS
	#------------------------------------
	public function actualizarComandocontrolador(){

		if(isset($_POST["idComanEditar"])){

				$datosController = array( "idcomando"=>$_POST["idComanEditar"],
										  "descri"=>$_POST["nameDesEditar"],
										  "comando"=>$_POST["nameComanEidtar"]

									  );

				
			

			

				$respuesta = DatosSubCmd::actualizarComandoModelo($datosController, "cmd");



				if($respuesta == "success"){
					
					
				header("location:index.php?ir=subCmd&st=ok");



				}

				else{

					
				header("location:index.php?ir=subCmd&st=fail");
				}
	
			
			}


		}



 //********************* BORRAR COMANDO  *******************************


	public function borrarComandoControlador(){

		if(isset($_POST["idborradocomando"])){

			$datosController = $_POST["idborradocomando"];
			
			$respuesta = DatosSubCmd::borrarComandoModelo($datosController, "cmd");

			if($respuesta == "success"){

				header("location:index.php?ir=subCmd&st=ok");
			
			}else{

				header("location:index.php?ir=subCmd&st=fail");

			}


		}

	}
    
    }//fin clase principal
