<?php

class Controlador_usuarios {
    // ********************* METODO LOGIN *******************************
    public static function obtenerUsuariosControlador(){
        return Datosusuario::obtenerUsuariosModelo();
    }

    public static function resetPawwordControlador($idusuario, $newpassowrd){
        $encriptarpw = password_hash($newpassowrd, PASSWORD_BCRYPT);
        $datosController = array(
            "id_usuario" => $idusuario,
            "new_pass" => $encriptarpw
        );

        $respuesta = Datosusuario::resetPawwordModelo($datosController);

        if ($respuesta == "success") {
            return ["status" => "ok", "mensaje" => "Cambio Exitoso"];
        } else {
            return ["status" => "fail", "mensaje" => "Error al cambiar contraseña"];
        }
    }
    
    // ********************* METODO CREAR USUARIO ***********************
    public static function crearUsuarioControlador($usuario, $nombres, $password,$perfil, $roles){
        // Encriptar la contraseña antes de enviarla al modelo
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        
        $datosController = array(
            "usuario" => $usuario,
            "nombres" => $nombres,
            "password" => $passwordHash,
            "perfil" => $perfil,
            "roles" => $roles
            
        );
        
        // Llamar al modelo para insertar el nuevo usuario
        $respuesta = Datosusuario::crearUsuarioModelo($datosController);
        
        if ($respuesta == "success") {
            return ["status" => "ok", "mensaje" => "Usuario creado exitosamente."];
        } else {
            return ["status" => "fail", "mensaje" => "Error al crear el usuario."];
        }
    }
    
    // ********************* METODO ACTUALIZAR USUARIO ******************
    public static function actualizarUsuarioControlador($idusuario,$nombres,$perfil,$roles,$estado){
        $datosController = array(
            "id_usuario" => $idusuario,
            "nombres" => $nombres,
            "perfil" => $perfil,
            "roles" => $roles,
            "estado" => $estado
            
        );
        
        // Llamar al modelo para actualizar el usuario
        $respuesta = Datosusuario::actualizarUsuarioModelo($datosController);
        
        if ($respuesta == "success") {
            return ["status" => "ok", "mensaje" => "Usuario actualizado exitosamente."];
        } else {
            return ["status" => "fail", "mensaje" => "Error al actualizar el usuario."];
        }
    }

    // ********************* METODO ELIMINAR USUARIO ********************
    public static function eliminarUsuarioControlador($idusuario){
        // Llamar al modelo para eliminar el usuario por su ID
        $respuesta = Datosusuario::eliminarUsuarioModelo($idusuario);
        
        if ($respuesta == "success") {
            return ["status" => "ok", "mensaje" => "Usuario eliminado exitosamente."];
        } else {
            return ["status" => "fail", "mensaje" => "Error al eliminar el usuario."];
        }
    }
}