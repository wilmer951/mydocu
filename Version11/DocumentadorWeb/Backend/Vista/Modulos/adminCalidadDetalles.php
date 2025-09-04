<?php

session_start();

$perfilpermisio =['2','3'];

if(!$_SESSION["validar"]||!in_array($_SESSION["perfil"],$perfilpermisio)){

  

  header("location:index.php?ir=sinacceso");

  exit();

}

?>



<?php

include "Alerts/alertsaction.php";

?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
            <h1>Calidad detalles</h1>
            </div>
            
            
            
            <div class="container-contenedor"><!-- incio contenerdor  -->

            <a hrf type="button"  href="index.php?ir=adminCalidad" class="btn btn-idemi mb-3">
                                                Volver</a>






                          <div>


                          <div class="table-responsive">

                          <table class="table table-bordered table-sm table-striped" id="example" width="100%" cellspacing="0" >
                                                                  <thead>
                                                                    <tr>

                                                                      <th scope="col">N. Reporte</th>
                                                                      <th scope="col">Ingeniero</th>
                                                                      <th scope="col">N. Calidad</th>
                                                                      <th scope="col">N. Soporte</th>
                                                                      <th scope="col">N. Documentación</th>
                                                                      <th scope="col">N. Promedio</th>
                                                                      <th scope="col">Fecha</th>
                                                                      <th scope="col">T. Llamada</th>
                                                                      <th scope="col">Detalle</th>
                                                                      
                                                                      


                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>


                                                                  <?php
                                                                                          $consulindividualcali = new Controlador_adminCalidad();
                                                                                          $consulindividualcali -> consulIndividualCaliControlador();
                                                                                            
                                                                                        ?>


                                                                  </tbody>


                                                                </table>

                                                                </div>
                          </div>








            </div>


                      
<!-- CONTENIDO FIN  -->

      















<!-- Modal -->
<div class="modal fade" id="modalverdetalle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      

      


      <img src="Vista/Imagenes/iconsave-pdf.png" alt="" class="img-fluid iconoimprimreport"   onclick="generatePdf()">

      
        
      <div id="imprmidiv">

      <h5 class="text-center">Detalle individual evaluación</h5>

                  <div class="card" >
               
                  <div class="row">
                    <div class="col-8">

                            <hr>
                                          <table class="table">
                                            
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

                                  <table class="table table-striped">

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
                                      <td>Diagnostico, solución y cierre</td>
                                      <td id="detadocutem4"></td>
                                    </tr>


                                    <tr>
                                      <td>Tiempo apertura de caso</td>
                                      <td id="detadocutem5"></td>
                                    </tr>

                                    </table>


                                    <div id="detacomentario" class="form-control" rows="5" placeholder="Comentarios" readonly></div>


                          </div>


                          <div class="col-6">


                                      <div>
                                      <h6 class="text-center">Total notas</h6>
                                        <table class="table table-striped">
                                          <tr>
                                            <td>N. Calidad</td>
                                            <td id="detasubcalidad"><td>
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

      <div class="modal-footer">
     
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            
        
      </div>
    </div>
  </div>
</div>


<!-- VENTANA MODAL  BORRADO  -->