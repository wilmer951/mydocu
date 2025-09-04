
<?php
	require_once "Conexion.php";
	class Datosparametros extends Conexion{


#CONSULTA  DE INPUTS
#-------------------------------------


public static function consParametrosModelo($tabla){



    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();



}




}