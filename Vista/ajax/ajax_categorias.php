<?php
require_once "../../Controlador/Controlador_categorias.php";
require_once "../../Modelo/Modelo_categorias.php";
require_once "../../Controlador/auth_middleware.php";

class Ajax_categorias {
    public function obtenerCategoriaAjax() {
        $status = 1;
        $respuesta = Controlador_categorias::obtnercategoriaControlador($status);

        header('Content-Type: application/json');
        echo json_encode($respuesta);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    session_start();
    $headers = getallheaders();

    $rol = null;

    // 1. Verificar si hay sesión
    if (isset($_SESSION["rol"])) {
        $rol = $_SESSION["rol"];
    } else {
        // 2. Si no hay sesión, intentar con JWT
        $payload = authenticate(); // tu función middleware
        if ($payload) {
            $rol = $payload["rol"] ?? null;
        }
    }

    // Validación de rol
    if ($rol !== 1) {
        http_response_code(403);
        echo json_encode(["error" => "No tienes permisos para acceder a las categorías"]);
        exit;
    }

    $ajaxCategorias = new Ajax_categorias();
    $ajaxCategorias->obtenerCategoriaAjax();

} else {
    http_response_code(405);
    echo json_encode(["error" => "Método no permitido"]);
}
