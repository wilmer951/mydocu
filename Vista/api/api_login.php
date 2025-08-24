<?php
// Incluir el controlador y el modelo
require_once "../../Controlador/controlador_login.php";
require_once "../../Modelo/Modelo_login.php";

// Establecer la cabecera para que la respuesta sea JSON
header('Content-Type: application/json');

// Manejar solo solicitudes POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del cuerpo de la solicitud en formato JSON
    $data = json_decode(file_get_contents("php://input"), true);

    // Validar si los campos obligatorios están presentes
    if (!isset($data['usuario']) || !isset($data['password'])) {
        http_response_code(400); // 400 Bad Request
        echo json_encode(["estado" => false, "mensaje" => "Faltan campos obligatorios"]);
        exit;
    }

    // Llamar al controlador de login con los datos recibidos
    $respuesta = Controlador_login::loginControlador($data['usuario'], $data['password']);

    // Devolver la respuesta al cliente
    if ($respuesta['estado']) {
        http_response_code(200); // 200 OK
    } else {
        http_response_code(401); // 401 Unauthorized
    }

    echo json_encode($respuesta);

} else {
    // Si el método de solicitud no es POST, devolver un error
    http_response_code(405); // 405 Method Not Allowed
    echo json_encode(["estado" => false, "mensaje" => "Método no permitido"]);
}
?>