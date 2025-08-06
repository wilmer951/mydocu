<?php



class Conexion{

	public static function conectar(){

		$config = require 'C:/xampp/config.php';

		$link = new PDO("mysql:host={$config['DB_HOST']};dbname={$config['DB_NAME']}","{$config['DB_USER']}","{$config['DB_PASS']}", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
		

		return $link;

	}

}

?>





