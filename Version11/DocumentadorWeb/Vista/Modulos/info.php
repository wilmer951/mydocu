<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">
  <div class="card">
    <div class="card-body ">

            
    
    <div class="row">

              <div class="col-12">
              <h5>Información de interes</h5>
              </div>
    </div>

 
		<?php   
                
                  $consultaArtinfo = new Controlador_informacion();
                  $consultaArtinfo -> consultaarticulosinfoContralador();
            ?>



    </div>	
  </div>
</div>
