<?php

session_start();

$perfilpermisio =['2','4'];

if(!$_SESSION["validar"]||!in_array($_SESSION["perfil"],$perfilpermisio)){

  

  header("location:index.php?ir=sinacceso");

  exit();

}

?>
<?php

include "Alerts/alertsaction.php";

?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Objetivo Wiki</h1>
            </div>
            
            
            
            <div class="container-contenedor"><!-- incio contenerdor  -->




       





            </div>


                      
<!-- CONTENIDO FIN  -->

      
