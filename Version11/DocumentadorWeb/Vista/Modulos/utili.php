<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">

        <div class="card">
          <div class="card-body">
                  <h5>Utilidades</h5>

                  <button id="buttoncodVeri">Cod. Verificación</button>
                    <button id="edad">Calcular Edad</button>
                    <button id="anullserial">Anullseriales</button>
            </div>
          </div>

<div class="contenidoutili"></div>


            
<?php  
include "utili_codveri.php"; 
include "utili_edad.php";
include "utili_anulserial.php";?>






<div class="modal" id="modalresul" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">

        <div id="resultado"></div>
      
      </div>
      
    </div>
  </div>
</div>





</div>    
