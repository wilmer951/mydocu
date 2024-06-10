<?php

class Controlador_enlaces {



      //************* METODO CARGAR PLANTILLA PLANTILLA **************
public function plantilla()
            {
            include "Vista/plantilla.php";
            }


//********************* METODO ENLACES *******************************

public function enlacesControlador(){

      if(isset($_GET["ir"]))
      {

      $enlacesControlador = $_GET["ir"];

      }

            else{

            $enlacesControlador = "index";

            }

            $respuesta = ModulosMVC::enlacesModelos($enlacesControlador);

            include $respuesta;
}




}//FIN CLASE PRINCIPAL