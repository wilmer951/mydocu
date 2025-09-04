<?php include "controlsesion.php"; ?>
<?php



include "Alerts/alertsaction.php";

$adminItemIventario = new Controlador_adminInventario();
$adminItemIventario->ingresarElementosInventarioControlador();
$adminItemIventario->BorradoElementosInventarioControlador();
$adminItemIventario->actualizarElementosInventarioControlador();
?>



<?php include "menu.php"; ?>
<hr>

<!-- CONTENIDO INICIO -->


<div class="title text-center mb-5">
  <h1> Inventario</h1>
</div>



<div class="container-contenedor"><!-- incio contenerdor  -->



<div class="row">

<div class="col-4">
  <div>
  <button type="button" class="btn btn-idemi mb-3" data-bs-toggle="modal" data-bs-target="#modalElementos" style="width: 100%">
          Administración Campos
        </button>
      </div>

    <div>
      <button type="button" class="btn btn-idemi mb-3" style="width: 100%" onclick="window.location.href='index.php?ir=adminInventario'">
        Administración de Items
      </button>
    </div>

    <div>
    <button type="button" class="btn btn-idemi mb-3" style="width: 100%" onclick="window.location.href='index.php?ir=adminInventarioAcc'">
      Administración de accesorios
      </button>
    </div>

</div>
<div class="col-4 text-center">
<h6>Accesorios</h6>

<div class="alert alert-info" role="alert" style="width: 100%;font-size:13px;">
  <li>Elemento comsumible</li>
  <li>( Espuma,pitillos ).</li>
</div>

<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>

                    <th scope="col">Accesorio</th>
                    <th scope="col">Cantidad</th>



                  </tr>
                </thead>
                <tbody>

                  <?php

                  $consuAccesorio = new Controlador_adminInventario();
                  $consuAccesorio->consuconutAccesoControlador();
                  ?>

                </tbody>


              </table>
</div>
<div class="col-4 text-center">
  <h6>Items</h6>

  <div class="alert alert-info" role="alert" style="width: 100%;font-size:13px;">
  <li>Elemento con caracteristicas como <span class="fw-bold">"serial" "marca" "modelo"</span> ( CPU,Monitor,Celular ),</li>
</div>


<table class="table table-bordered table-striped" width="100%" id="dataTable2" cellspacing="0">
                <thead>
                  <tr>

                    <th scope="col">Item</th>
                    <th scope="col">Cantidad</th>



                  </tr>
                </thead>
                <tbody>

                  <?php

                  $consulItemNofijo = new Controlador_adminInventario();
                  $consulItemNofijo->consulitemNofijosControlador();
                  ?>

                </tbody>


              </table>

</div>
</div>




</div>



</div>
<!-- CONTENIDO FIN  -->







<!--    MODAL ADMINISTRACÓN DE ELEMENTOS -->

<!-- Modal -->
<div class="modal fade" id="modalElementos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Administración campos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <!-- INICIO CARD CANTIAD DE LEMENTOS -->

        <div class="text-center">


          <form method="post">
            <div class="card mb-3">
              <input type="text" name="itemRegistar" placeholder="Nuevo campo" required>

            </div>
            <div class="card mb-3">
              <select class="form-select form-select-sm" name="tipoitemRegistar" id="tipoitemRegistar" required>


                <option value="">Seleccione tipo</option>
                <option value="ITEM">ITEM</option>
                <option value="ACCES">ACCESORIO</option>
              </select>
            </div>

            <button type="submit" class="btn btn-outline-success">
              AGREGAR <img class="px-2" src="Vista/css/icons/plus-circle.svg" alt="">
            </button>

          </form>



        </div>

        <!-- INICIO CARD CANTIAD DE ELEMENTOS -->

        <div class="card mb-3">

          <div class="card-body text-center">

            <div class="table-responsive">

              <table class="table table-bordered table-sm table-striped" width="100%" cellspacing="0">
                <thead>
                  <tr>

                    <th scope="col">Item</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>


                  </tr>
                </thead>
                <tbody>



                  <?php

                  $consulElement = new Controlador_adminInventario();
                  $consulElement->consulElementControlador();
                  ?>


                </tbody>


              </table>


            </div>
          </div>
        </div>

        <!-- FIN  CARD CANTIAD DE LEMENTOS -->

      </div>




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

          <input name="idElementoBorrado" type="hidden" value="">

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




<!--    EDITAR  ELEMENTO -->

<!-- Modal -->
<div class="modal fade" id="modalEditarElement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Elemento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post">
          <input name="idElmentEditar" type="hidden" value="">


          <div class="form-group mb-3">

            <input type="text" class="form-control" name="nameElementEditar" placeholder="Nombre elemento (obligatorio)"
              required>
          </div>


          <div class="form-group mb-3">


            <select class="form-select form-select-sm" name="tipoElementEditar" id="tipoElementEditar" require>


              <option value="">Seleccione tipo</option>
              <option value="ITEM">TIEM</option>
              <option value="ACCES">ACCESORIO</option>
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








