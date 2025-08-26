<?php

require_once "Conexion.php";

class Datosusuario extends Conexion {

    # LOGIN USUARIO
    # -------------------------------------
    public static function obtenerUsuariosModelo() {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM viw_usuarios");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); // ⚠️ No se ejecutará nunca, está después de return
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
        $stmt->close(); // ⚠️ Nunca se ejecuta, está después de return
    }

    # CREAR USUARIO
    # -------------------------------------
# CREAR USUARIO CON MÚLTIPLES ROLES
# -------------------------------------
public static function crearUsuarioModelo($data) {
    $conexion = Conexion::conectar();
    $conexion->beginTransaction();

    try {
        // Insertar el usuario
        $stmt_usuario = $conexion->prepare("INSERT INTO usuarios (usuario, nombres, password, perfil, ult_login,estado) VALUES (:usuario, :nombres, :password, :perfil, NOW(),:estado)");
        
        $stmt_usuario->bindParam(":usuario", $data["usuario"], PDO::PARAM_STR);
        $stmt_usuario->bindParam(":nombres", $data["nombres"], PDO::PARAM_STR);
        $stmt_usuario->bindParam(":password", $data["password"], PDO::PARAM_STR);
        $stmt_usuario->bindValue(":perfil", $data["perfil"], PDO::PARAM_INT);
        $stmt_usuario->bindValue(":estado", "1", PDO::PARAM_INT);
        
        $stmt_usuario->execute();
        
        // Obtener el ID del usuario recién creado
        $id_usuario = $conexion->lastInsertId();

        // Iterar sobre el array de roles e insertar cada uno
        if (is_array($data["roles"])) {
            $stmt_rol = $conexion->prepare("INSERT INTO rol_usuario (id_usuario, id_rol) VALUES (:id_usuario, :id_rol)");
            
            foreach ($data["roles"] as $id_rol) {
                $stmt_rol->bindParam(":id_usuario", $id_usuario, PDO::PARAM_INT);
                $stmt_rol->bindParam(":id_rol", $id_rol, PDO::PARAM_INT);
                $stmt_rol->execute();
            }
        }

        // Confirmar la transacción
        $conexion->commit();
        return "success";

    } catch (PDOException $e) {
        // Revertir la transacción en caso de error
        $conexion->rollBack();
        return "error";
    }
    $conexion = null;
}

    










# ACTUALIZAR USUARIO CON MÚLTIPLES ROLES
# -------------------------------------
public static function actualizarUsuarioModelo($data) {
    $conexion = Conexion::conectar();
    $conexion->beginTransaction();

    try {
        // 1. Actualizar la información del usuario en la tabla 'usuarios'
        $stmt_usuario = $conexion->prepare("UPDATE usuarios SET nombres=:nombres, perfil=:perfil,estado=:estado WHERE id=:id");
        
        $stmt_usuario->bindParam(":id", $data["id_usuario"], PDO::PARAM_INT);
        $stmt_usuario->bindParam(":nombres", $data["nombres"], PDO::PARAM_STR);
        $stmt_usuario->bindParam(":perfil", $data["perfil"], PDO::PARAM_INT);
        $stmt_usuario->bindParam(":estado", $data["estado"], PDO::PARAM_INT);
        
        $stmt_usuario->execute();
        
        // 2. Eliminar los roles antiguos del usuario en la tabla 'rol_usuario'
        $stmt_eliminar_roles = $conexion->prepare("DELETE FROM rol_usuario WHERE id_usuario=:id_usuario");
        $stmt_eliminar_roles->bindParam(":id_usuario", $data["id_usuario"], PDO::PARAM_INT);
        $stmt_eliminar_roles->execute();
        
        // 3. Insertar los nuevos roles en la tabla 'rol_usuario'
        if (is_array($data["roles"])) {
            $stmt_insertar_roles = $conexion->prepare("INSERT INTO rol_usuario (id_usuario, id_rol) VALUES (:id_usuario, :id_rol)");
            
            foreach ($data["roles"] as $id_rol) {
                $stmt_insertar_roles->bindParam(":id_usuario", $data["id_usuario"], PDO::PARAM_INT);
                $stmt_insertar_roles->bindParam(":id_rol", $id_rol, PDO::PARAM_INT);
                $stmt_insertar_roles->execute();
            }
        }

        // Confirmar la transacción
        $conexion->commit();
        return "success";

    } catch (PDOException $e) {
        // Revertir la transacción en caso de error
        $conexion->rollBack();
        return "error";
    }
    $conexion = null;
}










# eliminar  USUARIO
    # -------------------------------------
public static function eliminarUsuarioModelo($idusuario) {
    $conexion = Conexion::conectar();
    $conexion->beginTransaction();

    try {
        // 1. Eliminar los roles del usuario de la tabla 'rol_usuario'
        $stmt_rol = $conexion->prepare("DELETE FROM rol_usuario WHERE id_usuario = :id");
        $stmt_rol->bindParam(":id", $idusuario, PDO::PARAM_INT);
        $stmt_rol->execute();

        // 2. Eliminar el usuario de la tabla 'usuarios'
        $stmt_usuario = $conexion->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt_usuario->bindParam(":id", $idusuario, PDO::PARAM_INT);
        $stmt_usuario->execute();
        
        // Confirmar la transacción
        $conexion->commit();
        return "success";

    } catch (PDOException $e) {
        // Revertir la transacción si algo falla
        $conexion->rollBack();
        return "error";
    }
    $conexion = null;
}


}