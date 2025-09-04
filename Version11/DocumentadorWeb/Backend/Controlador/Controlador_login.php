<?php


class Controlador_login  {

//********************* METODO LOGIN  *******************************	


	public static function LoginControlador(){

        

		if(isset($_POST["nameUserLogin"]))

		{
			$encriptar = crypt($_POST["namePasswordLogin"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $nameusuario=strtoupper($_POST["nameUserLogin"]);


			$datosControlador = array( "usuario"=>$nameusuario, "password"=>$encriptar);
				$respuesta = DatosLogin::LoginModelo($datosControlador, "usuarios");

        
                if ($respuesta==false) {
                    echo '<div class="alert alert-danger" role="alert">Error usuario y/o contraseña</div>';
                   }else if ($respuesta["usuario"]==$nameusuario && $respuesta["password"]==$encriptar && $respuesta["estado"]==1)
					{
						

						session_start();
						$_SESSION["validar"] = true;
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["perfil"] = $respuesta["perfil"];

                     	header("location:index.php?ir=home");
								}


				}

			

	

}


}