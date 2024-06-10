<?php
	require_once "Conexion.php";
	class Datosparametros extends Conexion{


#CONSULTA  DE PARAMETROS
#-------------------------------------


public static function consParametrosModeloadm($tabla){



    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();



}



}