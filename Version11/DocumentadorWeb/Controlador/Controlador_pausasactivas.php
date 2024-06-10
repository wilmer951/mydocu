<?php
	

	class Controlador_pausasactivas{



	

//******************** CONSULTA DE ALERTA PAUSA ACTIVA //********************
	public static function pausasactivasControlador($idmsgpausactiva){


        
		
        $respuesta = Datospausaactiva::pausasactivasModelo("alert_pa_ac",$idmsgpausactiva);



            echo json_encode($respuesta);
        



		


	}


    //******************** CONSULTA INTRUCTIVO DE PAUSA. //********************
	public static function instruactivasControlador(){

      

        if(isset($_GET["idinstr"])){


            $idalert=$_GET["idinstr"];
            

		
            $respuesta = Datospausaactiva::instruactivasModelo("instru_alert",$idalert);
            $conteo=count($respuesta)-1;
            $aleatorio = rand(0, $conteo);
            
           
                if ($conteo>=0) {
                    
                    

                    $extencion=(explode( '.', $respuesta[$aleatorio]["instrupa_medio"]));

                            

                                if ( $extencion[1]=="mp4") {
                                    
                                               echo '
                                               
                                               
                                       

                                    
                                           <div class="text-center">
                                                    <video width=70%  autoplay loop muted controls>
                                                    <source src="Vista/Imagenes/pausaactivas/instrutivos/'.$respuesta[$aleatorio]["instrupa_medio"].'"type="video/mp4" />
                                                    </video>
                                            </div>


                                               ';
                                    


                          


                                        }else if($extencion[1]=="jpg"||$extencion[1]=="gif"||$extencion[1]=="png" ) {
                                            
                                            echo '

                                       
                                            <img src="Vista/Imagenes/pausaactivas/instrutivos/'.$respuesta[$aleatorio]["instrupa_medio"].'"  width="100%" alt="">





                                                        

                                            ';



                                        }
                                


                                                }else
                         

                                            {
                                            echo '<div class="text-center"><h4>No hay instructivo disponible</h4></div>';
                                        }



            



            }

        }





  //******************** CONFIRMAR PAUSA ACTIVA. //********************


        public static function ConfirmacionPausaActivaControlador($idalert,$confirmaciónAletPausaActiva){



            session_start();
            $usuario=$_SESSION["usuario"];

            $datosController = array(
            "usuario"=>$usuario,
            "idalert"=>$idalert,
            "cnfirmacion"=>$confirmaciónAletPausaActiva
            
            
                );
                
            $respuesta = Datospausaactiva::ConfirmacionPausaActivaModelo($datosController,"report_pa");
            echo $respuesta;
                
                    if ($respuesta=="success") {

                        $respuesta = Datospausaactiva::updatecontrolMsgPausasActivasModelo($datosController,"report_pa");
                    }

                 

          

   
        
                }



  //******************** CONFIRMAR PAUSA ACTIVA. //********************


  public static function controlMsgPausasActivasControlador(){

    $paramtrodiasCambioAccesoriosDiadema = Datospausaactiva::consulDiasCambioAccesoriosModelo("parametros");



    session_start();

    if(isset($_SESSION["usuario"])){

    $usuario=$_SESSION["usuario"];

    

    // CONSULTAR CONTROL PAUSA ACTIVAS     
        
      $respuesta = Datospausaactiva::consulcontrolMsgPausasActivasModelo($usuario,"controlalertpausaa");
    
    // CONSULTAR CONTROL ACCESORIOS

      $respuesta2 = Datospausaactiva::consulcontrolMsgAccesoriosModelo($usuario,"controlalertacces");



    







// obtener fecha actual y fecha cambio de accerio      
      $fechaactual= strtotime(date("Y-m-d"));
      $fechaacces1=  strtotime(date("Y-m-d",strtotime($respuesta2["acc_acc1_date"])));
      $fechaacces2=  strtotime(date("Y-m-d",strtotime($respuesta2["acc_acc2_date"])));
      $diffacce1 =   ($fechaactual-$fechaacces1)/86400;
      $diffacce2 =   ($fechaactual-$fechaacces2)/86400;

    $dias = $paramtrodiasCambioAccesoriosDiadema["valor"]; //cantidad dias para cambio de accesorios.


        

    $acc_acc1=$respuesta2["acc_acc1"];
    $acc_acc2=$respuesta2["acc_acc2"];
    

      
       /* 
    */
      


 //ENVIAR ESTADO PAUSA ACTIVA
                        
            if ($respuesta["cntr_pa_pa"]==0) {
                    $stadoAlerPausaActiva=1;
                }else{
                    $stadoAlerPausaActiva=0;
                }

//ENVIAR ESTADO CAMBIO DIADEMA

                if ($respuesta["cntr_pa_di"]==0 ) {
                    $stadoAlerCambioDiadema=1;
                }else{
                    $stadoAlerCambioDiadema=0;
                }

//ENVIAR ESTADO CAMBIO ACCESORIOS
                
if ($diffacce1>$dias && $acc_acc1==0 ||$diffacce2>$dias && $acc_acc2==0) {
    $stadoAlerCambioAccesosrios=1;
}else {
    $stadoAlerCambioAccesosrios=0;
}











                $estados=array($stadoAlerPausaActiva,$stadoAlerCambioDiadema,$stadoAlerCambioAccesosrios,$diffacce1,$diffacce2);

                echo json_encode($estados);








            }
    



        }






    //******************** CONFIMRAR RECEPCIÓN DE ACCESORISO //********************
	public static function confiAccesoriosControlador(){

        $usuario= $_SESSION["usuario"];

        $idalerta=3;
        $confimracin=1;

        $datosController = array(
            "usuario"=>$usuario,
            "idalert"=>$idalerta,
            "cnfirmacion"=>$confimracin
            
            
                );
                





        if(isset($_POST["terminos"])){


            if(isset($_POST["accesorio1"])){

                $accesorio= "1";
                $respuesta = Datospausaactiva::confiAccesorios1Modelo($usuario,$accesorio,"report_ac");
                      
                    if ($respuesta=="success") {



                        $respuesta2 = Datospausaactiva::ConfirmacionPausaActivaModelo($datosController,"report_pa");





                        echo '
                        
                        <div class="alert alert-success" role="alert">
                                Guardado exitoso
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        ';
                    }else{

                        echo '
                        
                        <div class="alert alert-danger" role="alert">
                               Error al gaurdar datos
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        ';
                    }




            }


            if(isset($_POST["accesorio2"])){

                $accesorio= "2";
                $respuesta = Datospausaactiva::confiAccesorios1Modelo($usuario,$accesorio,"report_ac");
                if ($respuesta=="success") {
                    echo '
                    
                    <div class="alert alert-success" role="alert">
                            Guardado exitoso
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';
                }else{

                    echo '
                    
                    <div class="alert alert-danger" role="alert">
                           Error al gaurdar datos
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';
                }


            }

  
	}

            

}






    //******************** CONSULTAR MIS DIAS DE CAMBIO DE ACCESORIOS //********************
	public static function consulUserDiasAcceControlador(){
    
    
    $usuario=$_SESSION["usuario"];
       
    $respuesta = Datospausaactiva::consulUserDiasAcceModelo($usuario,"controlalertacces");

    $fechaactual= strtotime(date("Y-m-d"));
    $fechaacces1=  strtotime(date("Y-m-d",strtotime($respuesta["acc_acc1_date"])));
    $fechaacces2=  strtotime(date("Y-m-d",strtotime($respuesta["acc_acc2_date"])));
    $diffacce1 =  round(($fechaactual-$fechaacces1)/86400);
    $diffacce2 =  round(($fechaactual-$fechaacces2)/86400);

    echo '
    
    
    <div>Ultimo cambio de <span class="fw-bolder">espuma</span> '.date("Y-m-d",strtotime($respuesta["acc_acc1_date"])).'  <span class="fw-bolder">('.$diffacce1.' dias) </span></div>
    <div>Ultimo cambio de <span class="fw-bolder">pitillo</span> '.date("Y-m-d",strtotime($respuesta["acc_acc2_date"])).' <span class="fw-bolder"> ('.$diffacce2.' dias)</span></div>
    
    
    
    ';
            

}

        





}//cierre clase principal