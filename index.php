
<?php

require_once "Controlador/Controlador_enlaces.php";
require_once "Controlador/Controlador_login.php";
require_once "Controlador/Controlador_categorias.php";
require_once "Controlador/Controlador_categoriasSub.php";

require_once "Modelo/Modelo_enlaces.php";
require_once "Modelo/Modelo_login.php";
require_once "Modelo/Modelo_categorias.php";
require_once "Modelo/Modelo_categoriasSub.php";



$mvc = new Controlador_enlaces();
$mvc -> plantilla();

?>
