<?php

// Incluir el controlador y la clase Ajax
require_once "../../Controlador/controlador_login.php";
require_once "../../Modelo/Modelo_login.php";

// Puedes mover esta clase a un archivo separado si lo deseas
class Ajax_login {

    public function autoLoginAjax($usuario, $password) {
        // Aquí puedes agregar validaciones si lo deseas

        // Llamar al controlador
        $respuesta = controlador_login::loginControlador($usuario, $password);

        // Devolver respuesta al frontend
        
        echo json_encode($respuesta);
    }
}

// Verificar que se hizo una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recoger los datos enviados desde JavaScript
    $usuario = $_POST['nameUserLogin'] ?? '';
    $password = $_POST['namePasswordLogin'] ?? '';

    // Instanciar y llamar a la clase Ajax
    $ajaxLogin = new Ajax_login();
    $ajaxLogin->autoLoginAjax($usuario, $password);

} else {
    // Si no es POST, se puede devolver un error
    echo "Método no permitido";
}
