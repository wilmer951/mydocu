<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Documentador SISTTO" content="">
  <meta name="Wilmer Pulido" content="">

   <title>Admin Documentador WEB</title>

 <?php
   $randon=rand(0,1000); //versión de archivos JS y css
 ?>
   
   
<!-- BOOSTSTRAP-->

   
   <link href="Vista/css/bootstrap5/bootstrap.css" rel="stylesheet">
   <link rel="stylesheet" href="Vista/css/icons/bootstrap-icons.css">

<!-- BOOSTSTRAP-->

<!-- ***********************  ESTILOS CSS ********************************************* -->

<!-- CSS  login-->
  <link href="Vista/css/mystyle.css?v=<?php echo $randon?>" rel="stylesheet">
  <link href="Vista/css/login.css?v=<?php echo $randon?>" rel="stylesheet">

<!-- ***********************  ESTILOS CSS ********************************************* -->


<script src="Vista/js/sweetalert.js"></script>

  <!-- Custom styles for this template-->
  




  <script src="Vista/js/chart.js"></script>
  <script src="Vista/js/chartplugin.js"></script>


  <link href="Vista/css/datatables/datatables.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php include "Modulos\parametros.php"; ?>
<?php   
$mvc = new Controlador_enlaces();
$mvc -> enlacesControlador();
?>
     
   <script  src="Vista/js/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
   <script  src="Vista/js/bootstrap5/bootstrap.bundle.min.js"></script>



<!-- Page level tablas -->
   <script src="Vista/js/vendor/datatables/jquery.dataTables.min.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/vendor/datatables/dataTables.bootstrap4.min.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/demo/datatables-demo.js?v=<?php echo $randon?>"></script>



    <script src="Vista/js/vendor/datatables/datatables.min.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/vendor/datatables/filtre_datable.js?v=<?php echo $randon?>"></script>
    




    <script src="Vista/js/adminUsers.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminBottons.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminAlerlogin.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminModulos.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminSubmodulo.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminCategorias.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminPausasActivas.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminCalidad.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminEventos.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/subPsw.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/subCmd.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/subScr.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/adminInfo.js?v=<?php echo $randon?>"></script>

    <script src="Vista/js/adminInventario.js?v=<?php echo $randon?>"></script>
    <script src="Vista/js/bootstrap5/lightbox.js?v=<?php echo $randon?>"></script>
    

    
    <script src="Vista/js/objetivos/objUdemy.js?v=<?php echo $randon?>"></script>

    <script src="Vista/js/imprimpdf/jspdf.umd.min.js"></script>
    <script src="Vista/js/imprimpdf/html2canvas.min.js"></script>
    
    


</body>
</html>


