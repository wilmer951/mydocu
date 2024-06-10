<?php

if (isset($_GET["st"])) {

if ($_GET["st"]=="ok") {

   echo '
    
    
   <script>
                  Swal.fire({
                     title: "<strong>Operación exitosa</u></strong>",
                     icon: "success",
                  })
   </script>
   
   ';
  
}else {
  echo '
  
  <script>
            Swal.fire({
               title: "<strong>Operación fallida</u></strong>",
               icon: "error",
            })
            </script>
  ';



}
}