<?php include "controlsesion.php"; ?>
<?php

            $admincategoria = new Controlador_adminCategorias();
                $admincategoria -> ingresarCategoriaControlador();
                $admincategoria -> actualizarcategoriaControlador();
                $admincategoria -> borrarCategoriaControlador();



include "Alerts/alertsaction.php";

?>

    
    
    <?php include "menu.php"; ?>
    <hr>

<!-- CONTENIDO INICIO -->


            <div class="title text-center mb-5">
                    <h1> Administración Categorías.</h1>
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
                            <th scope="col">Módulo</th>
                            <th scope="col">Submódulo</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th>
                            </tr>
                        </thead>
                        <tbody> 


                                <?php
                                    $admincategorias = new Controlador_adminCategorias();
                                    $admincategorias -> consultarCategoriasControlador();
                                        
                                    ?>

                        
                        </tbody>
                        </table>




            </div>


                      
<!-- CONTENIDO FIN  -->

      












<!-- VENTANA MODAL REGISTRO   -->



<div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Categoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">

 
<!-- *********************************  CATEGORIA  INICIO **********************************-->
    <div class="row">


                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                    


                                                            <select  id="selectmodulo" name="idCateModuloReg" class="form-select form-select-sm" required>
                                                            <option value="">Seleccione un módulo</option>
                                                                
                                                                    <?php   
                                                            
                                                            $consultaModulo = new Controlador_adminSubmodulos();
                                                            $consultaModulo -> consultaModulosControlador();
                                                            ?>


                                                </select>


                                        </div>

                    </div>



                    <div class="col-sm-3">
                            

      
                                        <select class="form-select form-select-sm" id="selectSubmodulo" name="catesubmoduloregistro" required> 
                                            
                                                <option>seleccione un submódulo</option>

                                        </select>

                    </div>




                    <div class="col-sm-3">
                                
                                    <select class="form-select form-select-sm"  name="estadoingresar" required> 
                                        <option value="">Seleccine estado</option>
                                        <option value="0">Inactivo</option>
                                        <option value="1">Activo</option>

                                    </select>

                    </div>


        </div>
<!-- *********************************  CATEGORIA  FIN  **********************************-->




<!-- *********************************  TITULO  INICIO  **********************************-->

        <div class="row mb-3">


                <div class="col-sm-3">
                
                        <input type="text" class="form-control" name="cateTituloRegistro" placeholder="Digite un titulo (obligatorio)" required>
                    
                </div>

        </div>

<!-- *********************************  TITULO  FIN  **********************************-->


<!-- *********************************  DESCRIPCIÓN   INICIO  **********************************-->

        <div class="row mb-3">

                        <div class="col-sm-5">
                                <textarea class="form-control"name="catedescr1registro" rows="1" placeholder="Descripción parte 1" ></textarea>
                        </div>

                        <div class="col-sm-1">
                                        <select name="botondes1" class="form-select form-select-sm">
                                        
                                        
                                                <?php
                                                    $consultadeSeleInputs = new Controlador_adminCategorias();
                                                    $consultadeSeleInputs -> consultaSelecInputControlador();
                                                    ?>
                                    </select>

                            </div>

                            <div class="col-sm-5">

                                        <textarea class="form-control"name="catedescr2registro" rows="1" placeholder="Descripción parte 2 (opcional)"></textarea>


                            </div>


                            <div class="col-sm-1">

                                        <select name="botondes2" class="form-select form-select-sm">
                                                    
                                                    
                                                    <?php
                                                        $consultadeSeleInputs = new Controlador_adminCategorias();
                                                        $consultadeSeleInputs -> consultaSelecInputControlador();
                                                        ?>
                                        </select>

                            </div>






        </div>

<!-- *********************************  DESCRIPCIÓN   FIN  **********************************-->






<!-- *********************************  DIAGNOSTICO   INICIO  **********************************-->

        <div class="row mb-3">

                            <div class="col-sm-5">
                                    <textarea class="form-control" name="catedia1registro" rows="1" placeholder="Diagnóstico parte 1" ></textarea>
                            </div>

                            <div class="col-sm-1">
                                            <select name="botondia1" class="form-select form-select-sm">
                                            
                                            
                                                    <?php
                                                        $consultadeSeleInputs = new Controlador_adminCategorias();
                                                        $consultadeSeleInputs -> consultaSelecInputControlador();
                                                        ?>
                                        </select>

                                </div>

                                <div class="col-sm-5">

                                            <textarea class="form-control" name="catedia2registro" rows="1" placeholder="Diagnóstico parte 2 (opcional)"></textarea>


                                </div>


                                <div class="col-sm-1">

                                            <select name="botondia2" class="form-select form-select-sm">
                                                        
                                                        
                                                        <?php
                                                            $consultadeSeleInputs = new Controlador_adminCategorias();
                                                            $consultadeSeleInputs -> consultaSelecInputControlador();
                                                            ?>
                                            </select>

                                </div>






        </div>

<!-- *********************************  DIAGNOSTICO   FIN  **********************************-->





<!-- *********************************  SOLUCIÓN   INICIO  **********************************-->

<div class="row mb-3">

<div class="col-sm-5">
        <textarea class="form-control" name="catesol1reistro" rows="1" placeholder="Solución parte 1"></textarea>
</div>

<div class="col-sm-1">
                <select name="botonsol1" class="form-select form-select-sm">
                
                
                        <?php
                            $consultadeSeleInputs = new Controlador_adminCategorias();
                            $consultadeSeleInputs -> consultaSelecInputControlador();
                            ?>
            </select>

    </div>

    <div class="col-sm-5">

                <textarea class="form-control" name="catesol2reistro" rows="1" placeholder="Solución parte 2 (opcional)"></textarea>


    </div>


    <div class="col-sm-1">

                <select name="botonsol2" class="form-select form-select-sm">
                            
                            
                            <?php
                                $consultadeSeleInputs = new Controlador_adminCategorias();
                                $consultadeSeleInputs -> consultaSelecInputControlador();
                                ?>
                </select>

    </div>






</div>

<!-- *********************************  SOLUCIÓN   FIN  **********************************-->


        <div class="row mb-3">

                    <div class="col-sm-3">

                         <select name="selecTiporegistro" class="form-select form-select-sm" required>
                            <option value="">Seleccione Tipo</option>
                            <option value="1">Incidente</option>
                            <option value="2">Requerimiento</option>
                        </select>


                    </div>

                    <div class="col-sm-3">

                         <select name="selectseveregistro" class="form-select form-select-sm" required>
                            <option value="">Seleccione Severidad</option>
                            <option value="1">Critico</option>
                            <option value="2">Mayor</option>
                            <option value="3">Menor</option>
                        </select>


                    </div>


                    <div class="col-sm-3">

                        <select name="selectfreregistro" class="form-select form-select-sm" required>
                            <option value="">Seleccione Frecuencia</option>
                            <option value="1">Frecuente</option>
                            <option value="2">Ocacional</option>
                            <option value="3">Raramente</option>
                        </select>

                    </div>

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
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Categoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<form method="post">

<input type="hidden" name="idcategoriaEditar" value="">
<!-- *********************************  CATEGORIA  INICIO **********************************-->
    <div class="row">


                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                    


                                                            <select  id="selectmodulo2" name="catesubmodueditar" class="form-select form-select-sm" required>
                                                            <option value="">Seleccione un módulo</option>
                                                                
                                                                    <?php   
                                                            
                                                            $consultaModulo = new Controlador_adminSubmodulos();
                                                            $consultaModulo -> consultaModulosControlador();
                                                            ?>


                                                </select>


                                        </div>

                    </div>



                    <div class="col-sm-3">
                            
                                        <select class="form-select form-select-sm" id="selectsubeditar" name="catesubmoduloeditar" required> 
                                            
                                                <option>seleccione un submódulo</option>

                                        </select>

                    </div>




                    <div class="col-sm-3">
                                
                                    <select class="form-select form-select-sm"  id="estadoedit" name="estadoeditar"  required> 
                                        <option value="">Seleccine estado</option>
                                        <option value="0">Inactivo</option>
                                        <option value="1">Activo</option>

                                    </select>

                    </div>


        </div>
<!-- *********************************  CATEGORIA  FIN  **********************************-->




<!-- *********************************  TITULO  INICIO  **********************************-->

        <div class="row mb-3">


                <div class="col-sm-3">
                
                        <input type="text" class="form-control" name="catetituloeditar" placeholder="Digite un titulo (obligatorio)" required>
                    
                </div>

        </div>

<!-- *********************************  TITULO  FIN  **********************************-->


<!-- *********************************  DESCRIPCIÓN   INICIO  **********************************-->

        <div class="row mb-3">

                        <div class="col-sm-5">
                                <textarea class="form-control" name="catedes1editar" rows="1" placeholder="Descripción parte 1" ></textarea>
                        </div>

                        <div class="col-sm-1">
                                        <select name="inpdes1editar" id="inpdes1editar" class="form-select form-select-sm">
                                        
                                        
                                                <?php
                                                    $consultadeSeleInputs = new Controlador_adminCategorias();
                                                    $consultadeSeleInputs -> consultaSelecInputControlador();
                                                    ?>
                                    </select>

                            </div>

                            <div class="col-sm-5">

                                        <textarea class="form-control"name="catedes2editar" rows="1" placeholder="Descripción parte 2 (opcional)"></textarea>


                            </div>


                            <div class="col-sm-1">

                                        <select name="inpdes2editar" id="inpdes2editar" class="form-select form-select-sm">
                                                    
                                                    
                                                    <?php
                                                        $consultadeSeleInputs = new Controlador_adminCategorias();
                                                        $consultadeSeleInputs -> consultaSelecInputControlador();
                                                        ?>
                                        </select>

                            </div>






        </div>

<!-- *********************************  DESCRIPCIÓN   FIN  **********************************-->






<!-- *********************************  DIAGNOSTICO   INICIO  **********************************-->

        <div class="row mb-3">

                            <div class="col-sm-5">
                                    <textarea class="form-control" name="catedia1editar" rows="1" placeholder="Diagnóstico parte 1" ></textarea>
                            </div>

                            <div class="col-sm-1">
                                            <select name="inpdia1editar" id="inpdia1editar" class="form-select form-select-sm">
                                            
                                            
                                                    <?php
                                                        $consultadeSeleInputs = new Controlador_adminCategorias();
                                                        $consultadeSeleInputs -> consultaSelecInputControlador();
                                                        ?>
                                        </select>

                                </div>

                                <div class="col-sm-5">

                                            <textarea class="form-control" name="catedia2editar" rows="1" placeholder="Diagnóstico parte 2 (opcional)"></textarea>


                                </div>


                                <div class="col-sm-1">

                                            <select name="inpdia2editar" id="inpdia2editar" class="form-select form-select-sm">
                                                        
                                                        
                                                        <?php
                                                            $consultadeSeleInputs = new Controlador_adminCategorias();
                                                            $consultadeSeleInputs -> consultaSelecInputControlador();
                                                            ?>
                                            </select>

                                </div>






        </div>

<!-- *********************************  DIAGNOSTICO   FIN  **********************************-->





<!-- *********************************  SOLUCIÓN   INICIO  **********************************-->

<div class="row mb-3">

<div class="col-sm-5">
        <textarea class="form-control" name="catesol1editar" rows="1" placeholder="Solución parte 1"></textarea>
</div>

<div class="col-sm-1">
                <select name="inpsol1editar" id="inpsol1editar" class="form-select form-select-sm">
                
                
                        <?php
                            $consultadeSeleInputs = new Controlador_adminCategorias();
                            $consultadeSeleInputs -> consultaSelecInputControlador();
                            ?>
            </select>

    </div>

    <div class="col-sm-5">

                <textarea class="form-control" name="catesol2editar" rows="1" placeholder="Solución parte 2 (opcional)"></textarea>


    </div>


    <div class="col-sm-1">

                <select name="inpsol2editar" id="inpsol2editar" class="form-select form-select-sm">
                            
                            
                            <?php
                                $consultadeSeleInputs = new Controlador_adminCategorias();
                                $consultadeSeleInputs -> consultaSelecInputControlador();
                                ?>
                </select>

    </div>






</div>

<!-- *********************************  SOLUCIÓN   FIN  **********************************-->


        <div class="row mb-3">

                    <div class="col-sm-3">

                         <select name="selecTipoEditar" id="tipoeditar" class="form-select form-select-sm" required>
                            <option value="">Seleccione Tipo</option>
                            <option value="1">Incidente</option>
                            <option value="2">Requerimiento</option>
                        </select>


                    </div>

                    <div class="col-sm-3">

                         <select name="selectseveeditar" id="seveeditar" class="form-select form-select-sm" required>
                            <option value="">Seleccione Severidad</option>
                            <option value="1">Critico</option>
                            <option value="2">Mayor</option>
                            <option value="3">Menor</option>
                        </select>


                    </div>


                    <div class="col-sm-3">

                        <select name="selectfreeditar" id="freediat" class="form-select form-select-sm" required>
                            <option value="">Seleccione Frecuencia</option>
                            <option value="1">Frecuente</option>
                            <option value="2">Ocacional</option>
                            <option value="3">Raramente</option>
                        </select>

                    </div>

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
<!-- VENTANA MODAL  EDITAR  -->






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
          
          <input name="idCategoriaborrado" type="hidden" value="">

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