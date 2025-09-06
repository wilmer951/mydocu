<?php

require_once "Conexion.php";

class Datosperfiles extends Conexion {

    # LOGIN USUARIO
    # -------------------------------------
    public static function obtenerPerfilesModelo() {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM viw_perfiles");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); // ⚠️ No se ejecutará nunca, está después de return
    }

}