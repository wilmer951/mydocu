

<?php //************* ADMINISTRACION DE ALERTA DE LOGIN **************



class Controlador_adminInfo{









//************* INGRESAR ARTICULO **************
	#------------------------------------
	public function ingresarArticuloControlador(){

		if(isset($_POST["tituloartiRegistro"])){

			
				$datosController = array( "tituloArti"=>$_POST["tituloartiRegistro"], 
									      "descrarticulo"=>$_POST["descArtiRegistro"]);

			

				$respuesta = Datosadmininfo::ingresarArticuloModelo($datosController, "articleinfo");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminInfo&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminInfo&st=fail");
				}
	
			
			}


		}





//************* ACTUALIZAR ARTICULO **************
	#------------------------------------
	public function actualizarArticuloControlador(){

		if(isset($_POST["idArtEdit"])){

			
				$datosController = array( 
                        "idarti"=>$_POST["idArtEdit"], 
                         "tituloArti"=>$_POST["titleArtEdit"], 
									      "descrarticulo"=>$_POST["descrArtiEdit"]);

			

				$respuesta = Datosadmininfo::actualizarArticuloModelo($datosController, "articleinfo");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminInfo&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminInfo&st=fail");
				}
	
			
			}


		}





















//********************* CONSULTA ARTICULOS INFOMRACIÓN  *******************************	


public function consultaArticuloInfoControlador(){

	
		


    $respuesta = Datosadmininfo::consultaArticuloInfoModelo("articleinfo");

        foreach ($respuesta as $row => $item) {


    echo'



<tr>
  <th scope="row">'.$item["id_art"].'</th>
  <td>'.$item["tit_art"].'</td>

<td>
        <button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarArti(\''.$item["id_art"].'\')">
            
        </button>
</td>


<td>

<button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarArti(\''.$item["id_art"].'\')">
						
</button>
</td>

</tr>


         ';


}

}





        //************* EDICION DE ARTICULOS **************

        public function consEditarArtiControlador($idArti){

          $respuesta = Datosadmininfo::consEditarArtiModelo($idArti,"articleinfo");
          
           echo json_encode($respuesta);
      }
      
      




//************* BORRADO  DE ARTICLO **************


public function borrarArticuloControlador(){

  if(isset($_POST["idArtiBorrado"])){

      $datosController = $_POST["idArtiBorrado"];
      
      $respuesta = Datosadmininfo::borrarArticuloModelo($datosController, "articleinfo");

      if($respuesta == "success"){

          header("location:index.php?ir=adminInfo&st=ok");
      
      }else{

          header("location:index.php?ir=adminInfo&st=fail");

      }


  }

}



}
