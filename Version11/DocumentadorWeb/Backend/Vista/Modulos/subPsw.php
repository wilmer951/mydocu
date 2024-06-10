<?php include "controlsesion.php"; ?>
<?php


$subPws = new Controlador_subPsw();
$subPws -> ingresarPswControlador();
$subPws -> actualizarPswcontrolador();
$subPws -> borrarPswControlador();



include "Alerts/alertsaction.php";

?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Administración Contraseñas</h1>
            </div>
            
            

        
            <div class="text-center">
                      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalregistro">
                                    NUEVO  <img  class="px-2" src="Vista/css/icons/plus-circle.svg" alt="">
                      </button>
            </div>

            
            <div class="container-contenedor"><!-- incio contenerdor  -->




                        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Submodulo</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">idModulo</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Borrar</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                                <?php
                                                    $consultapsw = new Controlador_subPsw();
                                                    $consultapsw -> consultarPswControlador();
                                                        
                                                    ?>

                                        
                                        </tbody>
                            </table>










            </div>


                      
<!-- CONTENIDO FIN  -->

      







<!-- VENTANA MODAL REGISTRO   -->



<div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Contraseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">


                    <div class="form-group mb-3">
                        
                    <input type="text" class="form-control" name="namemoduloingresar" placeholder="Digite nombre módulo (obligatorio)" required>
                    </div>


                    <div class="form-group mb-3">
                        
                    <input type="text" class="form-control" name="nameUsuarioingreso" placeholder="Digite usuario (opcional)">
                        </div>



                        <div class="form-group mb-3">
                        
                        <input type="text" class="form-control" name="namePswingreso" placeholder="Digite password (obligatorio)" required>
                        </div>
                    

                        <div class="form-group mb-3">
                        
                        <input type="text" class="form-control" name="nameIdModuloingreso" placeholder="Diegite id Modulo (oligatorio)" required>
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







<!-- VENTANA MODAL EDITAR   -->



<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Contraseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">
<input name="idpswEditar" type="hidden" value="">

                    <div class="form-group mb-3">
                        
                    <input type="text" class="form-control" name="nameaplicacioneditar" placeholder="Digite nombre aplicación (obligatorio)" required>
                    </div>


                    <div class="form-group mb-3">
                        
                    <input type="text" class="form-control" name="nameusuarioeditar" placeholder="Digite usuario (opcional)">
                        </div>



                        <div class="form-group mb-3">
                        
                        <input type="text" class="form-control" name="namepsweditar" placeholder="Digite nuevo password (obligatorio)" required>
                        </div>
                    

                        <div class="form-group mb-3">
                        
                        <input type="text" class="form-control" name="nameidmodueditar" placeholder="Digite Id modulo (obligatorio)" required>
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
<!-- VENTANA MODAL  EDICION  -->





<!-- VENTANA MODAL  BORRADO -->


<!-- Modal -->
<div class="modal fade" id="modalborrado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          
      <input name="idpswBorrado" type="hidden" value="">

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


<!-- VENTANA MODAL  BORRADO  -->

