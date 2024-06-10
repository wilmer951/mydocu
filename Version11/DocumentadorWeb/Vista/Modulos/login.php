<div class="divlogin">
<h1 class="mb-5">Login</h1>







<form class="formlogin blur-in" method="post">
  
  <div class="row mb-4">
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" name="nameUserLogin" class="inputmayuscula" required>
            <div class="line"></div>
        </div>
  </div>
  


  <div class="row">
      <div class="form-group">
          <label>Contraseña</label>
          <input type="password" name="namePasswordLogin" required>
          <div class="line"></div>
      </div>
    </div>

  <div class="row">
  <button  class=" btn btn-sm buttonanime mt-5" type="submit">Ingresar</button>
  </div>

			

</form>




            <?php
              $login = new Controlador_login();
              $login -> loginControlador();
              
            ?>  
            <div class="text-center text-white mt-3">Versión 11</div>
</div>



<script>

window.onload = function(){redimlogin();}
 
function redimlogin(){

  var ventana_ancho = $(window).width();
  var ventana_alto = $(window).height();
  

  if (ventana_ancho>400) {
    
    $(location).attr('href',"index.php?ir=home");
  }
	
}

</script>