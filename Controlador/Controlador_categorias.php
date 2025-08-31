<?php



class Controlador_categorias {

    // ********************* METODO LOGIN  *******************************    
public static  function obtnercategoriaControlador($status){




 return Datoscategoria::obtnercategoriaModelo($status);

    }




public static function crearCategoriaControlador($nombre, $descripcion) {
    // Aquí transformamos la descripción a mayúsculas
            $datosController = array(
                "nombre" => $nombre,
                "descripcion" => strtoupper($descripcion)
            );

            // Llamamos al modelo para guardar
            $respuesta = Datoscategoria::crearcategoriaModelo($datosController);

            // Retornamos la respuesta como array, sin redirecciones HTML
            if ($respuesta == "success") {
                return ["status" => "ok", "mensaje" => "Categoría creada con éxito"];
            } else {
                return ["status" => "fail", "mensaje" => "Error al crear la categoría"];
            }
        }




}