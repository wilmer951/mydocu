
<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">
    <div class="card">
        <div class="card-body">

        <div class="text-center">
                                               <div class="btn btnone bt-lg" onclick="cerrarVentana()">
                                                   Cerrar ventana
                                                   </div>
                                           
                                           </div>

      

                <div class="conteainer py-5">


                <div class="alert alert-info" role="alert">
                    Por tu salud auditiva e higiene, los accesorios de tu diadema deben ser cambiados aproximadamente cada <span class="fw-bold">6 meses </span>de uso, si ya paso este tiempo, solicita con tu jefe inmediato el cambio de los mismos y confirma la entega, una vez los recibas.
                </div>



                <form  method="post" class="px-5">

                          <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="accesorio1" name="accesorio1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Espuma
                                    </label>
                            </div>

                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="accesorio2" name="accesorio2">
                                    <label class="form-check-label" for="flexCheckChecked">
                                    Tubo acustico (Pitillo)
                                    </label>
                            </div>


                            <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="terminosentrega" name="terminos">
                                    <label class="form-check-label" for="flexCheckChecked">
                                    Aceptación de terminos
                                    </label>
                            </div>

                            <div class="text-center mt-5">
                                <input  class="btn btnone bt-lg" type="submit" id="btnconfiryacess" value="Enviar">
                            </div>

                            <?php   
                
                                    $confiAccesorios = new Controlador_pausasactivas();
                                    $confiAccesorios -> confiAccesoriosControlador();
                            ?>
                        


                </form>
                </div>

<div class="alert alert-warning fst-italic" role="alert" style="font-size:12px">

            <?php   
                            
                            $consmidiasAcce = new Controlador_pausasactivas();
                            $consmidiasAcce -> consulUserDiasAcceControlador();
                    ?>

</div>


        </div>
    </div>
</div>




<script>

   function cerrarVentana(){
              //la referencia de la ventana es el objeto window del popup. Lo utilizo para acceder al método close
              window.close();
          }


</script>
