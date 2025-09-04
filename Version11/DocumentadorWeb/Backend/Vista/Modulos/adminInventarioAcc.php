<?php include "controlsesion.php"; ?>
<?php



include "Alerts/alertsaction.php";


$marcadoAccesorio = new Controlador_adminInventario();
$marcadoAccesorio->MarcadooAccControlador();



?>



<?php include "menu.php"; ?>
<hr>

<!-- CONTENIDO INICIO -->


<div class="title mb-5 text-center">
  <h1> Inventario</h1>
</div>





  <div class="container-contenedor"><!-- incio contenerdor  -->

<div>
  <a href="index.php?ir=adminInventarioHome" class="btn btn-idemi" >VOLVER</a>

</div>



    <div class="text-center">
      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalregistro">
        NUEVO <img class="px-2" src="Vista/css/icons/plus-circle.svg" alt="">
      </button>

    </div>


    <div class="table-responsive">

      <table class="table table-bordered table-sm table-striped" id="example" width="100%" cellspacing="0">
        <thead>
          <tr>

            <th scope="col">Fecha de ingreso</th>
            <th scope="col">Accesorio</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Utilizar</th>
            
          </tr>
        </thead>
        <tbody>


          <?php
          $consulIAcceInventario = new Controlador_adminInventario();
          $consulIAcceInventario->consultarInventarioAccControlador();

          ?>


        </tbody>


      </table>


    </div>


  </div>



  <!-- CONTENIDO FIN  -->







  <!-- VENTANA MODAL REGISTRO   -->



  <div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar elemento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


        </div>
        <div class="modal-body">

          

          <div id="divregisAcceso">

            <form onsubmit="return regisaccesorioajax()">



              <div class="form-group mb-3">

                <select class="form-control" name="idAccesRegistro" id="idAccesRegistro" required>
                  <option value="">Seleccione un accesorio</option>

                  <?php

                  $consulaccesorElemen = new Controlador_adminInventario();
                  $consulaccesorElemen->consulaccesoElemnControlador();
                  ?>

                </select>

              </div>

              <div class="form-group mb-3">
                <input type="text" class="form-control" name="cantAccesRegistro" placeholder="Cantidad (Obligarorio)"
                  required>
              </div>

              <div class="form-group mb-3">

                <textarea class="form-control" id="obsvAccesRegis" name="obsvAccesRegis" rows="2"
                  placeholder="Observaciones"></textarea>

              </div>


              <input type="submit" class="btn btn-idemi" name="enviar">

            </form>


          </div>




        </div>











        <div class="modal fade" id="modalProcesandodatos" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
          tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

              <div class="modal-body">
                Procesando solicitud, espere...
              </div>

            </div>
          </div>
        </div>













        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


        </div>


















      </div>
    </div>
  </div>
  <!-- VENTANA MODAL  REGISTRO  -->





 <!-- MMODAL UTILIZAR ACCESORIO -->


<!-- Modal -->
<div class="modal fade" id="modalutilizarAccesorio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          
          <input name="idAccesorio" type="hidden" value="">

               <strong> Realmente quieres marcar como utilizado?</strong>
      

                          
                
        
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-danger" name="enviar" value="Utilizar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            


     
        </form>
      </div>
    </div>
  </div>
</div>


<!-- VENTANA MODAL  BORRADO  -->