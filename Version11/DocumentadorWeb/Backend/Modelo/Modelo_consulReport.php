<?php
	require_once "Conexion.php";
	class Datos_consulReport extends Conexion{

	

#CONSULTA  DE USUARIOS REPORTES
#-------------------------------------


public static function consulUsuariosReportModelo($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT usuario,nombres FROM $tabla where estado='1' and usuario not in ('ADM','ADMTRO') ORDER BY nombres asc");	


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

}





}