<?php
session_set_cookie_params(60*60*24*360);
session_start();

if(!$_SESSION["validar"]){

  header("location:index.php?ir=login");

  exit();

}

?>