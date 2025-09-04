<div class="optioncalidad" style="display: none;">
 
                        <div class="mb-3">
                                        <div class="card text-dark text-center divpromdio" style="max-width: 40rem;">
                                          <div class="card-header">Mi promedio</div>
                                          <div class="card-body">

                                          <div class="row">
                                            <div class="col-1"><img id="imgnotacalidad" src="" alt=""></div>
                                            <div class="col-8 text-left"id="notaalusivacalidad"></div>
                                            <div class="col-3"><h5 class="card-title" id="promediototalcalidad"></h5></div>
                                          </div>
                                            
                                
                                      </div>
                                 </div>
                          </div>

                          <div class="alert alert-info text-center fw-bold" role="alert">
            Objetivo xxxxx , Nota correspondiente a las auditorías realizadas en toma de llamadas.
            <li>Nota máxima a obtener 100%.</li>
            <li>Nota no acumulable con otros objetivos.</li>
            </div>





                
                
                          <h5 class="text-center mt-3">Mis notas de calidad.</h5>

          <div class="divnotascalidad">
                <table id="table2" class="table table-sm table-striped text-center" style="width:100%">
                  <thead>
                    <tr>
                      <th style="width:auto;">#</th>
                      <th style="width:auto;">Fecha</th>
                      <th style="width:auto;">Nota calidad</th>
                      <th style="width:auto;">Nota Soporte</th>
                      <th style="width:auto;">Nota Documen</th>
                      <th style="width:auto;">Nota acumulada</th>
                      <th >Detalle</th>                      
                    </tr>
                  </thead>
                  <tbody id="idresulCalid" class="text-center">
          
                  <tr>

                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  </tr>     
    
                  
                
                  </tbody>
                </table>
                </div>















        </div>













 
        
<!-- Modal -->
<div class="modal fade" id="modalverdetalle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="font: siza 5px;">
      
<div class="container">
      

      <img src="Vista/Imagenes/iconsave-pdf.png" alt="" class="img-fluid text-end" style="max-width: 60px;"  onclick="generatePdf()">

      
        
      <div id="imprmidiv">

      <h5 class="text-center">Detalle individual evaluación</h5>

                  <div class="card">
               
                  <div class="row">
                    <div class="col-8">

                            <hr>
                                          <table class="table table-sm" style="font-size:11px;">

                                          <tr>
                                              <td class="fw-bold">N. Reporte</td>
                                              <td id="detallidreporte">1</td>
                                            </tr>
                                            <tr>
                                              <td></td>
                                            </tr>

                                            <tr>
                                              <td class="fw-bold">Ingeniero</td>
                                              <td id="detallnombre">Nombre completo</td>
                                            </tr>

                                            <tr>
                                              <td class="fw-bold">Fecha</td>
                                              <td id="detallfecha">01/01/2000</td>
                                            </tr>

                                            <tr>
                                              <td class="fw-bold">Duración llamada</td>
                                              <td id="detallTllamada">10</td>
                                            </tr>

                                            <tr>
                                              <td class="fw-bold">N. Caso</td>
                                              <td id="detallcaso">SOP-000000</td>
                                            </tr>
                                          </table>

                                          <hr>
                    </div>

                        <div class="col-4 text-center">
                        <img src="Vista/Imagenes/logoIdemia.png" alt="" class="img-fluid mt-3" style="max-width: 200px;">

                        </div>
                  </div>


                
                  <div class="row">

                          <div class="col-6">

                                  <table class="table table-striped table-sm" style="font-size:11px;" >

                                  <tr>
                                      <td colspan='2' class="fw-bold">Calidad</td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Protocolo de bienvenida</td>
                                      <td id="detacaliitem1"></td>
                                    </tr>

                                    <tr>
                                      <td>Identificación</td>
                                      <td id="detacaliitem2"></td>
                                    </tr>


                                    <tr>
                                      <td>Amabilidad, cortesía y lenguaje</td>
                                      <td id="detacaliitem3"></td>
                                    </tr>

                                    <tr>
                                      <td>Entrega información</td>
                                      <td id="detacaliitem4"></td>
                                    </tr>


                                    <tr>
                                      <td>Despedida</td>
                                      <td id="detacaliitem5"></td>
                                    </tr>

                                    <tr>
                                      <td colspan='2'class="fw-bold">Soporte</td>
                                      
                                    </tr>

                                    <tr>
                                      <td>Diagnóstico</td>
                                      <td id="detasoportem1"></td>
                                    </tr>


                                    <tr>
                                      <td>Manejo tiempo de llamada</td>
                                      <td id="detasoportem2"></td>
                                    </tr>

                                    <tr>
                                      <td>Dominio del tema</td>
                                      <td id="detasoportem3"></td>
                                    </tr>

                                    <tr>
                                      <td>Sigue procedimientos</td>
                                      <td id="detasoportem4"></td>
                                    </tr>

                                    <tr>
                                      <td>Soluciona</td>
                                      <td id="detasoportem5"></td>
                                    </tr>


                                    <tr>
                                      <td colspan='2' class="fw-bold">Documentación</td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Registro de caso</td>
                                      <td id="detadocutem1"></td>
                                    </tr>

                                    <tr>
                                      <td>Ingreso Correcto de Información</td>
                                      <td id="detadocutem2"></td>
                                    </tr>

                                    <tr>
                                      <td>Categorización</td>
                                      <td id="detadocutem3"></td>
                                    </tr>


                              

                                    <tr>
                                      <td>Diagnóstico, solución y cierre</td>
                                      <td id="detadocutem4"></td>
                                    </tr>


                                    <tr>
                                      <td>Tiempo apertura de caso</td>
                                      <td id="detadocutem5"></td>
                                    </tr>

                                    </table>


                                    <div id="detacomentario" class="form-control"   style="font-size:12px;" rows="5" placeholder="Comentarios" readonly></div>


                          </div>


                          <div class="col-6">


                                      <div>
                                        <h6 class="text-center">Total notas</h6>
                                        <table class="table table-striped table-sm" style="font-size:11px;">
                                          <tr>
                                            <td>N. Calidad</td>
                                            <td id="detasubcalidad">td>
                                          </tr>

                                          <tr>
                                            <td>N. Soporte</td>
                                            <td id="detasubsoporte"></td>
                                          </tr>

                                          <tr>
                                            <td>N. Documentación</td>
                                            <td id="detasubdocu"></td>
                                          </tr>

                                          <tr>
                                            <td colspan="2"></td>
                                            
                                          </tr>

                                          <tr>
                                            <td>N. Promedio</td>
                                            <td id="detatotalcalidad"></td>
                                          </tr>

                                        </table>
                                      
                                      </div>

                          </div>


                      </div>
                  </div>
                
          </div>

          </div><!-- fin impresion -->
          </div>

      <div class="modal-footer">
     
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            
        
      </div>
    </div>
  </div>
</div>


<!-- VENTANA MODAL  BORRADO  -->




