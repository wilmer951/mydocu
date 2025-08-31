<?php
require_once "../../Controlador/Controlador_usuarios.php";
require_once "../../Modelo/Modelo_usuarios.php";
require_once "../../Middleware/auth_middleware.php";

header('Content-Type: application/json');

// Verificación de autenticación vía JWT
$payload = require_role_for_route();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {


    case 'POST':
        resetearPassword();
        break;



    default:
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
        break;
}





// Tu función está definida aquí, esperando $data como argumento
function resetearPassword() {

     $data = json_decode(file_get_contents("php://input"), true);
    if (!isset($data['id_usuario']) || !isset($data['nuevaPassword'])) {
        http_response_code(400);
        echo json_encode(["error" => "Faltan campos obligatorios para resetear la contraseña"]);
        return;
    }



     $respuesta = Controlador_usuarios::resetPawwordControlador($data['id_usuario'],$data['nuevaPassword']);

       echo json_encode($respuesta);
}


// 2. Llamar a la función, pasando $data como argumento.


?>