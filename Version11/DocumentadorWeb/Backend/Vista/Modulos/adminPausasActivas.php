<?php include "controlsesion.php"; ?>
<?php



$adminPausas= new Controlador_adminPausasActivas();
$adminPausas -> actualizarPausaActivaControlador();
$adminPausas -> borrarInstructivoControlador();
$adminPausas -> InsertarInstructivoControlador();





$adminEventos = new Controlador_eventos();
$adminEventos -> ingresarEventoControlador();
$adminEventos -> borrarEventosControlador();

include "Alerts/alertsaction.php";

?>

    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Administración pausas activas</h1>
            </div>
            
            
            
            <div class="container-contenedor"><!-- incio contenerdor  -->


                    <div class="row">
                        
                    
                                  <div class="col-4">
                                  <H5 class="text-center">Alertas Creadas</H5>


                                  <table class="table-striped table-sm"  width="100%">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Nombre</th>
                                                      <th scope="col">Estado</th>
                                                      <th scope="col">Editar</th>
                                                      
                                                    </tr>
                                                  </thead>
                                                  <tbody>


                                                  
                                                  <?php
                                                      $consultaAlertPausasActivas = new Controlador_adminPausasActivas();
                                                      $consultaAlertPausasActivas -> consultaAlertPausasActivasControlador();
                                                          
                                                      ?>
                                          
                                          
                                          
                                          
                                                      
                                                  
                                                
                                                  </tbody>
                                                </table>

                                  </div>




                      <div class="col-2">

                                          <div class="card">
                                                  <div class="card-body text-center">
                                                    <button id="btninstructivos" class="btn btn-idemi" data-bs-toggle="modal" data-bs-target="#modalinstructivos">Instructivos</button>
                                                  </div>
                                                </div>

                                                                      
                      </div>




                                  <div class="col-4">

                                                      <div class="card">
                                                          <div class="card-header text-center">
                                                           <h5>Tiempo de pospocición de alerta.</h5>
                                                          </div>
                                                          <div class="card-body text-center ">


                                                          
                                                          <?php
                                                      $consultarRangoTiempAlert = new Controlador_adminPausasActivas();
                                                      $consultarRangoTiempAlert -> consRangotiempControlador();
                                                          
                                                      ?>
                                        

                                                                                                                        </div>
                                                      </div>
                                  </div>


                                  <div class="col-2">

                                                   <div class="card">
                                                                      <div class="card-header text-center">
                                                                      <h6>Tiempo cambio de accesorios</h6>
                                                                      </div>
                                                                      <div class="card-body text-center">

                                                                                      <?php

                                                                                    $consultarDiasCambioAccesorios = new Controlador_adminPausasActivas();
                                                                                    $consultarDiasCambioAccesorios -> consDiasCambioAccesoControlador();
                                                                                        
                                                                                    ?>


                                                                            
                                                                            Dias(s).
                                                                      </div>

                                                                          <button id="actuaDiasCA" class="btn btn-idemi">actualizar</button>

                                                          </div>


                                  </div>




                    </div>





<div class="row">


    <div class="col-10">
                                      <div class="mt-5">


                                      <div class="form-check form-switch">

                                               <?php 


                                                                    $statusevent = new Controlador_eventos();
                                                                    $statusevent -> consulPlanifiEventosControlador();


                                      ?>
                                            
                                              <label class="form-check-label" for="statusEvent">Estado planificador eventos MYSQL</label>
                                            </div>
                                  <div class="text-center">


         



                                  

                                        <button type="button" class="btn btn-outline-success text-center" data-bs-toggle="modal" data-bs-target="#modalregistroevento">
                                                            NUEVO  <img  class="px-2" src="Vista/css/icons/plus-circle.svg" alt="">
</div>        </button>

                                              </div>


                                      <div class="table-responsive">

                  <table class="table table-bordered table-sm " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>

                  <th scope="col">Nombre</th>
                  <th scope="col">Start</th>
                  <th scope="col">Intervalo</th>
                  <th scope="col">Tiempo</th>
                  <th scope="col">Comentario</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Borrar</th>
                  </tr>
                  </thead>
                  <tbody>


                  <?php
                  $consuleventos = new Controlador_eventos();
                  $consuleventos -> consultarEventosControlador();

                  ?>

                  </tbody>
                  </table>
                  </div>

          </div>


          <div class="col-2 mt-5">

    
                                <div class="card text-center">

                                <img src="Vista\Imagenes\reportedetallado.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            



                            <button type="button" class="btn btn-idemi" data-bs-toggle="modal" data-bs-target="#modalresum" onclick="functionResumenPausasActivas()">
                            Ver resumen
                                    </button>
                        </div>
                      </div>
          </div>



</div>





            </div>


                      
<!-- CONTENIDO FIN  -->

      



<script>

function update(val) {
    updateTiempoPausactiva(val);
}







</script>  




<!--    EDITAR  USUARIO  INICIO -->

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" height="100%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar alertas pausa activa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          <input name="ideditar" type="hidden" value="">


          <div class="form-group mb-3">
    
          <textarea class="form-control" name="nameTituloEditar">Titulo</textarea>
          
        </div>
    
    
        <div class="form-group mb-3">

        <textarea class="form-control" name="nameMensajeditar">Mensaje</textarea>

        </div>


        <div class="form-group mb-3">

        <select class="form-control" name="estadoeditar" id="estadoeditar">
          <option value="">Selecciones una opción</option>
          <option value="0">Inactivo</option>
          <option value="1">Activo</option>
          

          </select>
          </div>

                                        


                          
                
        
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-idemi" name="enviar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
        </form>
      </div>
    </div>
  </div>
</div>

<!--    EDITAR  USUARIO  FIN -->






<!-- VENTANA MODAL REGISTRO   -->



<div class="modal fade" id="modalregistroevento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar evento alertas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">


            <div class="form-group mb-3">
                
                <select class="form-control" name="tipoAlert" required>
                    <option value="">Seleccione un alerta</option>
                    <option value="1">Pausa Activa</option>
                    <option value="2">Cambio posición Diadema</option>
                    <option value="3">Cambio accesorios Diadema</option>
                </select>
                
              </div>


  <div class="form-group mb-3">
    
    <input type="text" class="form-control" name="nombreEvento" placeholder="Nombre evento" required>
    
  </div>


  <div class="form-group mb-3">
    
    <textarea class="form-control" name="comenEvento" placeholder="Comentario" required></textarea>
    
  </div>

  <div class="form-group mb-3">
    
    <input type="text" class="form-control" name="intervalo" placeholder="intervalo" required>
    
  </div>


  <div class="form-group mb-3">
    
    <select class="form-control" name="recurrencia" required>
        <option value="">Seleccione tiempo</option>
        <option value="MINUTE">Minutos</option>
        <option value="DAY">Dias</option>
    </select>
    
  </div>


  <div class="form-group mb-3">
    
  <input size="16" type="datetime-local" class="form-control" name="hora" id="datetime" required>
    
  </div>




  





      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-idemi" name="enviar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
        </form>
      </div>
    </div>
  </div>
</div>
<!-- VENTANA MODAL  REGISTRO  -->













<!-- VENTANA MODAL  BORRADO -->


<!-- Modal -->
<div class="modal fade" id="modalborradoevento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          
          <input name="idEventoBorrado" type="hidden" value="">

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












<!-- Modal  RESUMEN-->
<div class="modal fade" id="modalresum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resumen ejecución pausas activas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      
                      <div class="table-responsive">

                      <div class="alert alert-info small" role="alert">
<li><strong>PA</strong> = Pausas activas</li>
<li><strong>PD</strong> = Cambio posición diadema</li>
<li><strong>CA</strong> = Cambio accesorios</li>
A continuación se muestran la cantidad de confirmación (<strong>Si</strong>), realizadas por cada ingeniero.
</div>

  <div class="filtros fst-italic mb-1">

    

            <div class="row">

            <div class="col-2">
                filtros
            </div>
              
            <div class="col-4">
              <input type="date" class="form-control-sm" name="resumenfechainicial" id="resumenfechainicial">
            </div>
            
            <div class="col-4">
                <input type="date" class="form-control-sm" name="resumenfechafin" id="resumenfechafin">
            </div>
            <div class="col-2">
              <input type="button" class="btn-sm btn-idemi" onclick="functionResumenPausasActivas()" value="aplicar">
            </div>
            </div> 
    
  </div>

                <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>

                <th scope="col">Usuario</th>
                <th scope="col">Nombres</th>
                <th scope="col">PA</th>
                <th scope="col">PD</th>
                <th scope="col">CA</th>
                
                </tr>
                </thead>
                <tbody id="idresult">

           


                </tbody>
                </table>

                </div>



                              <div class="card border-info mb-3 text center">
                                    
                                    <div class="card-body fs-6 text-center">
                                      


                                                                  <div>
                                                                          Total confirmaciones PA <span id="totalpa" class="fw-bold"></span>
                                                                          </div>

                                                                          <div>
                                                                              Total confirmaciones PD <span id="totalpd" class="fw-bold"></span>
                                                                          </div>

                                                                          <div>
                                                                              Total confirmaciones CA <span id="totalca" class="fw-bold"></span>
                                                                          </div>

                                                                          <div class="mt-2">
                                                                              Total confirmaciones <span id="total"class="fw-bold"></span>
                                                                          </div>


                                    
                                    </div>
                                  </div>

                                  
                          




      </div>



      <div class="modal-footer">
        


      </div>
    </div>
  </div>
</div>






<!-- VENTANA MODAL  INSTRUCTIVOS -->


<!-- Modal -->
<div class="modal fade" id="modalinstructivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Administración Instructivos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5">
<div class="text-center">
    
<button type="button" class="btn btn-outline-success text-center btn-sm" data-bs-toggle="modal" data-bs-target="#modalingresarInstruvico">
                                                      NUEVO  <img  class="px-2" src="Vista/css/icons/plus-circle.svg" alt="">
                                                           </button>

                                                           </div> 

<div class="row">



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
                          $consulInstructvo= new Controlador_adminPausasActivas();
                          $consulInstructvo -> consInstructivosControlador();

                    ?>


                    </tbody>
                  </table>


</div>







<!-- VENTANA INGRESAR INSTRUCTIVO -->


<!-- Modal -->
<div class="modal fade" id="modalingresarInstruvico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo instructivo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="alert alert-info" role="alert">
Formatos permitidos  (jpg,jpeg,png,gif,mp4)
</div>

      <form method="post" enctype="multipart/form-data">
          


      <div class="form-group mb-3">
                
                <select class="form-control" name="tipoAlertinstru" required>
                    <option value="">Seleccione un alerta</option>
                    <option value="1">Pausa Activa</option>
                    <option value="2">Cambio posición Diadema</option>
                    <option value="3">Cambio accesorios Diadema</option>
                </select>
                
              </div>


              <div class="custom-file">
    <input type="file" class="form-control" id="instructivo" name="instructivo" aria-describedby="inputGroupFileAddon01" required>
    
  </div>


              
        
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-idemi" name="enviar" value="Enviar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            
        </form>
      </div>
    </div>
  </div>
</div>

















    
        
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>






<!-- VENTANA MODAL  BORRADO -->


<!-- Modal -->
<div class="modal fade" id="modalborradoinstru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          
          <input name="idborradoinstru" type="hidden" value="">
          <input name="nameborradoinstru" type="hidden" value="">

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
