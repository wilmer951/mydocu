<?php //************* ADMINISTRACIÓN DE MODULOS **************
	
	class Controlador_adminModulos  {



//********************* CONSULTA DE modulos  *******************************


public function consultarModulosControlador(){


    


    $respuesta = DatosAdminModulos::consultarModulosModelo("modulos");

        foreach ($respuesta as $row => $item) {

    echo'



					<tr>
					<th scope="row">'.$item["mod_id"].'</th>
					<td>'.$item["mod_nom"].'</td>
					<td>'.$item["estado"].'</td>

					
					<td>
					<button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarModulo(\''.$item["mod_id"].'\')">
					
					</button>
					</td>
					<td>
						<button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarModulo(\''.$item["mod_id"].'\')">
						
					</button>
					</td>
					</tr>


         ';


    }
}




#CONSULTAR EDICION DE MODULO
	#------------------------------------
public function consEditarModuloControlador($idmodulo){



  $respuesta = DatosAdminModulos::consEditarModuloModelo($idmodulo,"modulos");
  
   echo json_encode($respuesta);


}




#INGRESO DE MODULO
	#------------------------------------
	public function ingresarModuloControlador(){

		if(isset($_POST["namemoduloingresar"])){

				$nombremodulo= strtoupper($_POST["namemoduloingresar"]);
				
			$datosController = array( "modulo"=>$nombremodulo,
										  "estado"=>$_POST["estadoingresar"]);
			

				$respuesta = DatosAdminModulos::ingresarModuloModelo($datosController,"modulos");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminModulos&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminModulos&st=fail");
				}
	
			
			}

    }




#ACTUALIZAR  DE MODULO
	#------------------------------------
	public function actualizarModuloControlador(){

		if(isset($_POST["idEditar"])){

				$nombremodulo= strtoupper($_POST["namemoduloEditar"]);
				
				


		

				$datosController = array( "idmodulo"=>$_POST["idEditar"],
			"estado"=>$_POST["estadoeditar"],
      		"nombremodulo"=>$nombremodulo
										);

			

				$respuesta = DatosAdminModulos::actualizarModuloModelo($datosController, "modulos");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminModulos&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminModulos&st=fail");
				}
	
			
			}


		}



//********************* BORRAR MODULO  *******************************


public function borrarModuloControlador(){

  if(isset($_POST["idborradomodulo"])){

    $datosController = $_POST["idborradomodulo"];
    
    $respuesta = DatosAdminModulos::borrarModuloModelo($datosController, "modulos");

    if($respuesta == "success"){

      header("location:index.php?ir=adminModulos&st=ok");
    
    }else{

      header("location:index.php?ir=adminModulos&st=fail");

    }


  }

}









}// cierre metodo principal
