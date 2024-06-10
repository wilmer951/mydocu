<?php include "controlsesion.php"; ?>
<?php


include "Alerts/alertsaction.php";

$adminArtInfo = new Controlador_adminInfo();
$adminArtInfo -> ingresarArticuloControlador();
$adminArtInfo -> actualizarArticuloControlador();
$adminArtInfo -> borrarArticuloControlador();







?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Articlos Informativos</h1>
            </div>
            

                   
            <div class="text-center">
                      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalregistro">
                                    NUEVO  <img  class="px-2" src="Vista/css/icons/plus-circle.svg" alt="">
                      </button>
                      </div>
            
            
            <div class="container-contenedor"><!-- incio contenerdor  -->


            <div class="table-responsive">

<table class="table table-bordered table-sm  table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th>
                            </tr>
                        </thead>
                        <tbody> 


                        <?php   
                
                $consultaArtinfo = new Controlador_adminInfo();
                $consultaArtinfo -> consultaArticuloInfoControlador();
          ?>


                        
                        </tbody>
                        </table>

                        </div>	


</div>	
  </div>
</div>



        

            </div>


                      
<!-- CONTENIDO FIN  -->

      






<!-- VENTANA MODAL REGISTRO   -->



<div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar articulo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">
  <div class="form-group mb-3">
    
    <input type="text" class="form-control" name="tituloartiRegistro" placeholder="Titulo (obligatorio)" required>
    
  </div>
  <div class="form-group mb-3">
    
      <textarea class="form-control"name="descArtiRegistro" rows="3" placeholder="Descripción (obligatorio)"></textarea>
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






<!--    EDITAR  ARTICULOS -->

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar artículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          <input name="idArtEdit" type="hidden" value="">


          <div class="form-group mb-3">
          
    <input type="text" class="form-control" name="titleArtEdit" placeholder="Titulo" required>
        </div>
    
    
        <div class="form-group mb-3">

        <textarea class="form-control"name="descrArtiEdit" id="descrArtiEdit" rows="3" placeholder="Digite script (obligatorio)"></textarea>
        
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
          
          <input name="idArtiBorrado" type="hidden" value="">

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
