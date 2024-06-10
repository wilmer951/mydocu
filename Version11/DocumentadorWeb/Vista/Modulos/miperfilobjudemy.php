
<?php 
          $consulcursos = new Controlador_Pefil();
          $consulcursos -> ingresarCursoControlador();

    ?>


<?php 

include "Alerts/alertsaction.php";
?>

<div class="optionudemy" style="display: none;">


<div class="mb-3">
                                        <div class="card text-dark text-center divpromdio" style="max-width: 40rem;">
                                          <div class="card-header">Mi promedio</div>
                                          <div class="card-body">

                                          <div class="row">
                                            
                                            <div class="col-9" id="totalcursosaprobdos"></div>
                                            <div class="col-3"><h5 class="card-title" id="promedioudemy"></h5></div>
                                          </div>
                                            
                                
                                      </div>
                                 </div>
                          </div>




 
            <div class="alert alert-info text-center" role="alert">
            
            <li> Objetivo xxxxx</li>
            <li> Realizar capacitaciones en la plataforma Udemy de minimo 4 horas de acuerdo al analisis del AG5.</li>
            
            <li>Total cursos a realizar <span id="viewcantcursos" class="fw-bold"></span></li>
            <li>Nota máxima a obtener <span id="viewPorcencursos" class="fw-bold"></span>%.</li>
            <li>Fecha de cierre <span id="viewFecCierrecencursos" class="fw-bold"></span></li>
            

            </div>




      <div>

      <button type="button" id="botonagregarcurso" class="btn btn-outline-success mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#agregarcurso">Agregar curso</button>

      <div class="alert alert-danger" id="viewMensgeCierreObjet" role="alert">
  
</div>



      <table id="table2" class="table table-sm table-striped text-center" style="width:100%">
                  <thead>
                    <tr>
                      
                      <th style="width:auto;">Fecha de finalización</th>
                      <th style="width:auto;">Nombre del curso</th>
                      <th style="width:auto;">Estado</th>
                      <th >Detalle</th>                      
                    </tr>
                  </thead>
                  <tbody id="idresulobjudemy" class="text-center">
          
                  <tr>

       
                  </tr>     
    
                  
                
                  </tbody>
                </table>
                </div>





      </div>








</div>
























 
        
<!-- Modal -->
<div class="modal fade" id="agregarcurso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">Agregar curso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


                <div class="modal-body">
                

                        <div class="container">
                
                <form method="post" class="mt-5" enctype="multipart/form-data">

                <fieldset>
                        <div class="row mb-1">

                                <div class="col-3">
                                      <label class="form-label fst-italic fw-bold">Nombre curso</label>
                                </div>
                           
                                <div class="col-6">
                                      <input type="text" class="form-control form-control-sm" name="namecurso" id="" required>
                                </div>
                          
                          </div>





                          <div class="row mb-1">

                                          <div class="col-3">
                                                <label class="form-label fst-italic fw-bold">Fecha finalización</label>
                                          </div>

                                          <div class="col-6">
                                                <input type="date" class="form-control form-control-sm" name="fechacurso" id="" required>
                                          </div>

                          </div>


                          <div class="row mb-1">

                                    <div class="col-3">
                                          <label class="form-label fst-italic fw-bold">Duración</label>
                                    </div>

                                    <div class="col-6">
                                          <input type="text" class="form-control form-control-sm"  pattern="[0-9]*[.]?[0-9]*" name="duracioncurso" placeholder="(horas) ejemplo 4.5" id="" required>
                                    </div>

                          </div>





                                    <div class="row mb-1">

                                    <div class="col-3">
                                          <label class="form-label fst-italic fw-bold">Adjuntar certificado</label>
                                    </div>
                                        <div class="col-5">
                                        
                                              <input type="file" class="form-control form-control-sm" name="adjuntocurso" id="adjuntocurso" required>
                                        </div>

                                        <div class="col-4">
                                          <label class="form-label fst-italic text-danger">Archivos  <span class="fw-bold">(jpg, jpeg, png)</span></label>
                                    </div>

                              </div>
                          </fieldset>



                            <div class="row mt-5">
                            <div class="col-6">
                              <input type="submit" class="btn btn-sm btnone" value="Guardar">
                              </div>
                            </div>


                </form>
                
                
         
                </div>

                      



















            
            
            
                </div>

      <div class="modal-footer">
     
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            
        
      </div>
    </div>
  </div>
</div>


<!-- VENTANA MODAL  BORRADO  -->




