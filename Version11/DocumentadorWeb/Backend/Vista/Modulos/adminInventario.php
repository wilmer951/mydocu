<?php include "controlsesion.php"; ?>
<?php


include "Alerts/alertsaction.php";

$adminItemIventario = new Controlador_adminInventario();
$adminItemIventario->ingresarItemIventarioControlador();

$adminItemIventario->actualizarItemIventarioControlador();
$adminItemIventario->ingresarMovInventarioControlador();







?>



<?php include "menu.php"; ?>
<hr>

<!-- CONTENIDO INICIO -->


<div class="title mb-5 text-center">
  <h1> Inventario</h1>
</div>





<div class="container-contenedor"><!-- incio contenerdor  -->


  <div>
    <a href="index.php?ir=adminInventarioHome" class="btn btn-idemi">VOLVER</a>

  </div>



  <div class="text-center">
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalregistro">
      NUEVO <img class="px-2" src="Vista/css/icons/plus-circle.svg" alt="">
    </button>

  </div>

  <div id="prueba">

  <div class="table-responsive">

    <table class="table table-bordered table-sm table-striped" id="example" width="100%" cellspacing="0">
      <thead>
        <tr>

          <th scope="col">Item</th>
          <th scope="col">Ingeniero</th>
          <th scope="col">Serial</th>
          <th scope="col">Placa Idemia</th>
          <td scope="col">Detalle</td>
          <td scope="col">Editar</td>
          <td scope="col">Asignación</td>


        </tr>
      </thead>
      <tbody>


        <?php
        $consulItemInventario = new Controlador_adminInventario();
        $consulItemInventario->consultarInventarioControlador();

        ?>


      </tbody>


    </table>


  </div>


</div>
</div>



<!-- CONTENIDO FIN  -->







<!-- VENTANA MODAL REGISTRO   -->



<div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar elemento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


      </div>
      <div class="modal-body">



        <div id="divregisItem">

          <form method="post">
            <div class="form-group mb-3">

              <select class="form-control" name="nameItemRegistro" id="nameItemRegistro" required>
                <option value="">Seleccione un item</option>

                <?php

                $consulIemElemen = new Controlador_adminInventario();
                $consulIemElemen->consulItemElemnControlador();
                ?>

              </select>

            </div>


            <div class="form-group mb-3">

              <input type="text" class="form-control" name="marcaItemRegistro" placeholder="Marca (obligatorio)"
                required="required">
            </div>

            <div class="form-group mb-3">

              <input type="text" class="form-control" name="modeloItemRegistro" placeholder="Modelo (obligatorio)"
                required="required">
            </div>


            <div class="form-group mb-3">

              <input type="text" class="form-control" id="serialItemRegistro" name="serialItemRegistro" placeholder="Serial (obligatorio)"
                required="required">
            </div>



            <div class="form-group mb-3">

              <input type="text" class="form-control"  id="placaIdemiaItemRegistro" name="placaIdemiaItemRegistro"
                placeholder="Placa Idemia">
            </div>



            <div class="form-group mb-3">

              <textarea class="form-control" name="obsItemRegistro" rows="2" placeholder="observaciones"></textarea>

            </div>

            <div class="form-group mb-3">

              <select name="estadoItemRegistro" id="estadoItemRegistro" class="form-select mr-sm-2">
                <option value="">Seleccione un estado</option>
                <option value="0">Inactivo</option>
                <option value="1">Activo</option>
              </select>
            </div>

            <input type="submit" id="btenviar" class="btn btn-idemi" name="enviar">

          </form>

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














      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>


















    </div>
  </div>
</div>
<!-- VENTANA MODAL  REGISTRO  -->





<!--    EDITAR  USUARIO  INICIO -->

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post">

          <input type="hidden" name="idItemIvenEditar"></INPUT>




          <div class="form-group mb-3">
            <div class="row">
              <div class="col-3"><label class="fw-bold">Item</label> </div>
              <div class="col-9"><input type="text" class="form-control form-control-sm" name="nameItemEdit"
                  placeholder="Elemento (obligatorio)" disabled="true"></div>
            </div>
          </div>



          <div class="form-group mb-3">
            <div class="row">
              <div class="col-3"><label class="fw-bold">Marca</label> </div>
              <div class="col-9"><input type="text" class="form-control form-control-sm" name="marcaItemEdit"
                  placeholder="Marca (obligatorio)" required="required"></div>
            </div>
          </div>

          

          <div class="form-group mb-3">
            <div class="row">
              <div class="col-3"><label class="fw-bold">Modelo</label> </div>
              <div class="col-9"> <input type="text" class="form-control form-control-sm" name="modeloItemEdit"
                  placeholder="Modelo (obligatorio)" required="required">
              </div>
            </div>
          </div>


          <div class="form-group mb-3">
            <div class="row">
              <div class="col-3"><label class="fw-bold">Serial</label> </div>
              <div class="col-9"> <input type="text" class="form-control form-control-sm" name="serialItemEdit" id="serialItemEdit"
                  placeholder="Serial (obligatorio)" required="required">
              </div>
            </div>
            </div>



            <div class="form-group mb-3">
              <div class="row">
                <div class="col-3"><label class="fw-bold">Placa Idemia</label> </div>
                <div class="col-9"><input type="text" class="form-control form-control-sm" name="placaIdemiaItemEdit" id="placaIdemiaItemEdit"
                    placeholder="Placa Idemia (obligatorio)">
                </div>
              </div>
              </div>

     


                <div class="form-group mb-3">
                <div class="col-3"><label class="fw-bold">Observaciones</label> </div>
                  <textarea class="form-control form-control-sm" id="obsvItemEdit" name="obsvItemEdit" rows="2"
                    placeholder="Observaciones"></textarea>

                </div>



                <div class="form-group mb-3">
                <div class="row">
                  <div class="col-3"><label class="fw-bold">Estado</label> </div>
                  <div class="col-9"> <select name="estadoItemEdit" id="estadoItemEdit" class="form-select mr-sm-2 form-select-sm">
                    <option value="">Seleccione un estado</option>
                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>
                  </select>
                </div>
                </div>
                </div>





              </div>
              <div class="modal-footer">
                <input type="submit"  id="btenviaredit" class="btn btn-idemi" name="enviar">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!--    EDITAR  USUARIO  FIN -->





<!--    DETALLES ASIGANCIÓN ASIGANCIÓN -->

<!-- Modal -->
<div class="modal fade" id="modalasignItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reasiganción de dispositivo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



        <div class="row">



          <div class="col-5">

            <form method="post">


              <input type="hidden" name="idItemIvenAsignar" value="">
              <input type="hidden" name="idTipoAsignar" value="">


              <select class="form-control form-control-sm" name="usuarioAsignar">
                <option value="">Seleccionar responsable</option>
                

<?php

$consuluserall = new Controlador_adminUsers();
$consuluserall->consulUsuariosActivosControlador();
?>

              </select>

          </div>


          <div class="col-2">
            <input class="btn btn-idemi btn-sm" type="submit" value="Asignar">
          </div>



        </div>
        </form>


        <div class="row mt-3">
          <div class="col-12">




            <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">

              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Ingeniero</th>
                  <th scope="col">Fecha Asiganción</th>
                </tr>
              </thead>
              <tbody id="idresultasi">




              </tbody>
            </table>



          </div>


        </div>




      </div>
    </div>
  </div>
</div>

<!--    EDITAR  USUARIO  FIN -->











<!-- MODAL DETALLES DE ITEMS -->
<div class="modal fade" id="modaldetalMov" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalles</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">




        <div class="divdetallesitem px-3 fw-light">

          <div class="row">

            <div class="col-4 fw-bold">ITEM</div>
            <div id="item" class="col-8">HP</div>

          </div>


          <div class="row">

            <div class="col-4 fw-bold">MARCA</div>
            <div id="marca" class="col-8">HP</div>

          </div>



          <div class="row">

            <div class="col-4 fw-bold">MODELO</div>
            <div id="modelo" class="col-8">HP</div>

          </div>



          <div class="row">

            <div class="col-4 fw-bold">SERIAL</div>
            <div id="serial" class="col-8">HP</div>

          </div>

      

          <div class="row">

          <div class="col-4 fw-bold">PLACA IDEMIA</div>
          <div id="plidemia" class="col-8">HP</div>

          </div>

       


          <div class="row">

            <div class="col-4 fw-bold">ESTADO</div>
            <div id="estado" class="col-8">HP</div>

          </div>





          <div class="row">

            <div class="col-4 fw-bold">OBSRVACIONES</div>
            <div id="obsr" class="col-8">HP</div>

          </div>



          <div class="row">

            <div class="col-4 fw-bold">ASIGANDO A</div>
            <div id="asig" class="col-8">HP</div>

          </div>

        </div>






        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>


        </div>
      </div>
    </div>
  </div>

  <!-- MODAL DETALLES DE ITEMS -->