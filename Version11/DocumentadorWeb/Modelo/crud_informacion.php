<?php

	require_once "Conexion.php";
	
class Datosinfo extends Conexion{



# CONSULTA ARTITULOS DE INFO
#-------------------------------------

	public static function consultaarticulosinfoModelo($tabla){



		$stmt = Conexion::conectar()->prepare("SELECT tit_art,text_art,fecha_art  FROM $tabla order by fecha_art desc");	

		$stmt->execute();
		
		return $stmt->fetchAll();

		$stmt->close();

	}



}