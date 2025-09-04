<?php //************* ADMINISTRACION DE BOTONES **************



class Controlador_adminInventario
{



	//************* CONSULTA INVENTARIO ITEMS **************


	public static function consultarInventarioControlador()
	{


		$respuesta = DatosAdminInventario::consultarInventarioModelo("inventario");



		foreach ($respuesta as $row => $item) {
			echo '
                            
                            
                             
                                        <tr>
                                         
                                        <td>' . $item["nom_element"] . '</td>
                                        <td>' . $item["nombres"] . '</td>
										<td>' . $item["serial_item"] . '</td>
										<td>' . $item["placaIdemia_item"] . '</td>
										<td>
										<button type="button" class="btn btn-outline-success btndetall"   data-bs-toggle="modal" data-bs-target="#modaldetalMov" onclick="functionVerDetalMov(\'' . $item["id_iven"] . '\')">
											
										</button>
								</td>

                                  
                                                <td>
                                                <button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarItemInventario(\'' . $item["id_iven"] . '\')">
                                                    
                                                </button>
                                        </td>

										 
										<td>
										<button type="button" class="btn btn-outline-warning btnasig"   data-bs-toggle="modal" data-bs-target="#modalasignItem" onclick="functionAsigancionInventario(\'' . $item["id_iven"] . '\')">
											
										</button>
								</td>

                                        </tr>
                            
                            
                                ';


		}



	}




	//************* CONSULTA INVENTARIO ACCESORIOS **************



	public static function consultarInventarioAccControlador()
	{


		$respuesta = DatosAdminInventario::consultarInventarioAccModelo("inventario_accesorios");



		foreach ($respuesta as $row => $item) {
			echo '
                            
                            
                            
                                        <tr>
                                        
                                        <td>' . $item["acces_fech_iven"] . '</td>
                                        <td>' . $item["nom_element"] . '</td>
										<td>' . $item["acces_ob_iven"] . '</td>
										<td>
										<button type="button" class="btn btn-outline-warning btnutili"   data-bs-toggle="modal" data-bs-target="#modalutilizarAccesorio" onclick="functionUtilizaAccorio(\'' . $item["acces_id_iven"] . '\')">
									
										</button>
										</td>
									
                                        </tr>
                            
                            
                                ';


		}



	}






	//************* CONSULTA CONTEO DE ITEMS **************


	public static function consulitemNofijosControlador()
	{


		$respuesta = DatosAdminInventario::consulitemNofijosModelo("inventario");



		foreach ($respuesta as $row => $item) {
			echo '
                            
                            
                            
                                        <tr>
                                        <th scope="row">' . $item["nom_element"] . '</th>
                                        <td>' . $item["conteo"] . '</td>

						
										</tr>
                            
                            
                                ';


		}



	}





	//************* CONSULTA CONTEO DE ACCESORIOS **************


	public static function consuconutAccesoControlador()
	{


		$respuesta = DatosAdminInventario::consuconutAccesoModelo("inventario_accesorios");



		foreach ($respuesta as $row => $item) {
			echo '
                            
                            
                            
                                        <tr>
                                        <th scope="row">' . $item["nom_element"] . '</th>
                                        <td>' . $item["conteo"] . '</td>

						
										</tr>
                            
                            
                                ';


		}



	}




	//************* CONSULTA DESPLEGABLE DE ELEMENTOS ITEMS **************


	public static function consulElementControlador()
	{


		$respuesta = DatosAdminInventario::consulElementModelo("element_iventario");



		foreach ($respuesta as $row => $item) {
			echo '



	<tr>
	<th scope="row">' . $item["id_element"] . '</th>
	<td>' . $item["nom_element"] . '</td>
	<td>' . $item["tip_element"] . '</td>

	<td>
	<button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditarElement" onclick="functionEditarElementoInventario(\'' . $item["id_element"] . '\')">

	</button>
	</td>


	<td>
	<button type="button" class="btn btn-outline-danger btndel"   data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorradoElementoInventario(\'' . $item["id_element"] . '\')">

	</button>
	</td>



	</tr>


	';


		}



	}




	//********************* INGRESO DE ITEM INVENTARIO  *******************************
	#------------------------------------
	public static function ingresarItemIventarioControlador()
	{

		if (isset($_POST["nameItemRegistro"])) {



			$datosController = array(

				"nomItem" => $_POST["nameItemRegistro"],
				"marcaItem" => strtoupper($_POST["marcaItemRegistro"]),
				"modeloItem" => strtoupper($_POST["modeloItemRegistro"]),
				"serialItem" => strtoupper($_POST["serialItemRegistro"]),
				"placaIdemiaItem" => strtoupper($_POST["placaIdemiaItemRegistro"]),
				"obsItem" => strtoupper($_POST["obsItemRegistro"]),
				"estadoItem" => $_POST["estadoItemRegistro"]

			);



			$respuesta = DatosAdminInventario::ingresarItemIventarioModelo($datosController, "inventario");




			if ($respuesta == "success") {




				header("location:index.php?ir=adminInventario&st=ok");
			} else {


				header("location:index.php?ir=adminInventario&st=fail");
			}


		}


	}









	//********************* REGISGRAR NUEVO BOTON DE ELEMENTO  *******************************
	#------------------------------------
	public static function ingresarElementosInventarioControlador()
	{

		if (isset($_POST["itemRegistar"])) {

			$datosController = array(

				"itemRegistar" => strtoupper($_POST["itemRegistar"]),
				"tipoitemRegistar" => strtoupper($_POST["tipoitemRegistar"]),



			);


			$respuesta = DatosAdminInventario::ingresarElementosInventarioModelo($datosController, "element_iventario");

			if ($respuesta == "success") {


				header("location:index.php?ir=adminInventarioHome&st=ok");



			} else {


				header("location:index.php?ir=adminInventarioHome&st=fail");
			}


		}


	}


	//********************* ACTUALIZAR ITEM  DE INVENTARIO  *******************************
	#------------------------------------
	public static function actualizarItemIventarioControlador()
	{

		if (isset($_POST["idItemIvenEditar"])) {

			$datosController = array(
				"idItemIven" => $_POST["idItemIvenEditar"],
				"marcaItem" => strtoupper($_POST["marcaItemEdit"]),
				"modeloItem" => strtoupper($_POST["modeloItemEdit"]),
				"serialItem" => strtoupper($_POST["serialItemEdit"]),
				"placaIdemiaItem" => strtoupper($_POST["placaIdemiaItemEdit"]),
				"obsvItemEdit" => strtoupper($_POST["obsvItemEdit"]),
				"estadoItem" => $_POST["estadoItemEdit"]

			);


			$respuesta = DatosAdminInventario::actualizarItemIventarioModelo($datosController, "inventario");

			if ($respuesta == "success") {


				header("location:index.php?ir=adminInventario&st=ok");



			} else {


				header("location:index.php?ir=adminInventario&st=fail");
			}


		}


	}




	//************* ACTUALIZAR BOTONES DE ELMENTOS **************

	#------------------------------------
	public static function actualizarElementosInventarioControlador()
	{

		if (isset($_POST["idElmentEditar"])) {

			$datosController = array(

				"idElmentEditar" => $_POST["idElmentEditar"],
				"nomElmentEditar" => strtoupper($_POST["nameElementEditar"]),
				"tipoElementEditar" => strtoupper($_POST["tipoElementEditar"]),



			);


			$respuesta = DatosAdminInventario::actualizarElementosInventarioModelo($datosController, "element_iventario");

			if ($respuesta == "success") {


				header("location:index.php?ir=adminInventario&st=ok");



			} else {


				header("location:index.php?ir=adminInventario&st=fail");
			}


		}


	}





	//************* CONSULTA DE ITEM DE INVENTARIO **************

	public static function consEditarItemIventaControlador($idItemIventario)
	{

		$respuesta = DatosAdminInventario::consEditarItemIventaModelo($idItemIventario, "inventario");

		echo json_encode($respuesta);
	}






	//************* CONSULTA OPTION PARA AGREGAR NUEVO ITEM **************

	public static function consulItemElemnControlador()
	{

		$respuesta = DatosAdminInventario::consulItemElemnModelo("element_iventario");

		foreach ($respuesta as $row => $item) {

			echo '
								<option value="' . $item["id_element"] . '">' . $item["nom_element"] . '</option>
					
						';

		}

	}




	//************* CONSULTA OPTION PARA AGREGAR NUEVO ACCESORIO **************


	public static function consulaccesoElemnControlador()
	{

		$respuesta = DatosAdminInventario::consulaccesoElemnModelo("element_iventario");

		foreach ($respuesta as $row => $item) {

			echo '
			<option value="' . $item["id_element"] . '">' . $item["nom_element"] . '</option>

			';

		}

	}









	//************* ASIGNAR ELEMENTO **************

	public static function ingresarMovInventarioControlador()
	{

		if (isset($_POST["idItemIvenAsignar"])) {

			$datosController = array(

				"idTime" => $_POST["idItemIvenAsignar"],
				"usuario" => strtoupper($_POST["usuarioAsignar"])


			);


			$respuesta = DatosAdminInventario::ingresarMovInventarioModelo($datosController, "mov_invetario");

			if ($respuesta == "success") {

				$respuesta2 = DatosAdminInventario::actualizarUserItemiventarioModelo($datosController, "inventario");

				if ($respuesta2 == "success") {

					header("location:index.php?ir=adminInventario&st=ok");

				} else {

					header("location:index.php?ir=adminInventario&st=fail");

				}



			} else {


				header("location:index.php?ir=adminInventario&st=fail");
			}


		}


	}









	//************* CONSULTAR ASIGANCIÓN ITEM **************

	public static function consAsigancionItemIventarioControlador($idItemIventario)
	{

		$respuesta = DatosAdminInventario::consAsigancionItemIventarioModelo($idItemIventario, "mov_invetario");

		echo json_encode($respuesta);
	}







	//************* CONSULTAR EDICION DE ELEMENTO PARA EDITAR **************

	public static function consEditelementIventarioControlador($idElemenIventario)
	{

		$respuesta = DatosAdminInventario::consEditelementIventarioModelo($idElemenIventario, "element_iventario");

		echo json_encode($respuesta);
	}







	//************* CONSULTAR DETALLE DE ITEM **************

	public static function consDetallIventarioControlador($idElemenIventario)
	{

		$respuesta = DatosAdminInventario::consDetallIventarioModelo($idElemenIventario, "inventario");

		echo json_encode($respuesta);
	}








	//************* BORRADO  DE BOTONES **************


	public static function BorradoElementosInventarioControlador()
	{

		if (isset($_POST["idElementoBorrado"])) {

			$datosController = $_POST["idElementoBorrado"];

			$respuesta = DatosAdminInventario::BorradoElementosInventarioModelo($datosController, "element_iventario");

			if ($respuesta == "success") {

				header("location:index.php?ir=adminInventario&st=ok");

			} else {

				header("location:index.php?ir=adminInventario&st=fail");

			}


		}


	}


	//************* REGISTRO DE ACCESORIOS **************

	public static function registrarAccesorioControlador($idacceso, $cantacce, $obseacce)
	{

		$datosController = array(

			"idacceso" => $idacceso,
			"obseacce" => strtoupper($obseacce),
		);


		$a = 1;

		while ($a <= $cantacce) {
			$respuesta = DatosAdminInventario::registrarAccesorioModelo($datosController, "inventario_accesorios");
			$a++;
		}

		if ($respuesta == "success") {

			echo "success";


		} else {

			echo "error";

		}


	}








	//************* COMPROBACIÓN DE SEIRAL **************

public static function comprobarSerialControlador($serial)
{

	$respuesta = DatosAdminInventario::comprobarSerialModelo($serial, "inventario");

	$conteo=count($respuesta);
	
	echo $conteo;
}





public static function comprobarPlacaIdemialControaldor($placaIdemia)
{

	$respuesta = DatosAdminInventario::comprobarPlacaIdemialModelo($placaIdemia, "inventario");

	$conteo=count($respuesta);
	
	echo $conteo;
}






public static function MarcadooAccControlador()
{

					if (isset($_POST["idAccesorio"])) {

						$datosController =$_POST["idAccesorio"];


						$respuesta = DatosAdminInventario::MarcadooAccModelo($datosController, "inventario_accesorios");

						if ($respuesta == "success") {


							header("location:index.php?ir=adminInventarioAcc&st=ok");



						} else {


							header("location:index.php?ir=adminInventarioAcc&st=fail");
						}

					}

}





















}






