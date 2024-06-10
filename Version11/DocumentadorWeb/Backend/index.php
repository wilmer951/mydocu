<?php

require_once "Controlador/Controlador_enlaces.php";
require_once "Controlador/Controlador_login.php";
require_once "Controlador/Controlador_adminUsers.php";
require_once "Controlador/Controlador_adminBottons.php";
require_once "Controlador/Controlador_adminModulos.php";
require_once "Controlador/Controlador_adminSubmodulos.php";
require_once "Controlador/Controlador_adminCategorias.php";
require_once "Controlador/Controlador_adminAlertLogin.php";
require_once "Controlador/Controlador_subPsw.php";
require_once "Controlador/Controlador_subCmd.php";
require_once "Controlador/Controlador_subScr.php";
require_once "Controlador/Controlador_adminPausasActivas.php";
require_once "Controlador/Controlador_consulReport.php";
require_once "Controlador/Controlador_parametros.php";
require_once "Controlador/Controlador_eventos.php";
require_once "Controlador/Controlador_adminInfo.php";
require_once "Controlador/Controlador_adminInventario.php";
require_once "Controlador/Controlador_adminCalidad.php";
require_once "Controlador/Controlador_adminObjetivos.php";





require_once "Modelo/Enlaces.php";
require_once "Modelo/Modelo_login.php";
require_once "Modelo/Modelo_adminUsers.php";
require_once "Modelo/Modelo_adminBottons.php";
require_once "Modelo/Modelo_adminModulos.php";
require_once "Modelo/Modelo_adminSubmodulos.php";
require_once "Modelo/Modelo_adminCategorias.php";
require_once "Modelo/Modelo_adminAlertLogin.php";
require_once "Modelo/Modelo_subPsw.php";
require_once "Modelo/Modelo_subCmd.php";
require_once "Modelo/Modelo_subScr.php";
require_once "Modelo/Modelo_adminPausasActivas.php";
require_once "Modelo/Modelo_consulReport.php";
require_once "Modelo/Modelo_parametros.php";
require_once "Modelo/Modelo_eventos.php";
require_once "Modelo/Modelo_adminInfo.php";
require_once "Modelo/Modelo_adminInventario.php";
require_once "Modelo/Modelo_adminCalidad.php";
require_once "Modelo/Modelo_adminObjetivos.php";



$mvc = new Controlador_enlaces();
$mvc -> plantilla();

?>



