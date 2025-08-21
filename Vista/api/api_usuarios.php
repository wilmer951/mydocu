<?php
require_once "../../Controlador/Controlador_usuarios.php";
require_once "../../Modelo/Modelo_usuarios.php";
require_once "../../Middleware/auth_middleware.php";

header('Content-Type: application/json');

// Verificación de autenticación vía JWT
$headers = getallheaders();
$rol = null;

$payload = authenticate(); // <- Función del middleware

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
        obtenerUsuarios();
        break;

    case 'POST':
        crearUsuario();
        break;

    case 'PUT':
        parse_str(file_get_contents("php://input"), $_PUT);
        actualizarUsuario($_PUT);
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $_DELETE);
        eliminarUsuario($_DELETE);
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
        break;
}

// ---------------------- FUNCIONES ------------------------

function obtenerUsuarios() {
    $status = 1;
    $respuesta = Controlador_usuarios::obtenerUsuariosControlador($status);
    echo json_encode($respuesta);
}

function crearUsuario() {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['nombre']) || !isset($data['email']) || !isset($data['password']) || !isset($data['rol'])) {
        http_response_code(400);
        echo json_encode(["error" => "Faltan campos obligatorios"]);
        return;
    }

    $respuesta = Controlador_usuarios::crearUsuarioControlador(
        $data['nombre'],
        $data['email'],
        $data['password'],
        $data['rol']
    );

    echo json_encode($respuesta);
}

function actualizarUsuario($data) {
    if (!isset($data['id']) || !isset($data['nombre']) || !isset($data['email']) || !isset($data['rol'])) {
        http_response_code(400);
        echo json_encode(["error" => "Faltan campos para actualizar"]);
        return;
    }

    $respuesta = Controlador_usuarios::actualizarUsuarioControlador(
        $data['id'],
        $data['nombre'],
        $data['email'],
        $data['rol']
    );

    echo json_encode($respuesta);
}

function eliminarUsuario($data) {
    if (!isset($data['id'])) {
        http_response_code(400);
        echo json_encode(["error" => "Falta el ID del usuario"]);
        return;
    }

    $respuesta = Controlador_usuarios::eliminarUsuarioControlador($data['id']);
    echo json_encode($respuesta);
}
