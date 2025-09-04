<?php include "controlsesion.php"; ?>
<?php



$adminModulos = new Controlador_adminModulos();
$adminModulos -> actualizarModuloControlador();
$adminModulos -> ingresarModuloControlador();
$adminModulos -> borrarModuloControlador();




include "Alerts/alertsaction.php";
          

?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Administración de módulos</h1>
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
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>


        <?php
              $consultarModulos = new Controlador_adminModulos();
              $consultarModulos -> consultarModulosControlador();
                
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
        <h5 class="modal-title" id="exampleModalLabel">Registrar módulo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">


  <div class="form-group mb-3">
    
  <input type="text" class="form-control" name="namemoduloingresar" placeholder="Digite nombre módulo (obligatorio)" required>
  </div>

  <div class="form-group mb-3">
  

       <select class="form-select mr-sm-2"  name="estadoingresar" required>
        <option value="">Seleccine estado</option>
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
<!-- VENTANA MODAL  REGISTRO  -->










<!--    EDITAR  MODULO  INICIO -->

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Módulo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



    <form method="post">
          <input name="idEditar" type="hidden" value="">


  <div class="form-group mb-3">

    <input type="text" class="form-control" name="namemoduloEditar" placeholder="Digite nombre modulo (obligatorio)" required>
    
  </div>


 <div class="form-group mb-3">
       <select class="form-select"  name="estadoeditar" id="estadoeditar" required>
        <option value="">Seleccine estado</option>
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
          
          <input name="idborradomodulo" type="hidden" value="">

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