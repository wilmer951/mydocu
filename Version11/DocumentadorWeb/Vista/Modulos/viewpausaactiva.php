<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">
    <div class="card">
        <div class="card-body">

        <div class="text-center">
                                               <div class="btn btnone bt-lg" onclick="cerrarVentana()">
                                                   Cerrar ventana
                                                   </div>
                                           
                                           </div>


                                                        <input class="btn btnone" type="button" value="Intentar otro ejercicio" onclick="location.reload()">
                                                        
                                                
        <?php   
                
                $consulintrupausaactiva = new Controlador_pausasactivas();
                $consulintrupausaactiva -> instruactivasControlador();
          ?>
      
        
        




        </div>
    </div>
</div>


<script>

   function cerrarVentana(){
              //la referencia de la ventana es el objeto window del popup. Lo utilizo para acceder al método close
              window.close();
          }


</script>
