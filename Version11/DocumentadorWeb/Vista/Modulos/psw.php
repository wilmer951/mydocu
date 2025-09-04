<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">
<div class="card">
  <div class="card-body">
 
  <div class="table-responsive">
<table id="example" class="table table-sm table-striped" style="width:100%">

        <thead class="text-center">
        <h5>Contraseñas</h5>
            <tr>
                
                <th>Aplicación</th>
                <th>Usu/Ip</th>
                <th>Copy</th>
                <th>Pass</th>
                <th>Copy</th>
            </tr>
        </thead>
        <tbody>
     
     
           <?php 
           
           $consultapsw = new Controlador_itemmenu();
           $consultapsw -> ItemMenuPswControlador();
           ?>
       
        </tbody>

    </table>

</div>
    
  </div>
</div>


</div>