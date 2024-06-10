<?php
	

	class Controlador_autoLogin{



	

//******************** CONSULTAR VARIABLE DE SESION ACTIVA. //********************
	public static function autoLoginControlador(){


                session_start();
            
                if(isset($_SESSION["usuario"])){


                        $usuario=$_SESSION["usuario"];
                
                        echo "ok";


                    }else{

                        echo "ko";
                    }



	}








}