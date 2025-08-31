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





// ✅ Esta es la función que usarás en cada API
function require_role($requiredRoles = []) {
    $payload = authenticate(); // ya valida el token

    $roles = [];
    if (isset($payload['rol'])) {
        $roles = array_map('intval', explode(',', $payload['rol']));
    }

    // Normaliza entrada: permite pasar un solo rol como int
    if (!is_array($requiredRoles)) {
        $requiredRoles = [$requiredRoles];
    }

    // Compara los roles requeridos con los del token
    if (empty(array_intersect($requiredRoles, $roles))) {
        http_response_code(403);
        echo json_encode(["error" => "No tienes permisos"]);
        exit;
    }

    // ✅ Devuelve el payload completo si pasa la validación
    return $payload;
}




function require_role_for_route() {
    $permissions = require __DIR__ . '/../Config/ruta_permisos.php';
    $route = basename($_SERVER['SCRIPT_NAME']);

    if (!isset($permissions[$route])) {
        http_response_code(403);
        echo json_encode(["error" => "Acceso no configurado para esta ruta"]);
        exit;
    }

    $requiredRoles = $permissions[$route];

    // Si no requiere roles específicos, solo autenticación básica
    if (empty($requiredRoles)) {
        return authenticate();
    }

    return require_role($requiredRoles);
}

