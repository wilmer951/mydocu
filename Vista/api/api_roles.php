<?php

require_once "../../Controlador/Controlador_roles.php";
require_once "../../Modelo/Modelo_roles.php";
require_once "../../Middleware/auth_middleware.php";

header('Content-Type: application/json');

// Verificación de autenticación vía JWT
$payload = require_role_for_route();


// Manejo de métodos HTTP
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        obtenerRoles();
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
        break;
}

// ---------------------- FUNCIONES ------------------------

function obtenerRoles() {
    // La función del controlador `obtenerUsuariosControlador` no recibe parámetros.
    $respuesta = Controlador_roles::obtenerRolesControlador();
    echo json_encode($respuesta);
}

