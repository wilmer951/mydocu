<?php
/**
 * Función para detectar el sistema operativo, navegador y versión del mismo
 */


 $browser="Desconocido";

 $s = $_SERVER['HTTP_USER_AGENT'];
 if (preg_match('/Edg/i', $s)) {
   $browser = 'Edge';
 }else if (preg_match('/Chrome/i', $s)) {
  $browser = 'Chrome';
}else if (preg_match('/Firefox/i', $s)) {
  $browser = 'Firefox';
 
}



  if ($browser!='Chrome') {
    echo '

    <div class="alert alert-danger" role="alert">
    <h2>ATENCIÓN</h2>
    <h5>Esta utilizando como navegador '.$browser.', puede que algunas funciones no sean compatibles, recomendamos utilizar Chrome para un funcionamiento correcto.</h5>
  </div>';
  }


?>




<div class="divLogin">
<main class="form-signin">
  <form method="post" >
    <img class="mb-5" src="Vista/imagenes/logoidemia.png" alt="" width="100%" height="57">
    <h1 class="h3 mt-3 mb-3 fw-normal text-center">Panel de control</h1>

    <div class="form-floating">
      <input type="text" class="form-control mb-3" id="floatingInput" placeholder="usuario" name="nameUserLogin">
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="namePasswordLogin">
      <label for="floatingPassword">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-idemi" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-center">&copy; 2019–2023</p>
  </form>

  <?php
              $ingreso = new Controlador_login();
              $ingreso -> LoginControlador();
               
            ?>

</main>

</div>
    
