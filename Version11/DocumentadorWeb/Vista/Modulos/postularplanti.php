<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">
    <div class="card">
        <div class="card-body">

        

        <?php   
                
                $postplantilla = new Controlador_postularplantilla();
                $postplantilla -> postularPlantillaControlador();
          ?>


<?php include "alerts.php";  ?>


        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Nota:</strong>
            <li>Las plantillas postuladas deben ser genéricas de uso recurrente.</li>
            <li>Utiliza la nemotecnia que encuentras en plantillas actuales.</li>
            <li>Verifica que la plantilla no exista actualmente en otra categoria.</li>
  </div>




        <form class="form-horizontal" method="post">
              

            
              <div class="form-group mt-2">
                
                    <select class="form-select" aria-label="Default select example" name="moduregistro"  id="selectmodulo" required="true">
                    <option value="">seleccione una opción</option>

                        <?php   
                                $consultaModulo = new Controlador_postularplantilla();
                                $consultaModulo -> consultaModulosControladorall();
                          ?>

            </select>



              </div>



            <div class="form-group mt-2">

                    <select class="form-select" aria-label="Default select example"  name="submregistro" id="selectSubmodulo" required="true"> 
                        
                        <option value="">seleccione una opción</option>

                    </select>

                      </div>
        
                      <div class="form-group mt-2">

                         <select class="form-select" aria-label="Default select example" name="catregistro"  id="selectCategoria"> 
                    
                         <option value="0">seleccione una opción</option>

                    </select>



           </div>


              <div class="form-group mt-3">
               
                    <div class="col-sm-offset-1">
                  <textarea class="form-control" name="descName" placeholder="Descripción" rows="2" maxlength="500" required></textarea>

                  </div>
              </div>





            <div class="form-group mt-3">
                            <div class="col-sm-offset-2">
                            

                        <textarea class="form-control" placeholder="Diagnostico"  rows="2" name="diaName" maxlength="500"></textarea>

                            </div>
                        </div>



            <div class="form-group mt-3">
                            <div class="col-sm-offset-2">
                            

                            <textarea class="form-control" placeholder="Solución" rows="2" name="solName" maxlength="500"></textarea>

                            </div>
                        </div>




              <div class="form-group">
                <div class="col-sm-offset-0"><br>
                  <button type="submit" class="btn btnone btn-sm">Guardar</button>
                </div>
              </div>

            </form>


       




    
        </div>
    </div>
</div>