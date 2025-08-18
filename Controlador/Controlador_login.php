<?php

require_once "jwt_helper.php";

class Controlador_login {

    // ********************* METODO LOGIN  *******************************    
public static function loginControlador($usuario, $password){

   $secret_key = "alkejlkmfielsl"; // Cambia esto por algo seguro
                
    $nameusuario=strtoupper($usuario);


    
        $encriptar = crypt($password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        $datosControlador = array( "usuario"=>$nameusuario, "password"=>$encriptar);
        $respuesta = Datoslogin::loginModelo($datosControlador, "usuarios");



        if ($respuesta==false) 
        { 

            
            return ["estado" => false, "mensaje" => "datos incorrectos"];
        }



        else if ($respuesta["usuario"]==$nameusuario && $respuesta["password"]==$encriptar && $respuesta["estado"]==1)

            {

            
            
            session_start();
            $_SESSION["validar"] = true;
            $_SESSION["usuario"] = $respuesta["usuario"];
            $_SESSION["nameusr"] = $respuesta["nombres"];
            $_SESSION["rol"] = $respuesta["rol"];
            $_SESSION["id"] = $respuesta["id"];
            

                $payload = [
                "user" => $respuesta["usuario"],
                "name" => $respuesta["nombres"],
                "id" => $respuesta["id"],
                    "rol" => $respuesta["rol"], // ✅ Añadir el rol
                "iat" => time(),
                "exp" => time() + 3600 // token válido 1 hora
                    
                 ];

            $token = generate_jwt($payload, $secret_key);

            return ["estado" => true, "mensaje" => "Login exitoso", "token" => $token];
                    

            
        }

   
    


}


}