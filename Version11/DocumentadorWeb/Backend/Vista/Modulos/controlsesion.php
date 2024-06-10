<?php

session_start();

$perfilpermisio =['2'];




if(!$_SESSION["validar"]||!in_array($_SESSION["perfil"],$perfilpermisio)){

  

  header("location:index.php?ir=sinacceso");
exit();

}

