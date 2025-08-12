<?php

class Conexion {

    public static function conectar() {

        $config = require 'C:/xampp/config.php';

        // Forzar conexión TCP usando 127.0.0.1 y puerto explícito
        $host = $config['DB_HOST'] === 'localhost' ? '127.0.0.1' : $config['DB_HOST'];
        $port = !empty($config['DB_PORT']) ? $config['DB_PORT'] : 3306;

        try {
            $link = new PDO(
                "mysql:host={$host};port={$port};dbname={$config['DB_NAME']};charset=utf8",
                $config['DB_USER'],
                $config['DB_PASS'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                ]
            );

            return $link;

        } catch (PDOException $e) {
            // Muestra un mensaje claro si la conexión falla
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
}

?>




