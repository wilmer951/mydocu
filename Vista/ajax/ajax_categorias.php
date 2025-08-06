<?php

require_once "../../Controlador/Controlador_categorias.php";
require_once "../../Modelo/Modelo_categorias.php";

class Ajax_categorias {

    public function obtenerCategoriaAjax() {

        $status=1;
        $respuesta = Controlador_categorias::obtnercategoriaControlador($status);
        header('Content-Type: application/json'); // ✅ Muy importante
        echo json_encode($respuesta);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ajaxCategorias = new Ajax_categorias();
    $ajaxCategorias->obtenerCategoriaAjax();
} else {
    http_response_code(405);
    echo json_encode(["error" => "Método no permitido"]);
}
