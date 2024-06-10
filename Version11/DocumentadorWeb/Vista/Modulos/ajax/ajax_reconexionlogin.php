<?php

require_once "../../../Controlador/Controlador_login.php";
require_once "../../../Modelo/crud_login.php";

class Ajax_reconelogin{


    public $user;
    public $pass;

    

    public  function reconectarLoginAjax(){

        

        $datos = array(
        "usuario"=>$this->user,
        "password"=>$this->pass,
                 );

                 $respuesta = Controlador_login::reconectarLoginControlador($datos); 



    }









}//fin clase principal


if(isset($_POST["nameUserLogin"])){

	$k = new Ajax_reconelogin();
	$k -> user= $_POST["nameUserLogin"];
	$k -> pass= $_POST["namePasswordLogin"];

	$k -> reconectarLoginAjax();


}
