<?php



class Controlador_usuarios {

    // ********************* METODO LOGIN  *******************************    
public static  function obtenerUsuariosControlador(){



    return Datosusuario::obtenerUsuariosModelo();


    }



    public static  function resetPawwordControlador($idusuario,$newpassowrd){

        
      $encriptarpw = password_hash($newpassowrd, PASSWORD_BCRYPT);


                 $datosController = array(
                "id_usuario" => $idusuario,
                "new_pass" => $encriptarpw
            );

            // Llamamos al modelo para guardar
            $respuesta = Datosusuario::resetPawwordModelo($datosController);

            // Retornamos la respuesta como array, sin redirecciones HTML
            if ($respuesta == "success") {
                return ["status" => "ok", "mensaje" => "Cambio Exitoso"];
            } else {
                return ["status" => "fail", "mensaje" => "Error al cambiar contraseña"];
            }
        }
         

        
  

}







