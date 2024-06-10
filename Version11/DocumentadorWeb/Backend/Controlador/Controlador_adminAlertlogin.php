<?php //************* ADMINISTRACION DE ALERTA DE LOGIN **************



class Controlador_adminAlertLogin{






#ACTUALIZAR  MENSAJE ALERTA LOGIN
	#------------------------------------
	public function acTualizarAlertLoginControlador(){


  
		if(isset($_POST	["actmslongin"])){


      
      $tipoarchivo = explode ("/", $_FILES['instructivo']['type']);
			$extecion=$tipoarchivo[1];
      $mensajeobciional="Generico";

				
				
					
      $dir_subida = '../Vista/Imagenes/ImgAlert/';
					$tipoarchivo = explode ("/", $_FILES['instructivo']['type']); 
					$aleatorio=rand(0,4000);
					$nombrecompleto='imageninfo'.$aleatorio.'.'.$extecion;
					
	
					$fichero_subido = $dir_subida .$nombrecompleto;
					
			move_uploaded_file($_FILES['instructivo']['tmp_name'], $fichero_subido);
						
				
        $datosController = array( "mens"=>$mensajeobciional,
        "est"=>"1",
        "tip"=>$_POST["editarTipoAlerLogin"],
        "det"=>$_POST["detalleEditar"],
        "fech"=>$_POST["fechaeditar"],
        "img"=>$nombrecompleto
      );




      $respuesta = Datosadminalertlogin::acTualizarAlertLoginModelo($datosController, "alerts");



      if($respuesta == "success"){
        
        
      header("location:index.php?ir=adminAlertLogin&st=ok");



      }

      else{

        
      header("location:index.php?ir=adminAlertLogin&st=fail");
      }
						
    	
	
			
			}


		}








//************* CONSULTAR IMANEGES DE ALERTAS **************


        public function consultaAlertloginControlador(){

          

          $respuesta = Datosadminalertlogin::consultaAlertloginModelo("alerts");

          foreach ($respuesta as $row => $item) {
      
      
               echo'


               <td>
               '.$item["detalle"].'
               </td>
      

                  
                  <td>
                              <a href="..\Vista\Imagenes\ImgAlert/'.$item["img"].'" data-toggle="lightbox" data-gallery="mixedgallery" class="col-sm-4">
                                <img src="Vista\Imagenes\iconoverimagen.png" class="img-fluid" style="max-width: 40px;">
                              </a>
                    </td>
      
            
                  
                                  <td>
                                       <button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborradoAlertLogin" onclick="functionBorrarAlertLogin(\''.$item["id_alert"].'\',\''.$item["img"].'\')">
                                      </button>
                                  </td>
        
                    </tr>
                  
                  
                  
                  ';
      
      
                }





          
        }



    

//************* BORRADO  IMG ALERT LOGIN **************


public function borrarAlertloginControlador(){

  if(isset($_POST["idborraalerLogin"])){

      $idalerlogin = $_POST["idborraalerLogin"];
  $imgalerlogin=$_POST["imgAlerlogin"];
  
      


  If (unlink('..\Vista\Imagenes\ImgAlert/'.$imgalerlogin.'')) {


    $respuesta = Datosadminalertlogin::borrarAlertloginModelo($idalerlogin, "alerts");

    if($respuesta == "success"){

      
      header("location:index.php?ir=adminAlertLogin&st=ok");
    
      
    
    }else{

      header("location:index.php?ir=adminAlertLogin&st=fail");

    }



    } else {
    header("location:index.php?ir=adminAlertLogin&st=fail");
    }










     

  }

}















}