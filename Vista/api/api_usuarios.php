<?php

require_once "../../Controlador/Controlador_usuarios.php";
require_once "../../Modelo/Modelo_usuarios.php";
require_once "../../Middleware/auth_middleware.php";

header('Content-Type: application/json');

// Verificación de autenticación vía JWT
$payload = require_role_for_route();


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
        actualizarUsuario();
        break;

    case 'DELETE':
        eliminarUsuario();
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
        break;
}

// ---------------------- FUNCIONES ------------------------

function obtenerUsuarios() {
    // La función del controlador `obtenerUsuariosControlador` no recibe parámetros.
    $respuesta = Controlador_usuarios::obtenerUsuariosControlador();
    echo json_encode($respuesta);
}

function crearUsuario() {
    $data = json_decode(file_get_contents("php://input"), true);

    // Los campos esperados por el controlador son: usuario, nombres, password y perfil
    if (!isset($data['usuario']) || !isset($data['nombres']) || !isset($data['password']) || !isset($data['perfil']) || !isset($data['rol'])) {
        http_response_code(400);
        echo json_encode(["error" => "Faltan campos obligatorios para la creación: 'usuario', 'nombres', 'password', 'perfil'."]);
        return;
    }

    $respuesta = Controlador_usuarios::crearUsuarioControlador(
        $data['usuario'],
        $data['nombres'],
        $data['password'],
        $data['perfil'],
        $data['rol']
    );

    echo json_encode($respuesta);
}

function actualizarUsuario() {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['id']) || !isset($data['nombres']) || !isset($data['perfil']) || !isset($data['roles']) || !isset($data['estado'])) {
        http_response_code(400);
        echo json_encode(["error" => "Faltan campos obligatorios para actualizar: 'id', 'nombres', 'perfil', 'roles', 'estado'."]);
        return;
    }

    if (!is_array($data['roles'])) {
        http_response_code(400);
        echo json_encode(["error" => "El campo 'roles' debe ser un array de IDs de rol."]);
        return;
    }

    $respuesta = Controlador_usuarios::actualizarUsuarioControlador(
        $data['id'],
        $data['nombres'],
        $data['perfil'],
        $data['roles'],
        $data['estado']
    );

    echo json_encode($respuesta);
}

function eliminarUsuario($data) {
    // El campo esperado por el controlador es: idusuario

    parse_str(file_get_contents("php://input"), $data);

    if (!isset($data['id'])) {
        http_response_code(400);
        echo json_encode(["error" => "Falta el ID del usuario ('id') para eliminar."]);
        return;
    }

    $respuesta = Controlador_usuarios::eliminarUsuarioControlador($data['id']);
    echo json_encode($respuesta);
}