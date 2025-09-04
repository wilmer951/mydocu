<?php
	

	class Controlador_notas{



	

//******************** CONSULTA NOTAS. //********************
	public static function notasControlador(){


		$id=$_SESSION["id"];

		$respuesta = Datosnotas::notasModelo($id,"usuarios");


		echo '

		
		<textarea class="textareanotas" id="notas" placeholder="Tus notas">'.$respuesta["notas"].'</textarea>';


	}




//******************** ACTUALIZACIÓN DE NOTAS. //********************
	public static function actualizarNotasControador($actualizarnotas){

		session_start();


		if (isset($_SESSION["id"])) {
				
				$id=$_SESSION["id"];

				$notas=$actualizarnotas;

				$respuesta = Datosnotas::actualizarNotasModelo($id,$notas,"usuarios");
				echo $respuesta;
		}

	}





}