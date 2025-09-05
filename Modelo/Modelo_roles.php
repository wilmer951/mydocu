<?php

require_once "Conexion.php";

class Datosroles extends Conexion {

    # LOGIN USUARIO
    # -------------------------------------
    public static function obtenerRolesModelo() {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM viw_roles");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); // ⚠️ No se ejecutará nunca, está después de return
    }

}