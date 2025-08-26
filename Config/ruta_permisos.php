<?php
// Configuración centralizada de roles por ruta/API

return [
    'api_categorias.php'     => [1],        // Solo Admin
    'api_productos.php'      => [1, 2],     // Admin y Editor
    'api_reportes.php'       => [3],        // Solo Analistas
    'api_usuarios.php'       => [1],        // Solo Admin
    'api_resetPasswrod.php'  => [1],        // Solo Admin
    'api_publica.php'        => [],         // Cualquier usuario autenticado
];
