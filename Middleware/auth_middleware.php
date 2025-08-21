<?php
// auth_middleware.php
require_once __DIR__ . '/../Helper/jwt_helper.php';

function authenticate() {
  $headers = getallheaders();
    $authHeader = $headers['Authorization'] ?? $headers['authorization'] ?? '';
    if (!$authHeader || !str_starts_with($authHeader, 'Bearer ')) {
        http_response_code(401);
        echo json_encode(["error" => "Falta token"]);
        exit;
    }

    $token = str_replace('Bearer ', '', $authHeader);

    // Validar token
    $secret = "alkejlkmfielsl"; // 🔐 usa el mismo secreto que en generate_jwt()
    $payload = validate_jwt($token, $secret);

    if ($payload === false) {
        http_response_code(401);
        echo json_encode(["error" => "Token inválido o expirado"]);
        exit;
    }

    return $payload; // 👈 devolvemos los datos del usuario
}
