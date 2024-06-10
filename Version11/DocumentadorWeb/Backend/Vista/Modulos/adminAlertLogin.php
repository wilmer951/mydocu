<?php include "controlsesion.php"; ?>

<?php


include "Alerts/alertsaction.php";



$acTualizarAlertLogin = new Controlador_adminAlertLogin();
$acTualizarAlertLogin -> acTualizarAlertLoginControlador();
$acTualizarAlertLogin -> borrarAlertloginControlador();





?>

    
    
    <?php include "menu.php"; ?>
    <hr>


<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Alerta login</h1>
            </div>
            
<div class="container-contenedor"><!-- incio contenerdor  -->        
            
  
  <div class="row">
           
              <div class="col-3 text-center">
                          
              <div class="card">
                        <div class="card-header text-center">
                            <h6>Agregar alerta</h6>
                              </div>
                            <div class="card-body text-center">


                          <form method="post" enctype="multipart/form-data" class="form1">

                                       <input type="hidden" name="actmslongin" value="1">


                                                <!-- 
                                                   <div class="form-group mb-3">
                                                      <label >Menaje:</label>
                                                      
                                                      <textarea class="form-control"name="mensajeEditar" rows="3" placeholder="Digite articulo"></textarea>
                                                        
                                                      </div>
                                                    -->

                                        <div class="row g-3 align-items-center mb-3">
                                          <div class="col-auto">
                                            <label for="inputPassword6" class="col-form-label">Tipo:</label>
                                          </div>
                                          <div class="col-12">

                                          <select id="tipoAlerLogin" class="form-control form-control-sm" name="editarTipoAlerLogin" required>
                                          <option value="">Seleccionar tipo.</option>
                                          <option value="1">Recordatorio</option>
                                          <option value="2">Anuncio</option>
                                          <option value="3">Otro</option>
                                          </select>
                                          

                                          </div>

                                        </div>



                                        <div class="form-group mb-3">
                                        <label >Detalle:</label>
                                        
                                        <textarea class="form-control form-control-sm"name="detalleEditar" rows="3" placeholder="Digite articulo" required></textarea>
                                          
                                        </div>

                                        <div class="form-group mb-3">
                                        <label >Fecha</label>
                                            <input class="form-control form-control-sm" type="date" name="fechaeditar" required>
                                        </div>


                                        <div class="form-group mb-3">
                                        <input type="file" class="form-control form-control-sm" id="instructivo" name="instructivo" aria-describedby="inputGroupFileAddon01">
                                          </div>
                                          

                                        <input type="submit" class="btn btn-idemi" value="Guardar">
                                        

                            </form>

                          </div>
                        </div>

              </div>

              
              <div class="col-9 text-center">
_

                      

                      <table class="table table-bordered table-sm" id="dataTable" cellspacing="0">
                        <thead>
                          <tr>

                            <th scope="col">Alerta</th>
                            <th scope="col">Imagen/video</th>
                            <th scope="col">Borrar</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php  
                              $consulalerLogin= new Controlador_adminAlertLogin();
                              $consulalerLogin -> consultaAlertloginControlador();

                        ?>


                        </tbody>
                      </table>

                                                
                                            
              </div>
            
                
  
      <div class="row">

      <div class="col-3 text-center">

      <img id="imgSalida" width="100%" src="">
      </div>
      </div>




  </div>            

</div>


                      
<!-- CONTENIDO FIN  -->



<!-- VENTANA MODAL  BORRADO -->


<!-- Modal -->
<div class="modal fade" id="modalborradoAlertLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          
          <input name="idborraalerLogin" type="hidden" value="">
          <input name="imgAlerlogin" type="hidden" value="">

               <strong> Realmente quieres borrar el item?</strong>
      

                          
                
        
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-danger" name="enviar" value="Borrar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            
        </form>
      </div>
    </div>
  </div>
</div>





