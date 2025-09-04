<?php //************* Administracion de usuarios **************
	
	class Controlador_adminUsers{




#CONSULTA DE USUARIOS
	#------------------------------------		

public function consultarUsuariosControlador(){

	
$respuesta = Datos::consultaUsuariosModelo("usuarios");

    foreach ($respuesta as $row => $item) {
    
		if ($item["estado"]==1) {$estado='Activo';}else{$estado='Suspendido';}

 
    echo'
			<tr>
					<th scope="row">'.$item["id"].'</th>
					<td>'.$item["usuario"].'</td>
					<td>'.$item["nombres"].'</td>
					<td>'.$item["nom_rol"].'</td>
					<td>'.$item["nom_perfil"].'</td>
					
					
					<td>'.$estado.'
					
					</td>


							<td>
							
							
							<button  type="button" class="btn btn-outline-primary btnedit"  data-bs-toggle="modal" data-bs-target="#modalresetpass" onclick="functionresetpass(\''.$item["id"].'\')">

							</button>
						</td>


					<td>
					

						<button  type="button" class="btn btn-outline-primary btnedit"  data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarUser(\''.$item["usuario"].'\')">

						</button>
					</td>
					<td>
						
					
					<button type="button" disabled ="true" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarusu(\''.$item["id"].'\')">
			
						</button></td>

			</tr>



     ';


        }
        }







#REGISTRO DE USUARIOS
	#------------------------------------
	public function registroUsuarioControlador(){

		if(isset($_POST["namUsuR"])){



			if ($_POST["namPasR"]==$_POST["namPasR2"]) {
				# code...
			
			#preg_match = Realiza una comparación con una expresión regular

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["namUsuR"]))

				{

			   	$encriptar = crypt($_POST["namPasR"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');



			   	$nameusuario=strtoupper($_POST["namUsuR"]);

				$datosController = array( "usuario"=>$nameusuario, 
										   "nombres"=>$_POST["nombrUr"], 
									      "password"=>$encriptar,
										  "rol"=>$_POST["namRol"], 
									      "perfil"=>$_POST["namPerR"]);

				$respuesta = Datos::registroUsuarioModelo($datosController, "usuarios");

				if($respuesta == "success")
						{
							
							header("location:index.php?ir=adminUsers&st=ok");

						}

							else{

							header("location:index.php?ir=adminUsers&st=fail");
							
							}

				}

					}else{


				

							header("location:index.php?ir=adminUsers&st=fail");

				;

					}			

			}//issent

		}//Metodo



#--ACTUALIZAR DE USUARIOS
	#------------------------------------
	public function actualizarPasswordControlaor(){

		if(isset($_POST["idrsetpas"])){


			if ($_POST["idrsetpas"]==2) {
					header("location:index.php?ir=adminUsers&st=fail");
				}else{

			

				if ($_POST["namepasseditar"]==$_POST["namepasseditar2"]) {
					
				
			   	$encriptar = crypt($_POST["namepasseditar"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datosController = array( "idusuairo"=>$_POST["idrsetpas"], 
									      "password"=>$encriptar
									      );

				

				$respuesta = Datos::actualizarPasswrodModelo($datosController, "usuarios");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminUsers&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminUsers&st=fail");
				}

			}else{

					header("location:index.php?ir=adminUsers&st=fail");
				}

			}

		}

		}




//********************* BORRAR USUARIOS  *******************************


public function borrarUsuarioControlador(){

	if(isset($_POST["idusuborrado"])){

if ($_POST["idusuborrado"]==1||$_POST["idusuborrado"]==2) {
				header("location:index.php?ir=adminUsers&st=fail");
			}else{


				$datosController = $_POST["idusuborrado"];

		
		
		$respuesta = Datos::borrarUsuariosModelo($datosController, "usuarios");

		if($respuesta == "success"){

			header("location:index.php?ir=adminUsers&st=ok");
		
		}else{

			header("location:index.php?ir=adminUsers&st=fail");

		}

		}
	}

}


// ACTUALIZAR USUAIRO

public function consEditarUserControlador($idUsr){



	$respuesta = Datos::consEditarUserModelo($idUsr, "usuarios");
	echo json_encode($respuesta);

}







#--ACTUALIZAR DE USUARIOS
	#------------------------------------
	public function actualizarUsuarioControlaor(){

		if(isset($_POST["idusrEditar"])){



			
					
				
			   	

				$datosController = array( "idusuairo"=>$_POST["idusrEditar"], 
										   "nombres"=>$_POST["nomeditaruser"], 
										   "perfil"=>$_POST["perfilEditar"], 
										   "rol"=>$_POST["rolEditar"], 
										   "estado"=>$_POST["estadoEditar"]
									      );

				

				$respuesta = Datos::actualizarUsuarioModelo($datosController, "usuarios");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminUsers&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminUsers&st=fail");
				}

			

			

		}
}














#CONSULTA DE USUARIOS
	#------------------------------------		

	public function consultarRolesUsuariosControlador(){

	
		$respuesta = Datos::consultarRolesUsuariosModelo("roles");
		
			foreach ($respuesta as $row => $item) {
			
		
			echo'
	
		
			<option value="'.$item["id_rol"].'">'.$item["nom_rol"].'</option>
		
			 ';
		
		
				}
		}





		#CONSULTA DE PERFILES
	#------------------------------------		

	public function consultarPerfilUsuariosControlador(){

	
		$respuesta = Datos::consultarPerfilUsuariosModelo("perfil");
		
			foreach ($respuesta as $row => $item) {
			
		
			echo'
	
		
			<option value="'.$item["id_perfil"].'">'.$item["nom_perfil"].'</option>
		
			 ';
		
		
				}
		}









		public static function consulUsuariosAllControlador()
		{
	
			$respuesta = Datos::consulUsuariosAllModelo("usuarios");
	
			foreach ($respuesta as $row => $item) {
	
				echo '
								<option value="' . $item["usuario"] . '">' . $item["nombres"] . '</option>
					
						';
	
			}
	
		}
	
	






		
		public static function consulUsuariosActivosControlador()
		{
	
			$respuesta = Datos::consulUsuariosActivosModelo("usuarios");
	
			foreach ($respuesta as $row => $item) {
	
				echo '
								<option value="' . $item["usuario"] . '">' . $item["nombres"] . '</option>
					
						';
	
			}
	
		}
	
	





















}// FIN CLASE PRINCIPAL