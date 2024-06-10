<?php
	require_once "Conexion.php";
	class Datositemmenu extends Conexion{


# CONSULTA COMANDOS
#-------------------------------------

        public static function consultaItemdelo($tabla){

            $stmt = Conexion::conectar()->prepare("SELECT * from $tabla ");	

            $stmt->execute();
            
            return $stmt->fetchAll();

            $stmt->close();

            }

 }//FIN CLASE PRINCIPAL