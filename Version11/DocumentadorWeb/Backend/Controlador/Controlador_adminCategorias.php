<?php //************* ADMINISTRACIÓN DE CATEGORIAS **************
	
	class Controlador_adminCategorias  {



//********************* CONSULTA DE CATEGORIAS  *******************************


public function consultarCategoriasControlador(){



    
    $respuesta = DatosAdminCategorias::consultarCategoriasModelo("categorias");

    foreach ($respuesta as $row => $item) {
                    echo'



                    <tr>
                    <th scope="row">'.$item["cate_id"].'</th>
                    <td>'.$item["mod_nom"].'</td>
                    <td>'.$item["sub_nom"].'</td>
                    <td>'.$item["cate_nom"].'</td>
                    <td>'.$item["estado"].'</td>

                <td>
                        <button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarCategoria(\''.$item["cate_id"].'\')">
                        
                        </button>
                </td>
                <td>
                        <button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarCategoria(\''.$item["cate_id"].'\')">
                        
                    </button>
                </td>



                    </tr>


                        ';


            }




}






//********************* CONSULTA DE SUBCATEGORIAS  *******************************

public static function consultaSubmodulosControlador($submodulosconsulta){


    $datosControlador=$submodulosconsulta;
    echo '<option >seleccione una submodulo</option>';

    $respuesta = DatosAdminCategorias::consultaSubmodulosModelo($datosControlador,"submodulos");

        foreach ($respuesta as $row => $item) {
    
                    echo '
                                <option value="'.$item["sub_id"].'">'.$item["sub_nom"].'</option>
                    
                        ';

                        }

        }




//********************* CONSULTA DE SELECCION DE INPUTS  *******************************


public function consultaSelecInputControlador(){

	
		



    $respuesta = DatosAdminCategorias::consultarInputsModelo("inputs");

        foreach ($respuesta as $row => $item) {
    echo'


     <option value="'.$item["inp_id"].'">'.$item["inp_des"].'</option>


         ';


}
}

 


//********************* INGRESO DE CATEGORIAS  *******************************
	#------------------------------------
	public function ingresarCategoriaControlador(){

		if(isset($_POST["idCateModuloReg"])){

$datosController = array(
			"idsub"=>$_POST["catesubmoduloregistro"],
			"titulo"=> strtoupper($_POST["cateTituloRegistro"]),
			"des1"=>$_POST["catedescr1registro"],
			"inp_des1"=>$_POST["botondes1"],
			"des2"=>$_POST["catedescr2registro"],
			"inp_des2"=>$_POST["botondes2"],
			"dia1"=>$_POST["catedia1registro"],
			"inp_dia1"=>$_POST["botondia1"],
			"dia2"=>$_POST["catedia2registro"],
			"inp_dia2"=>$_POST["botondia2"],
			"sol1"=>$_POST["catesol1reistro"],
			"inp_sol1"=>$_POST["botonsol1"],
			"sol2"=>$_POST["catesol2reistro"],
			"inp_sol2"=>$_POST["botonsol2"],
			"tipo"=>$_POST["selecTiporegistro"],
			"seve"=>$_POST["selectseveregistro"],
			"fre"=>$_POST["selectfreregistro"],
			"estado"=>$_POST["estadoingresar"]


			);


				$respuesta = DatosAdminCategorias::ingresarCategoriaModelo($datosController, "categorias");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminCategorias&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminCategorias&st=fail");
				}
	
			
			}


		}



#CONSULTAR EDICION DE CATEGORIAS
	#------------------------------------
    public function consEditarCategoriaControlador($idSmodulo){



        $respuesta = DatosAdminCategorias::consEditarCategoriaModelo($idSmodulo,"categorias");
        
         echo json_encode($respuesta);
      
      
      }
      





#ACTUALIZAR  CATEGORIA
	#------------------------------------
	public function actualizarcategoriaControlador(){

		if(isset($_POST["idcategoriaEditar"])){



				$datosController = array(
			"idcate"=>$_POST["idcategoriaEditar"],					
			"idsub"=>$_POST["catesubmoduloeditar"],
			"titulo"=> strtoupper($_POST["catetituloeditar"]),
			"des1"=>$_POST["catedes1editar"],
			"inp_des1"=>$_POST["inpdes1editar"],
			"des2"=>$_POST["catedes2editar"],
			"inp_des2"=>$_POST["inpdes2editar"],
			"dia1"=>$_POST["catedia1editar"],
			"inp_dia1"=>$_POST["inpdia1editar"],
			"dia2"=>$_POST["catedia2editar"],
			"inp_dia2"=>$_POST["inpdia2editar"],
			"sol1"=>$_POST["catesol1editar"],
			"inp_sol1"=>$_POST["inpsol1editar"],
			"sol2"=>$_POST["catesol2editar"],
			"inp_sol2"=>$_POST["inpsol2editar"],
			"tipo"=>$_POST["selecTipoEditar"],
			"seve"=>$_POST["selectseveeditar"],
			"fre"=>$_POST["selectfreeditar"],
			"estado"=>$_POST["estadoeditar"]


			);
				
			echo $_POST["idcategoriaEditar"];

			

				$respuesta = DatosAdminCategorias::actualizarcategoriaModelo($datosController, "categorias");



				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminCategorias&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminCategorias&st=fail");
				}
	
			
			}


		}





//********************* BORRAR CATEGORIA  *******************************


public function borrarCategoriaControlador(){

    if(isset($_POST["idCategoriaborrado"])){

        $datosController = $_POST["idCategoriaborrado"];
        
        $respuesta = DatosAdminCategorias::borrarCategoriaModelo($datosController, "categorias");

        if($respuesta == "success"){

            header("location:index.php?ir=adminCategorias&st=ok");
        
        }else{

            header("location:index.php?ir=adminCategorias&st=fail");

        }


    }

}



}//fin clase principal