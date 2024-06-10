<?php //************* ADMINISTRACION DE BOTONES **************



class Controlador_adminBottons{



//************* CONSULTA BOTONES **************


public function consultarInputsControlador(){


    $respuesta = DatosAdminBottons::consultarInputsModelo("inputs");

    foreach ($respuesta as $row => $item) {
echo'



			<tr>
			<th scope="row">'.$item["inp_id"].'</th>
			<td>'.$item["inp_nom"].'</td>
			<td>'.$item["inp_des"].'</td>
			<td>
					<button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarBoton(\''.$item["inp_id"].'\')">
						
					</button>
			</td>
			<td>
						<button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarBotton(\''.$item["inp_id"].'\')">
						
						</button>
			</td>


			</tr>


     ';


    }

}



//************* EDICION DE BOTONES **************

public function consEditarButtonControlador($idbotton){

    $respuesta = DatosAdminBottons::consEditarButtonModelo($idbotton,"inputs");
    
     echo json_encode($respuesta);
}







//************* ACTUALIZACIÓN DE BOTONES **************
	#------------------------------------
	public function actualizarBottonControlador(){

		if(isset($_POST["nameBotonEditar"])){

				$inputminuscula= strtolower($_POST["nameBotonEditar"]);
				$inputsinespacio =str_replace(' ', '', $inputminuscula);
				


		

				$datosController = array( "idinput"=>$_POST["idbotonEditar"],
										  "nameinput"=>$inputsinespacio, 
									      "descripcion"=>$_POST["desBotonEditar"]);

			

				$respuesta = DatosAdminBottons::actualizarBottonModelo($datosController, "inputs");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminBottons&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminBottons&st=fail");
				}
	
			
			}


		}



//************* INSERCIÓN  DE BOTONES **************
	#------------------------------------
	public function ingresarBottonControlador(){

		if(isset($_POST["nameinputIngreso"])){

				$inputminuscula= strtolower($_POST["nameinputIngreso"]);
				$inputsinespacio =str_replace(' ', '', $inputminuscula);
				


		

				$datosController = array( "nameinput"=>$inputsinespacio, 
									      "descripcion"=>$_POST["nameDescripIngreso"]);

			

				$respuesta = DatosAdminBottons::ingresarBottonModelo($datosController, "inputs");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminBottons&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminBottons&st=fail");
				}
	
			
			}


		}




//************* BORRADO  DE BOTONES **************


public function borrarBottonControlador(){

    if(isset($_POST["idbotonBorrado"])){

        $datosController = $_POST["idbotonBorrado"];
        
        $respuesta = DatosAdminBottons::borrarBottonModelo($datosController, "inputs");

        if($respuesta == "success"){

            header("location:index.php?ir=adminBottons&st=ok");
        
        }else{

            header("location:index.php?ir=adminBottons&st=fail");

        }


    }

}

















 }//fin clase princiipal