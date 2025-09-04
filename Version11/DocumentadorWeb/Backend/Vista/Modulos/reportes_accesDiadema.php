<div class="card" style="width: 18rem;">
  <img src="Vista/imagenes/reportes.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h6 class="card-title">Reporte cambio de accesorios</h6>

    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accesorios">
    GENERAR REPORTE
</button>


  </div>
</div>












<!-- ************************************** POPUT REPORTE ACCESORIOS DIADEMA INICIO  ************************-->


<div class="modal fade" id="accesorios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REPORTE CAMBIO ACCESORIOS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
    
                                <form action="Controlador/Reportes/reporteAccesorisoDiadema.php" method="post">



                                <div class="form-group mb-3">
                                <LABEl>Usuario</LABEl>
                                        <select class="form-control" name="usuario">
                                          <option value="">Todos</option>
                                        <?php   
                
                $consuluser = new Controlador_consulReport();
                $consuluser -> consulUsuariosReportControlador();
              ?>
            
                                     

                                        </select>

                                  </div>


                                      <div class="form-group mb-3">
                                        <LABEl>Fedha inicial</LABEl>

                                          <input type="date" class="form-control" name="fechini" required>

                                                  </div>


                                     <div class="form-group mb-3">

                                     <LABEl>Fedha final</LABEl>    
                                     <input type="date" class="form-control" name="fechfin" required> 

                                          </div>        




                                      <div class="form-group mb-3">

                                        <input class="btn btn-idemi" type="submit" value="GENERAR">
                                        </div>
                                      
                                              </form>
    
    </div>
  
    </div>
  </div>
</div>



<!-- ************************************** POPUT REPORTE ACCESORIOS DIADEMA FIN  ************************-->