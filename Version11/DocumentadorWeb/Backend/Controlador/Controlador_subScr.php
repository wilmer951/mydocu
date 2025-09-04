<?php //************* ADMINISTRACIÓN DE SCRIPT **************
	


    

	class Controlador_subScr  {





//********************* CONSULTA DE SCRIPTS  *******************************


public function consultarScriptControlador(){

	
		


    $respuesta = DatosSubScr::consultarScriptModelo("scp");

        foreach ($respuesta as $row => $item) {


    echo'



<tr>
  <th scope="row">'.$item["scp_id"].'</th>
  <td>'.$item["scp_des"].'</td>
  <td>
   <button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarScr(\''.$item["scp_id"].'\')">
       
           </button>
   </td>
   <td>
               <button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarScr(\''.$item["scp_id"].'\')">
               
               </button>
   </td>
</tr>


         ';


}
}


#INGRESO DE SCRIPT
	#------------------------------------
	public function ingresarScriptControlador(){

		if(isset($_POST["namedesscpregistro"])){


				$datosController = array( "descri"=>$_POST["namedesscpregistro"],
										  "scp"=>$_POST["namescregistro"] 
									      )
				;
				
				$respuesta = DatosSubScr::ingresarScriptModelo($datosController, "scp");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=subScr&st=ok");



				}

				else{

					
				header("location:index.php?ir=subScr&st=fail");
				}
	
			
			}


		}




        #CONSULTAR EDICION DE SCRIPT
	#------------------------------------
    public function consEditarScrControlador($idScr){



        $respuesta = DatosSubScr::consEditarScrModelo($idScr,"scp");
        
         echo json_encode($respuesta);
      
      
      }



#ACTUALIZAR  DE SCP
	#------------------------------------
	public function actualizarScpcontrolador(){

		if(isset($_POST["idscpEditar"])){

				$datosController = array( "idscp"=>$_POST["idscpEditar"],
										  "desscp"=>$_POST["namscpdesceditar"],
										  "scp"=>$_POST["namescpeditar"]

									  );

				
			

			

				$respuesta = DatosSubScr::actualizarScpModelo($datosController, "scp");



				if($respuesta == "success"){
					
					
				header("location:index.php?ir=subScr&st=ok");



				}

				else{

					
				header("location:index.php?ir=subScr&st=fail");
				}
	
			
			}


		}

//********************* BORRAR SCP  *******************************


public function borrarScpControlador(){

    if(isset($_POST["idscpborrado"])){

        $datosController = $_POST["idscpborrado"];
        
        $respuesta = DatosSubScr::borrarScpModelo($datosController, "scp");

        if($respuesta == "success"){

            header("location:index.php?ir=subScr&st=ok");
        
        }else{

            header("location:index.php?ir=subScr&st=fail");

        }


    }

}



}// fin clase principal