<?php include "controlsesion.php"; ?>
<?php

$subCmd = new Controlador_subCmd();
$subCmd -> ingresarComandoControlador();
$subCmd -> actualizarComandocontrolador();
$subCmd -> borrarComandoControlador();




include "Alerts/alertsaction.php";

?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Administración de comandos</h1>
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
                        <th scope="col">Descripción</th>
                        <th scope="col">Comando</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                        </tr>
                    </thead>
            <tbody>


        <?php
              $consultacomandos = new Controlador_subCmd();
              $consultacomandos -> consultarComandosControlador();
                
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
        <h5 class="modal-title" id="exampleModalLabel">Registrar Comando</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">


                    <div class="form-group mb-3">
                        
                    <input type="text" class="form-control" name="namedescripingreso" placeholder="Digite descripción (obligatorio)" required>
                    </div>


                    <div class="form-group mb-3">
                        
                        <input type="text" class="form-control" name="namecomandoingreso" placeholder="Digite comando (obligatorio)" required>
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
        <h5 class="modal-title" id="exampleModalLabel">Editar Comando</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">
<input name="idComanEditar" type="hidden" value="">

                    <div class="form-group mb-3">
                        
                    <input type="text" class="form-control" name="nameDesEditar"  placeholder="Digite descripción (obligatorio)" required>
                    </div>


                    <div class="form-group mb-3">
                        
                    <input type="text" class="form-control" name="nameComanEidtar" placeholder="Diegite un comando (obligatorio)" required>
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
          
      <input name="idborradocomando" type="hidden" value="">

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

