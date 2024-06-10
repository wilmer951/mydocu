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

$adminCalidad = new Controlador_adminCalidad();
$adminCalidad -> ingresarFomularioCalidadControlador();


?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
            <h1>Calidad</h1>
            </div>
            
            
            <div class="container-contenedor"><!-- incio contenerdor  -->


    


            <div class="mt-3">

                  <div class="row"> <!-- ROWW1  -->
                      <div class="col-6"><!-- COL1  -->
                                  <div class="divgraficos text-center">
                                      
                                      <div style="max-width:300px; margin:auto;">
                                      <div id="nuldatagraficageneral"></div>
                                      <canvas id="graficogeneral"></canvas>
                                      

                                      </div>
                                  </div>
                                  
                                  <div class="mt-3 w-100 mb-3 px-3">
                                   
                                                    <div class="row">

                                                              <div class="col-3">
                                                                          <a  href="index.php?ir=adminCalidadDetalles" class="text-secondary">  <div class="card text-center cardverdetalles">
                                                                      <img src="Vista/Imagenes/iconodetalles.png" class="img-fluid" alt="" style="margin:auto;"> 
                                                                          Detalles
                                                                            </div>     

                                                                </a>
                                                              </div>
                                                                
                                                              <div class="col-6"> 
                                                                    <div class="mt-3 text-center fw-bold">Tatal evaluaciones realizadas</div>
                                                                    <div class="text-center  fw-bolder fs-4" id="canttotalevalua">0</div>
                                                                
                                                                </div>
                                                    </div>  
                                                    
                                                    
                                        

                                  </div> 

                                       

                                  <hr>

                                      <div class="row">
                                        <h7 class="text-center mb-3">Cumplimiento por categoría</h7>

                                        <div id="nuldatagraficacatego" class="text-center"></div>
                                        
                                    <div class="col-4"><canvas id="graficocalidad"></canvas></div>
                                    <div class="col-4"><canvas id="grafisoporte"></canvas></div>
                                    <div class="col-4"><canvas id="grafidocumentacion"></canvas></div>

                                    </div>



                                    <hr>



                                    <div class="mb-3">

                                   
                                    <div class="card mt-3 mb-3">
                                    <h7 class="text-center mb-3">Incumplimiento por items</h7>
                                    <div class="alert alert-info" role="alert">
                                    A continuación, se mostrará  el porcentaje de incumplimiento por cada item evaluado.
                                      </div>
                                      

                                      <table  id="dataTable" class="table table-bordered table-striped tablesorter">

                                      <thead>
                                            <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">% incumplimiento</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody> 



                                      <?php
                                        $itemrecurrentes = new Controlador_adminCalidad();
                                        $itemrecurrentes -> itemrecurrentesCalidadControlador();
                                          
                                          ?>


                                    </tbody> 
                                      </table>
                                    </div>


                                    </div>

                          
                      </div><!-- COL1  -->
                      <div class="col-6"> <!-- COL2  -->

                                    <div class="card"><!-- CARD  -->

                                              <div class="text-center mb-3">
                                                      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalregistroFormulario">
                                                          Ingresar formulario <img class="px-2" src="Vista/css/icons/plus-circle.svg" alt="">
                                                    </button>

                                              </div>


                                            <div>
                                              <h6 class="text-center mt-3 mb-3">Promedio general individual</h6>
                                              <table class="table table-bordered table-sm table-striped" id="example" width="100%" cellspacing="0">
                                                                  <thead>
                                                                    <tr>

                                                                      
                                                                      <th scope="col">Ingeniero</th>
                                                                      
                                                                      <th scope="col" colspam="2">Total Evaluaciones</th>
                                                                      <th scope="col">Nota promedio</th>
                                                                      
                                                                      


                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>


                                                      <?php
                                                          $promedioGeneraluser = new Controlador_adminCalidad();
                                                          $promedioGeneraluser -> promedioGeneraluserControlador();
                                                            
                                                        ?>


                                                                  </tbody>


                                                                </table>

                                                    </div>


                                    </div><!-- CARD  -->

                      </div><!-- COL 2 -->
                  </div><!-- ROWW1  -->



                       

            </div>





                      
<!-- CONTENIDO FIN  -->

      



<!-- VENTANA MODAL REGISTRO FORMULARIO  -->



<div class="modal fade" id="modalregistroFormulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario de calidad</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


        </div>
                <div class="modal-body">

                                  <!-- contenido  -->
                            <div class="row mb-3"><!-- inicio cabecera form caliad  -->
                                  <div class="col-6"><!-- INICIO col PARTE UNO CABECERA  -->


<form method="post">
                            
                                  <div class="row mb-2">
                                  
                                  <div class="col-5"><label class="fw-bold">Ingeniero</label> </div>
                                      <div class="col-7">  
                                        <select class="form-control form-control-sm" name="nameformUsuario" id="nameformUsuario" required>
                                                <option value="">Seleccionar responsable</option>
                                                <?php

                                                $consuluserall = new Controlador_adminUsers();
                                                $consuluserall->consulUsuariosActivosControlador();
                                                ?>


                                            </select>
                                      
                                            </div>
                                    </div>


                                    
                                  
                                    <div class="row mb-2">
                                              
                                          <div class="col-5"><label class="fw-bold">Tiempo llamada</label> </div>
                                          <div class="col-7"><input type="number" class="form-control form-control-sm" name="nameformTiempo" id="nameformTiempo"
                                                        placeholder="(obligatorio) Minutos" required="required" min="1">
                                          </div>
                                                  
                                          
                                                            
                                      </div>


                                          
                                    <div class="row mb-2">
                                              
                                              <div class="col-5"><label class="fw-bold">Fecha</label> </div>
                                                        <div class="col-7"><input type="date" class="form-control form-control-sm" name="nameformFecha" id="nameformFecha"
                                                            placeholder="(obligatorio)" required="required">
                                                        </div>
                                                        
                                                  
                                                                      
                                      </div>




                                      <div class="row mb-2">
                                              
                                              <div class="col-5"><label class="fw-bold">Registro caso</label> </div>
                                                        <div class="col-7">
                                                          
                                                        <div class="form-check">
                                                                <input class="" type="radio" name="checkregiscaso" id="siregiscaso" value="si"checked>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                  SI
                                                                </label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="" type="radio" name="checkregiscaso" id="noregiscaso" value="no">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                  NO
                                                                </label>
                                                              </div>
                                                                                                                      
                                                        </div>

                                                      
                                              
       
                                      </div>



                                      <div class="row mb-2">
                                              
                                              <div class="col-5"><label class="fw-bold">Numero de caso</label> </div>
                                                        <div class="col-7"><input type="text" class="form-control form-control-sm" name="nameformCaso" id="nameformCaso"
                                                            placeholder="(obligatorio)" required="required">
                                                            
                                                        </div>

                                              
       
                                      </div>


                                 
                             














                                      


                                      


                                      </div><!-- fin col PARTE UNO CABECERA  -->


                                      <div class="col-6" ><!-- inicio  col PARTE dos CABECERA  -->
                                                        <div class="divresultotalcali text-center divsubresultado">

                                                              Total % <input type="text" id="totalnota" value="0">
                                                              
                                                        
                                                          </div>
                                                
                                                </div><!-- fin  col PARTE dos CABECERA  -->


                                  </div><!-- fin cabecera form caliad  -->
                                  

    
    
    
                                  <div class="row mt-3"><!-- INICIO  CONTENIDO form caliad  -->
                                  <div class="w-50 mb-2"> <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalpautascalidad">Pautas de calificación</button></div>
                                <hr>
                                



                                  <div class="col-4">
                                              
                                            <h6 class="text-center">Calidad</h6>
                                            <hr>


                                                  <input type="hidden" id="nocal1" name="nocal1" value="0">
                                                  <input type="hidden" id="nocal2" name="nocal2" value="0">
                                                  <input type="hidden" id="nocal3" name="nocal3" value="0">
                                                  <input type="hidden" id="nocal4" name="nocal4" value="0">
                                                  <input type="hidden" id="nocal5" name="nocal5" value="0">
                                                  <input type="hidden" id="resulcal" name="resulcal" value="0">


                                              
                                                                      <div class="list-group">
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="caln1" type="checkbox" value="">
                                                                              Protocolo de bienvenida
                                                                              
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="caln2" type="checkbox" value="">
                                                                              Identificación
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="caln3" type="checkbox" value="">
                                                                              Amabilidad, cortesía y lenguaje
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="caln4" type="checkbox" value="">
                                                                              Entrega información
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                            <input class="form-check-input me-1" id="caln5" type="checkbox" value="">
                                                                              Despedida
                                                                            </label>
                                                                          </div>







                                                        <div class="mt-3 mb-3 text-center">Resultado</div>

                                                              <div class="divsubresultado text-center">
                                                                          %  <input type="text" id="resulcalv" name="resulcalv" value="0" disabled="true">
                                                              </div>


                                  
                                  </div>
                                  
                                  
                                  <div class="col-4">

                                                <h6 class="text-center">SOPORTE</h6>
                                                          <hr>


                                                  <input type="hidden" id="nosopor1" name="nosopor1" value="0">
                                                  <input type="hidden" id="nosopor2" name="nosopor2" value="0">
                                                  <input type="hidden" id="nosopor3" name="nosopor3" value="0">
                                                  <input type="hidden" id="nosopor4" name="nosopor4" value="0">
                                                  <input type="hidden" id="nosopor5" name="nosopor5" value="0">
                                                  <input type="hidden" id="resulsopor" name="resulsopor" value="0">



                                                          <div class="list-group">
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="soport1" type="checkbox" value="">
                                                                              Diagnostico
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="soport2" type="checkbox" value="">
                                                                              Manejo tiempo de llamada
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="soport3" type="checkbox" value="">
                                                                              Dominio del tema
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="soport4" type="checkbox" value="">
                                                                              Sigue procedimientos
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="soport5" type="checkbox" value="">
                                                                              Soluciona
                                                                            </label>
                                                            </div>





                                                            <div class="mt-3 mb-3 text-center">Resultado</div>

                                                                    <div class="divsubresultado text-center">
                                                                               %  <input type="text" id="resulsoporv" name="resulsoporv" value="0" disabled="true">
                                                                    </div>

                                                         

                                  </div>
                                  <div class="col-4">
                                                  <h6 class="text-center">DOCUMENTACIÓN</h6>
                                                            <hr>    
                                                            

                                                            <input type="hidden" id="nodocu1" name="nodocu1" value="0">
                                                            <input type="hidden" id="nodocu2" name="nodocu2" value="0">
                                                            <input type="hidden" id="nodocu3" name="nodocu3" value="0">
                                                            <input type="hidden" id="nodocu4" name="nodocu4" value="0">
                                                            <input type="hidden" id="nodocu5" name="nodocu5" value="0">
                                                            <input type="hidden" id="resuldocu" name="resuldocu" value="0">
                                                                      
                                                            <div class="list-group">
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="docu1" type="checkbox" value="">
                                                                              Registro de caso
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="docu2" type="checkbox" value="">
                                                                              Ingreso Correcto de Información
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="docu3" type="checkbox" value="">
                                                                              Categorización
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="docu4" type="checkbox" value="">
                                                                              Diagnostico, solución y cierre
                                                                            </label>
                                                                            <label class="list-group-item">
                                                                              <input class="form-check-input me-1" id="docu5" type="checkbox" value="">
                                                                              Tiempo apertura de caso
                                                                            </label>
                                                                          </div>




                                                <div class="mt-3 mb-3 text-center">Resultado</div>

                                                <div  class="divsubresultado text-center">
                                                                    % <input type="text" id="resuldocuv" name="resuldocuv" value="0" disabled="true">
                                                        </div>




                                  </div>








                                </div><!-- FIN  CONTENIDO form caliad  -->


                                  <div class="row mt-3">
                                    <div class="col-12">
                                      <label>Comentarios</label>
                                      <textarea class="form-control" name="nameformComentarios" rows="3"></textarea>
                                    </div>
                                  </div>

                                  <div class="row mt-3">
                                    <div class="col-12">
                                      <input type="submit" id="enviarformcalidad" class="btn btn-idemi" value ="enviar">
                                    </div>
                                  </div>


</form>
                                  
                                  <!-- contenido  -->

                
                </div>
          </div>
    </div>
</div>

<!-- VENTANA MODAL REGISTRO FORMULARIO  -->









<!-- Modal -->
<div class="modal fade" id="modalpautascalidad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pautas califaición de calidad.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<h6 class="mb-3 ">Calidad</h6>


        <table class="table w-50">

          <tr>
            <td class="fw-bold w-50">Protocolo de bienvenida.</td>
            <td >Guión de bienvenida.</td>
          </tr>

          <tr>
            <td class="fw-bold">Identificación.</td>
            <td>Identificarse informando nombre y apellido.</td>
          </tr>

          <tr>
            <td class="fw-bold">Amabilidad, cortesía y lenguaje.</td>
            <td>Menajo adecuado de vocavulario amabiliad cortesía.</td>
          </tr>


          <tr>
            <td class="fw-bold">Entrega información.</td>
            <td>Brindar infomación veras y acorde al caso.</td>
          </tr>


          <tr>
            <td class="fw-bold">Despedida.</td>
            <td>Despedirse de forma cordial, tranferir a encuesta de satisfacción</td>
          </tr>

        </table>



<hr>

        <h6 class="mb-3 ">Soporte técnico</h6>
        <table class="table w-50">

          <tr>
            <td class="fw-bold w-50">Diagnostico.</td>
            <td>Diagnosticar de forma correcta el incidente o requireminto por parte del funcionario.</td>
          </tr>

          <tr>
            <td class="fw-bold">Manejo tiempo de llamada.</td>
            <td>La duración de la llamada debe ser a corde al soporte brindado.</td>
          </tr>

          <tr>
            <td class="fw-bold">Dominio del tema.</td>
            <td>Tener claro el soporte realizado.</td>
          </tr>


          <tr>
            <td class="fw-bold">Sigue prodecemientos.</td>
            <td>Seguir los protocolos establecidos para el soporte generado.</td>
          </tr>


          <tr>
            <td class="fw-bold">Soluciona.</td>
            <td class="w-50">Brindar una solución acorde al incidente o requerimiento o dar las indicaciones del proceso segun aplique.</td>
          </tr>

        </table>


<hr>


        <h6 class="mb-3 ">Documentación.</h6>
        <table class="table w-50">

          <tr>
            <td class="fw-bold w-50">Registro de caso.</td>
            <td>Registrar en la herramenta de Sissto el caso.</td>
          </tr>

          <tr>
            <td class="fw-bold">Ingreso Correcto de Información.</td>
            <td>Documentar de forma completa la información, datos como NUIP, Seriales IP etc.</td>
          </tr>

          <tr>
            <td class="fw-bold">Categorización.</td>
            <td>Utilizar las categorias de forma correcta.</td>
          </tr>


          <tr>
            <td class="fw-bold">Diagnostico, solución y cierre.</td>
            <td>Debe documentarse de forma coherente con el soporte brindado en la llamada el diagnositico solucionado y solución.</td>
          </tr>


          <tr>
            <td class="fw-bold">Tiempo apertura de caso.</td>
            <td class="w-50">Tiempo de apertura de caso debe ser entre.</td>
          </tr>

        </table>









      
        
      </div>
      <div class="modal-footer">
      
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            
        </form>
      </div>
    </div>
  </div>
</div>












<div id="modalProcesandodatos" class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
    <div class="modal-content modalalert">
      <div class="modal-body modalalertcont">
        
     

<div class="text-center">

Enviando información espere...

</div>
      </div>
      
    </div>
  </div>
</div>






    