<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">
<div class="card">
  <div class="card-body">
 
  <div class="table-responsive">
<table id="example" class="table table-sm table-striped" style="width:100%">

        <thead class="text-center">
        <h5>Comandos</h5>
            <tr>
                
                <th>Comando</th>
                <th>Copy</th>
                
            </tr>
        </thead>
        <tbody>
     
     
           <?php 
           
           $consultapsw = new Controlador_itemmenu();
           $consultapsw -> ItemMenuCmdControlador();
           ?>
       
        </tbody>

    </table>

</div>
    
  </div>
</div>


</div>