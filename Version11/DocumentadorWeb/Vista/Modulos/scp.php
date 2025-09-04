<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">
<div class="card">
  <div class="card-body">
 
  <div class="table-responsive">
<table id="example" class="table table-sm table-striped" style="width:100%">

        <thead class="text-center">
        <h5>Scripts</h5>
            <tr>
                
                <th>Script</th>
                <th>Copy</th>
                
            </tr>
        </thead>
        <tbody>
     
     
           <?php 
           
           $consultapsw = new Controlador_itemmenu();
           $consultapsw -> ItemMenuScpControlador();
           ?>
       
        </tbody>

    </table>

</div>
    
  </div>
</div>


</div>