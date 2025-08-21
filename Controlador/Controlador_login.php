<?php

require_once __DIR__ . '/../Helper/jwt_helper.php';

class Controlador_login {

    // Este código ya es correcto, asumiendo que tu modelo lo soporta
public static function loginControlador($usuario, $password){
            $secret_key = "alkejlkmfielsl"; 
            $nameusuario = strtoupper($usuario);

            // Primer paso: Obtener la información del usuario por nombre de usuario
            $datosControlador = ["usuario" => $nameusuario];
            $respuesta = Datoslogin::loginModelo($datosControlador, "usuarios");

            // Verificar si el usuario existe y su contraseña
            if ($respuesta && password_verify($password, $respuesta["password"])) {
                if ($respuesta["estado"] == 1) {
                    // El usuario existe, la contraseña es correcta y está activo.
                    
                    // Aquí puedes iniciar tu sesión si la usas
                    // session_start();
                    // ...

                    $payload = [
                        "user" => $respuesta["usuario"],
                        "name" => $respuesta["nombres"],
                        "id" => $respuesta["id"],
                        "rol" => $respuesta["rol"],
                        "iat" => time(),
                        "exp" => time() + 3600
                    ];
                    $token = generate_jwt($payload, $secret_key);

                    return ["estado" => true, "mensaje" => "Login exitoso", "token" => $token];
                } else {
                    return ["estado" => false, "mensaje" => "Usuario inactivo"];
                }
            } else {
                // La verificación falló, la contraseña es incorrecta o el usuario no existe.
                return ["estado" => false, "mensaje" => "Usuario o contraseña incorrectos"];
            }
        }
}