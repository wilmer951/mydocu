<?php //************* ADMINISTRACÍON DE SUBMODULOS **************
	
	class Controlador_adminSubmodulos  {



//********************* CONSULTA DE SUBMODULOS  *******************************


public function consultarSubmoduloControlador(){

	
		


    $respuesta = DatosAdminSubmodulos::consultarSubmoduloModelo("submodulos");

        foreach ($respuesta as $row => $item) {
    echo'



			<tr>
					<th scope="row">'.$item["sub_id"].'</th>
					<td>'.$item["mod_nom"].'</td>
					<td>'.$item["sub_nom"].'</td>
					<td>'.$item["estado"].'</td>
					<td>
					
					<button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarSubmodulo(\''.$item["sub_id"].'\')">
		
					</button>
					</td>
					<td>
						<button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarSubmodulo(\''.$item["sub_id"].'\')">
						
					</button>
					</td>




			</tr>


         ';


}
}





//********************* METODO CONSULTA SUBMODULOS  *******************************	

public function consultaModulosControlador(){


		

    $respuesta = DatosAdminSubmodulos::consultarModulosModelo("modulos");

        foreach ($respuesta as $row => $item) {
    
                    echo '
                                <option value="'.$item["mod_id"].'">'.$item["mod_nom"].'</option>
                    
                        ';

                        }

        }











#CONSULTAR EDICION DE SUBMODULOS
	#------------------------------------
    public function consEditarSuboduloControlador($idSmodulo){



        $respuesta = DatosAdminSubmodulos::consEditarSuboduloModelo($idSmodulo,"submodulos");
        
         echo json_encode($respuesta);
      
      
      }
      

#INGRESO DE SUBMOUDLOS
	#------------------------------------
	public function ingresarSubmoduloControlador(){

		if(isset($_POST["idmoduloingresar"])){

				$nombresubmodulo= strtoupper($_POST["namesubmoduloIngreso"]);
				
				$datosController = array( "idmodulo"=>$_POST["idmoduloingresar"],
										   "estado"=>$_POST["estadoingresar"],
										    "nombresubmodulo"=>$nombresubmodulo);

			

				$respuesta = DatosAdminSubmodulos::ingresarSubmoduloModelo($datosController, "submodulos");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminSubmodulos&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminSubmodulos&st=fail");
				}
	
			
			}


		}





#ACTUALIZAR  DE SUBMODULOS
	#------------------------------------
	public function actualizarSubmodulocontrolador(){

		if(isset($_POST["idsubmoudloeditar"])){

				$nombresubmodulo= strtoupper($_POST["nameSubmoduloEditar"]);
				
				


		

				$datosController = array( "idsubmodulo"=>$_POST["idsubmoudloeditar"],
										  "nombresubmodulo"=>$nombresubmodulo,
										  "estado"=>$_POST["estadoeditar"],
										  "idmodulo"=>$_POST["idmoduloEditar"],
										);

			

				$respuesta = DatosAdminSubmodulos::actualizarSubmoduloModelo($datosController, "submodulos");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminSubmodulos&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminSubmodulos&st=fail");
				}
	
			
			}


		}




//********************* BORRAR SUBMODULO  *******************************


public function borrarSubmoduloControlador(){

    if(isset($_POST["idsubmoduloborrado"])){

        $datosController = $_POST["idsubmoduloborrado"];
        
        $respuesta = DatosAdminSubmodulos::borrarSubmoduloModelo($datosController, "submodulos");

        if($respuesta == "success"){

            header("location:index.php?ir=adminSubmodulos&st=ok");
        
        }else{

            header("location:index.php?ir=adminSubmodulos&st=fail");

        }


    }

}









    }//fin clase principal

