<?php
// Incluye tu middleware de autenticación
require_once "../../Middleware/auth_middleware.php";

header('Content-Type: application/json');

// La función `authenticate()` de tu middleware se encarga de todo.
$payload = authenticate();

// Si el token es válido, $payload no será nulo
if ($payload) {
    http_response_code(200);
    echo json_encode(["status" => "ok", "message" => "Token válido"]);
} else {
    // Si el token no es válido, el middleware ya habrá enviado un 401
    // pero puedes asegurarte de que la respuesta sea consistente.
    http_response_code(401);
    echo json_encode(["status" => "error", "message" => "Token no válido o expirado"]);
}
?>