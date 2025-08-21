<?php
require_once "../../Controlador/Controlador_categorias.php";
require_once "../../Modelo/Modelo_categorias.php";
require_once "../../Middleware/auth_middleware.php";

header('Content-Type: application/json');

// Verificación de autenticación vía JWT
$headers = getallheaders();
$rol = null;

$payload = authenticate(); // <- Tu función del middleware

if ($payload) {
    $rol = $payload["rol"] ?? null;
}

if ($rol !== 1) {
    http_response_code(403);
    echo json_encode(["error" => "No tienes permisos"]);
    exit;
}

// Manejo de métodos HTTP
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        obtenerCategorias();
        break;

    case 'POST':
        crearCategoria();
        break;

    case 'PUT':
        parse_str(file_get_contents("php://input"), $_PUT);
        actualizarCategoria($_PUT);
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $_DELETE);
        eliminarCategoria($_DELETE);
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
        break;
}

// ---------------------- FUNCIONES ------------------------

function obtenerCategorias() {
    $status = 1;
    $respuesta = Controlador_categorias::obtnercategoriaControlador($status);
    echo json_encode($respuesta);
}

function crearCategoria() {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['nombre']) || !isset($data['descripcion'])) {
        http_response_code(400);
        echo json_encode(["error" => "Falta el campos"]);
        return;
    }

    
    $respuesta = Controlador_categorias::crearCategoriaControlador($data['nombre'],$data['descripcion']);
    echo json_encode($respuesta);
}

function actualizarCategoria($data) {
    if (!isset($data['id']) || !isset($data['nombre'])) {
        http_response_code(400);
        echo json_encode(["error" => "Faltan campos"]);
        return;
    }

    $respuesta = Controlador_categorias::actualizarCategoriaControlador($data['id'], $data['nombre']);
    echo json_encode($respuesta);
}

function eliminarCategoria($data) {
    if (!isset($data['id'])) {
        http_response_code(400);
        echo json_encode(["error" => "Falta el ID"]);
        return;
    }

    $respuesta = Controlador_categorias::eliminarCategoriaControlador($data['id']);
    echo json_encode($respuesta);
}
