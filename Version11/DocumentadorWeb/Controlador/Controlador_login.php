<?php

class Controlador_login {


//********************* METODO LOGIN  *******************************	


public function loginControlador(){


    if(isset($_POST["nameUserLogin"]))
        {
                
    $nameusuario=strtoupper($_POST["nameUserLogin"]);


    
        $encriptar = crypt($_POST["namePasswordLogin"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        $datosControlador = array( "usuario"=>$nameusuario, "password"=>$encriptar);
        $respuesta = Datoslogin::loginModelo($datosControlador, "usuarios");



        if ($respuesta==false) 
        { 

            echo '<div id="divErrorlogin" class="alert alert-danger" role="alert">Error usuario y/o contraseña</div>';
        }



        else if ($respuesta["usuario"]==$nameusuario && $respuesta["password"]==$encriptar && $respuesta["estado"]==1)

            {

            
            
            session_start();
            $_SESSION["validar"] = true;
            $_SESSION["usuario"] = $respuesta["usuario"];
            $_SESSION["nameusr"] = $respuesta["nombres"];
            $_SESSION["id"] = $respuesta["id"];
            $onllogin=$respuesta["id_login"];


            
            $actLogin = Datoslogin::ultimoLoginModelo($_SESSION["id"],"usuarios");


                        if ($onllogin==1) {
                            header("location:index.php?ir=chpw");
                    }else{
                            header("location:index.php?ir=interfaz");
                    }

            
        }

   
    }


}






//********************* METODO RECONECTAR LOGIN  *******************************	


public static function reconectarLoginControlador($datos){


    
                
    $nameusuario=strtoupper($datos["usuario"]);


    
        $encriptar = crypt($datos["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        $datosControlador = array( "usuario"=>$nameusuario, "password"=>$encriptar);
        $respuesta = Datoslogin::loginModelo($datosControlador, "usuarios");



        if ($respuesta==false) 
        { 

            echo '<div id="alertreconection" class="alert alert-danger mt-4" role="alert">Error usuario y/o contraseña</div>';
        }

        else  if ($respuesta["usuario"]==$nameusuario && $respuesta["password"]==$encriptar)

            {

            
            
            session_start();
            $_SESSION["validar"] = true;
            $_SESSION["usuario"] = $respuesta["usuario"];
            $_SESSION["nameusr"] = $respuesta["nombres"];
            $_SESSION["id"] = $respuesta["id"];
            $onllogin=$respuesta["id_login"];


            
            $actLogin = Datoslogin::ultimoLoginModelo($_SESSION["id"],"usuarios");

            echo 'ok';
            
        }

      




}
















#------------------------------------
public function cambiarPassControlador(){

    session_start();
    $usuario=$_SESSION["usuario"];

    
if (isset($_POST["namepasseditar"])) { // ISSET




if ($usuario==="adm"||$usuario==="Admtro") {

    header("location:index.php?ir=interfaz&st=fail");

}else{



    if ($_POST["namepasseditar"]==$_POST["namepasseditar2"]) {


        $encriptar = crypt($_POST["namepasseditar"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


        $datosController = array( "usuario"=>$usuario, 
            "password"=>$encriptar
        );



        $respuesta = Datoslogin::cambiarPassModelo($datosController, "usuarios");

        if($respuesta == "success"){


            header("location:index.php?ir=interfaz&st=ok");

        

                }else{
                        header("location:index.php?ir=chpw&st=fail");	


                }
}
}
        }//CIERRE ISSET


    }//CIERRE METODO







}