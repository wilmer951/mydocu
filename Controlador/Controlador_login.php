<?php



class Controlador_login {

    // ********************* METODO LOGIN  *******************************    
public static function loginControlador($usuario, $password){


                
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
            $_SESSION["id"] = $respuesta["id"];
            $onllogin=$respuesta["id_login"];
                    

            return ["estado" => true, "mensaje" => "datos incorrectos"];
                    

            
        }

   
    


}


}