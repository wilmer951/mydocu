<?php

// Incluir tus controladores si los necesitas
require_once "../../Controlador/controlador_login.php";
require_once "../../Modelo/Modelo_login.php";
require_once "../../Controlador/jwt_helper.php"; // <-- Asegúrate de que la ruta es correcta

// Clave secreta (la misma usada al generar el token)
$secret = "alkejlkmfielsl"; 


class Ajax_prueba {

    public function ajaxPrueba($mensaje, $token,$payload) {
        $respuesta = [
            "mensaje" => "Prueba de ajax recibida",
            "mensaje_enviado" => $mensaje,
            "token_recibido" => $token,
            "payload_decodificado" => $payload['rol']
        ];

        // Devolver respuesta al frontend
        echo json_encode($respuesta);
    }
}

// Verificar que se hizo una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Leer headers (pueden venir en mayúsculas o minúsculas)
    $headers = getallheaders();
    $authHeader = $headers['Authorization'] ?? $headers['authorization'] ?? '';

    $token = '';
    if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
        $token = $matches[1]; // extrae el token
    }

     $payload = validate_jwt($token, $secret);

    // Recoger los datos enviados desde JavaScript
    $mensaje = $_POST['mensaje'] ?? '';

    // Instanciar y ejecutar
    $ajaxLogin = new Ajax_prueba();
    $ajaxLogin->ajaxPrueba($mensaje, $token,$payload);

} else {
    // Si no es POST, devolvemos error
    http_response_code(405);
    echo json_encode([
        "error" => "Método no permitido"
    ]);
}
