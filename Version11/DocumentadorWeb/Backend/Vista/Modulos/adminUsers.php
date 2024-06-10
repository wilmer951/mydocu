<?php include "controlsesion.php"; ?>
<?php



$adminUsers = new Controlador_adminUsers();
$adminUsers -> registroUsuarioControlador();
$adminUsers -> actualizarPasswordControlaor();
$adminUsers -> borrarUsuarioControlador();
$adminUsers -> actualizarUsuarioControlaor();





include "Alerts/alertsaction.php";


          

?>

    
    
    <?php include "menu.php"; ?>
    <hr>

    
<!-- CONTENIDO INICIO -->

                <div class="title text-center mb-5">
                    <h1> Administración de usuarios</h1>
                </div>

                
                      <div class="text-center">
                      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalingresar">
                                    NUEVO  <img  class="px-2" src="Vista/css/icons/plus-square.svg" alt="">
                      </button>
                      </div>
                <div class="container-contenedor"><!-- incio contenerdor  -->
                

                                <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Usuario</th>
                      <th scope="col">Nombres</th>
                      <th scope="col">Rol</th>
                      <th scope="col">Perfil</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Reset password</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Borrar</th>
                    </tr>
                  </thead>
                  <tbody>
          
          
          
          <?php
              $consultaUsuarios = new Controlador_adminUsers();
              $consultaUsuarios -> consultarUsuariosControlador();
                
            ?>
           
                      
                  
                
                  </tbody>
                </table>





                </div> <!-- fin contenerdor  -->
                
<!-- CONTENIDO FIN  -->

      











<!--********************************************************************************
                                VENTANAS MODALS    
  **************************************************************************-->





<!--    REGISTRAR USUARIO  INICO -->


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalingresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


                  <form method="post">

                  <div class="form-group mb-3">
                      <input type="text" class="form-control" name="namUsuR" placeholder="Digite Usuario (obligatorio)" required> 
                  </div>

                  <div class="form-group mb-3">
                      <input type="text" class="form-control" name="nombrUr" placeholder="Digite Nombres (obligatorio)" required>
                  </div>

                  <div class="form-group mb-3">
                      <input type="password" class="form-control" name="namPasR" placeholder="Digite Password (obligatorio)" required>
                  </div>

                  <div class="form-group mb-3">
                      <input type="password" class="form-control" name="namPasR2" placeholder="Confirme Password (obligatorio)" required>
                  </div>

                  <div class="form-group mb-3">
    
                    <select class="form-control" name="namRol" required>
                        <option value="">Seleccione un rol</option>
                        <?php
                    $consulroles = new Controlador_adminUsers();
                    $consulroles -> consultarRolesUsuariosControlador();
                      
                  ?>
                    </select>
                </div>



                  <div class="form-group mb-3">
    
                      <select class="form-control" name="namPerR" required>
                          <option value="">Seleccione un perfil</option>
                          

                          <?php
                              $consulperfiles = new Controlador_adminUsers();
                              $consulperfiles -> consultarPerfilUsuariosControlador();

                          ?>

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

<!--    REGISTRAR USUARIO  FIN -->



<!--    EDITAR  USUARIO  INICIO -->

<!-- Modal -->
<div class="modal fade" id="modalresetpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Restablecer clave</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">
          <input name="idrsetpas" type="hidden" value="">


          <div class="form-group mb-3">
              <input type="password" class="form-control" name="namepasseditar" placeholder="nuevo password" required>
        </div>
    
    
        <div class="form-group mb-3">
          <input type="password" class="form-control" name="namepasseditar2" placeholder="Confirmar nuevo password" required>
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
          <input name="idusuborrado" type="hidden" value="">

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




<!--    EDITAR  USUARIO  INICIO -->

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">


      <div class="form-group mb-3">
          
    <input type="hidden" class="form-control" name="idusrEditar" value="">
        </div>

 

      <div class="form-group mb-3">
          
          <input type="text" class="form-control" name="nomeditaruser" required>
      </div>
          


      <div class="form-group mb-3">
          
                <select class="form-select mr-sm-2"  name="perfilEditar" id="perfilEditar" required>
                  <option value="">Seleccine perfil</option>
                  <?php
                              $consulperfiles = new Controlador_adminUsers();
                              $consulperfiles -> consultarPerfilUsuariosControlador();

                          ?>
                
              </select>
      </div>



      <div class="form-group mb-3">


   

          
                <select class="form-select mr-sm-2"  name="rolEditar" id="rolEditar" required>
                  <option value="">Seleccine rol</option>
                        <?php
                    $consulroles = new Controlador_adminUsers();
                    $consulroles -> consultarRolesUsuariosControlador();
                      
                  ?>
           
                
              </select>
      </div>





      


      <div class="form-group mb-3">
          
          <select class="form-select mr-sm-2"  name="estadoEditar" id="estadoEditar" required>
            <option value="">Seleccine estado</option>
            <option value="0">inactivo</option>
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