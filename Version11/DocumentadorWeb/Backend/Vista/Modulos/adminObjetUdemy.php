<?php

session_start();

$perfilpermisio =['2','5'];

if(!$_SESSION["validar"]||!in_array($_SESSION["perfil"],$perfilpermisio)){

  

  header("location:index.php?ir=sinacceso");

  

}

?>
<?php




$adminObjtivoUdemy = new Controlador_adminObjetivos();
$adminObjtivoUdemy->cambioEstadoCursoControlador();






include "Alerts/alertsaction.php";

?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Objetivo Udemy</h1>
            </div>
            
            
            
            <div class="container-contenedor"><!-- incio contenerdor  -->




            <div class="row mt-5 text-center">

                            <div class="col-6">

                                  <h5 class="text-center mt-3 mb-3">Promedio general individual</h5>


                                                   <table class="table table-bordered  table-striped" id="" width="100%" cellspacing="0">
                                                                  <thead>
                                                                    <tr>

                                                                      
                                                                      <th scope="col">Ingeniero</th>
                                                                      <th scope="col">total cursos</th>
                                                                      <th scope="col">Nota promedio</th>
                                                                      
                                                                      


                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>


                                                                  <?php

$consulusuariosaproudemy = new Controlador_adminObjetivos();
$consulusuariosaproudemy->consulObjetivoUdemyusuariosControaldor();
?>


                                                                  </tbody>


                                                                </table>



                            </div>
                            <div class="col-6">
                              
                                    <h5 class="text-center mt-3 mb-3">Pendiente de aprobación</h5>

                                    <table class="table table-bordered table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                                                  <thead>
                                                                    <tr>

                                                                      
                                                                      <th scope="col">Ingeniero</th>
                                                                      <th scope="col">Estado</th>
                                                                      <th scope="col">Ver</th>
                                                                      


                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>

                                                                  <?php

                                                $pendienteaprobacion = new Controlador_adminObjetivos();
                                                $pendienteaprobacion->consulcurospendienteaprobacionControaldor();
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
      <h6>Detalles del curso</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      




          <div class="container">

        

          <div class="row">
                          
          <div class="col-12">
                        <table class="table">

                        <tr>
                          <td class="fw-bold">Ingeniero</td>
                          <td id="nomIngeniero"></td>
                        </tr>


                        <tr>
                          <td class="fw-bold">Nombre del curso</td>
                          <td id="nomCurso"></td>
                        </tr>

                        <tr>
                          <td class="fw-bold">Duración (Hr)</td>
                          <td id="duracionCurso"></td>
                        </tr>


                        <tr>
                          <td class="fw-bold">Fecha finalización</td>
                          <td id="fechfinalcurso"></td>
                        </tr>



                        <tr>
                          <td class="fw-bold">Estado actual</td>
                          <td id="estadoCurso">

                  

                          </td>
                        </tr>



                        <tr>
                          <td class="fw-bold">Comentarios</td>
                          <td id="obserCurso"></td>
                        </tr>



                      <tr>
                          <td colspan="2" class="fw-bold" >Adjunto</td>
                          
                        </tr>

                        <tr>
                          
                          <td colspan="2" class="text-center" ><img src="" alt="" class="img-fluid" id="imgCertiCurso"></td>
                        </tr>





                        </table>

          </div>
                        
          </div>

















      </div>

      <div class="modal-footer">

                <div class="row">
                  <div class="col-3 px-5"><button type="button" id="btnaprobarcurso" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalcambioestadocurso">Aprobar</button></div>
                  <div class="col-3 px-5"><button type="button" id="btnrechazarcurso" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalcambioestadocurso">Rechazar</button></div>
                  
                  
                </div>

                
            
        
      </div>
    </div>
  </div>
</div>


<!-- VENTANA MODAL  BORRADO  --><!-- VENTANA MODAL  BORRADO -->


<!-- Modal -->
<div class="modal fade" id="modalcambioestadocurso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          
          <input id="idcursocambioestado" name="idcursocambioestado" type="hidden" value="">
          <input id="estadoAprobacion" name="estadoAprobacion" type="hidden" value="">
          
               
  <div class="alert alert-info" role="alert">
               Una vez aprobado o rechazado el curso no se podrá modificar el estado!
  </div>



    <textarea name="comentariosCurso" class="form-control" placeholder="Comentarios"></textarea>
                          
                
        
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-success" name="enviar" value="Guardar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            
        </form>
      </div>
    </div>
  </div>
</div>


<!-- VENTANA MODAL  BORRADO  -->