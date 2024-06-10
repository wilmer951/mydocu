<?php 

if (isset($_GET["st"])) {


if ($_GET["st"]=="ok") {
echo " 
<script>

        Swal.fire({

        icon:'success',
        title: 'Postulación exitosa',

        })


</script>

";
}else{
    echo " 
    <script>
    
            Swal.fire({
    
            icon:'error',
            title: 'Error contacte al administrador',
    
            })
    
    
    </script>
    
    "; 
          }
}
  

