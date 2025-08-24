<?php

require_once "Conexion.php";

class Datosusuario extends Conexion {

    # LOGIN USUARIO
    # -------------------------------------
    public static function obtenerUsuariosModelo() {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM viw_usuarios");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

    # REINICIAR CONTRASEÑA
    # -------------------------------------
    public static function resetPawwordModelo($data) {
        $stmt = Conexion::conectar()->prepare("UPDATE usuarios SET password=:newPass WHERE id=:id");
        $stmt->bindParam(":id", $data["id_usuario"], PDO::PARAM_INT);
        $stmt->bindParam(":newPass", $data["new_pass"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "success";
        } else {
            return "error";
        }
        $stmt->close();
    }

    # CREAR USUARIO
    # -------------------------------------
    public static function crearUsuarioModelo($data) {
       $stmt = Conexion::conectar()->prepare("INSERT INTO usuarios (usuario, nombres, password, perfil, ult_login, rol, estado) VALUES (:usuario, :nombres, :password, :perfil, NOW(), :rol, :estado)");
        
        $stmt->bindParam(":usuario", $data["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":nombres", $data["nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
        $stmt->bindValue(":perfil", $data["perfil"], PDO::PARAM_INT);
        $stmt->bindValue(":rol", $data["rol"], PDO::PARAM_INT);
        $stmt->bindValue(":estado", 1, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "success";
        } else {
            return "error";
        }
        $stmt->close();
    }

    # ACTUALIZAR USUARIO
    # -------------------------------------
    public static function actualizarUsuarioModelo($data) {
        $stmt = Conexion::conectar()->prepare("UPDATE usuarios SET nombres=:nombres, perfil=:perfil, rol=:rol, estado=:estado WHERE id=:id");
        
        $stmt->bindParam(":id", $data["id_usuario"], PDO::PARAM_INT);
        $stmt->bindParam(":nombres", $data["nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $data["perfil"], PDO::PARAM_STR);
        $stmt->bindParam(":rol", $data["rol"], PDO::PARAM_STR);
        $stmt->bindParam(":estado", $data["estado"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "success";
        } else {
            return "error";
        }
        $stmt->close();
    }

    # ELIMINAR USUARIO
    # -------------------------------------
    public static function eliminarUsuarioModelo($idusuario) {
        $stmt = Conexion::conectar()->prepare("DELETE FROM usuarios WHERE id=:id");
        $stmt->bindParam(":id", $idusuario, PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            return "success";
        } else {
            return "error";
        }
        $stmt->close();
    }
}