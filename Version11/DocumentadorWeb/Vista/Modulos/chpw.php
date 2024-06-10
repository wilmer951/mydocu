<div class="divinterfaz">

<h5 class="mt-5 text-center">¡Hola!</h5>

<form  method="post" class="py-5 px-4" onsubmit="return changuePass()">

<div class="row">
  <label id="chanPassFail" for="exampleInputPassword1" class="alert-danger"></label>
   </div>


  <div class="row mb-5">
      <div class="form-group">
          <label>New Password</label>
          <input type="password" name="namepasseditar" class="form-control" id="namepasseditar" required>
          <div class="line"></div>
      </div>
    </div>


  <div class="row mb-5">
      <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="namepasseditar2" class="form-control" id="namepasseditar2" required>
          <div class="line"></div>
      </div>
    </div>

  <div class="row text-center">
  <div class="form-group">
  <button  class="btn btnone btn-sm" type="submit">Cambiar</button>
  </div>
  </div>

  <?php
                                      $cambiarPass = new Controlador_login();
                                      $cambiarPass -> cambiarPassControlador();
                                        
                                    ?>


</form>
</div>
