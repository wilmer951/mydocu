<?php //************* ADMINISTRACION DE ALERTA DE LOGIN **************

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';




class Controlador_adminCalidad{






#ACTUALIZAR  MENSAJE ALERTA LOGIN
	#------------------------------------
	public function ingresarFomularioCalidadControlador(){


        if(isset($_POST	["nameformUsuario"])){



            $consecutivoreporte = DatosAdminCalidad::consulconsecutivoreporteModelo("calidad");
            $nreporte=$consecutivoreporte["cal_id"]+1;



            $correonoti= DatosAdminCalidad::consulcorreonotificaciones("parametros");
            $correonoti=$correonoti["valor"];
            
            $autecorreo= DatosAdminCalidad::consulautenticorreonotificaciones("parametros");
            $autecorreo=$autecorreo["valor"];
            







            
        $user=$_POST["nameformUsuario"];

    $usuario=DatosAdminCalidad::consultarNameUsuario($user,"usuarios");
    $ncalidad=$_POST["resulcal"];
    $nsoporte=$_POST["resulsopor"];
    $ndocu=$_POST["resuldocu"];
    $promedio=round((($ncalidad+$nsoporte+$ndocu)/3),2);

    $nombre=$usuario["nombres"];


            

        $mensaje="


       <center> <h1>Se ha cargado una nueva evaluación</h1></center>
        <br>
        <br>
        <br>
        <hr>
        
        <div>
        <table style='border: 1px red;width: 70%;'>

     
        <thead>

            <tr>
                <td><strong>Numero de reporte</strong></td>
                <td>R-$nreporte</td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            </tr>

            <tr>
                <td><strong>Nombre Ingeniero</strong></td>
                <td>$nombre</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Nota Calidad</strong></td>
                <td>$ncalidad %</td>
            </tr>
            <tr>
                <td><strong>Nota Soporte</strong></td>
                <td>$nsoporte %</td>
            </tr>
            <tr>
                <td><strong>Nota Documentación</td>
                <td>$ndocu %</td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            </tr>


            <tr>
            <td><strong>Nota Promedio</strong></td>
            <td>$promedio %</td>
        </tr>
        </tbody>
    </table>

    </div>

<hr>
<br>
<br>
<br>

<center> <div>Mensaje enviado de forma automatica, no responder este correo.</div>  </center>
  ";



    


            $datosController = array(
            "nreporte"=>"R-".$nreporte,
            "usuario"=>$_POST["nameformUsuario"],
            "tiempo"=>$_POST["nameformTiempo"],
            "fecha"=>$_POST["nameformFecha"],
            "ncaso"=>$_POST["nameformCaso"],
            "cal1"=>$_POST["nocal1"],
            "cal2"=>$_POST["nocal2"],
            "cal3"=>$_POST["nocal3"],
            "cal4"=>$_POST["nocal4"],
            "cal5"=>$_POST["nocal5"],
            "caltotal"=>$_POST["resulcal"],
            "sopor1"=>$_POST["nosopor1"],
            "sopor2"=>$_POST["nosopor2"],
            "sopor3"=>$_POST["nosopor3"],
            "sopor4"=>$_POST["nosopor4"],
            "sopor5"=>$_POST["nosopor5"],
            "soportotal"=>$_POST["resulsopor"],
            "docu1"=>$_POST["nodocu1"],
            "docu2"=>$_POST["nodocu2"],
            "docu3"=>$_POST["nodocu3"],
            "docu4"=>$_POST["nodocu4"],
            "docu5"=>$_POST["nodocu5"],
            "docutotal"=>$_POST["resuldocu"],
            "comantarios"=>$_POST["nameformComentarios"]);

            


			$respuesta = DatosAdminCalidad::ingresarFomularioCalidadModelo($datosController, "calidad");

				if($respuesta == "success"){
					
#ENVIO DE EMAIL

                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        $mail->SMTPDebug = 0;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = $correonoti;                     //SMTP username
                        $mail->Password   = $autecorreo;                               //SMTP password
                        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom($correonoti, 'Notificación Documentador');
                        $mail->addAddress('wilmer.pulido@idemia.com');     //Add a recipient
                        $mail->addAddress('notificacionesdocumentador@gmail.com');     //Add a recipient
                        
                        $mail->Subject="Notificación cargue de evaluación calidad";
                
                        //Content
                        $mail->isHTML(true);   
                        $mail->CharSet = 'UTF-8';   
                                                    //Set email format to HTML

                        $mail->Body    = $mensaje;
                        $mail->MsgHTML($mensaje);
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                        $mail->send();
                        header("location:index.php?ir=adminCalidad&st=ok");
                    } catch (Exception $e) {
                        echo "
                        
                        <script>alert('Se ha guardado la evaluación de forma exitosa pero no se ha podido enviar correo de notificación, error de envio: {$mail->ErrorInfo}')</script>";
                      header("location:index.php?ir=adminCalidad&st=ok");
                    }
                
#ENVIO DE EMAIL

				



				}

				else{

					
				header("location:index.php?ir=adminCalidad&st=fail");
				}
	
			
			
     






                    }
        

         }
        
        
        
        
        



         

         
public function consulIndividualCaliControlador(){


    $respuesta = DatosAdminCalidad::consulIndividualCaliModelo("calidad");

    foreach ($respuesta as $row => $item) {

        $promedio=round(($item["cal_caltotal"]+$item["cal_soptotal"]+$item["cal_docutotal"])/3,2);

echo'



			<tr>
			<th scope="row">'.$item["cal_nreporte"].'</th>
			<td>'.$item["nombres"].'</td>
			<td>'.$item["cal_caltotal"].'%</td>
            <td>'.$item["cal_soptotal"].'%</td>
            <td>'.$item["cal_docutotal"].'%</td>
            <td>'.$promedio.'%</td>
            <td>'.$item["cal_fecha"].'</td>
            <td>'.$item["cal_tiem"].' Min</td>
			
			<td>
						<button type="button" class="btn btn-outline-warning btnutili" data-bs-toggle="modal" data-bs-target="#modalverdetalle" onclick="functionVerdatallecalidad(\''.$item["cal_nreporte"].'\')">
						
						</button>


                        
			</td>


			</tr>


     ';


    }

}

















public static function consDetalleCalidadControlador($iddetalcalidad){

    $respuesta = DatosAdminCalidad::consDetalleCalidadModelo($iddetalcalidad,"calidad");
    
     echo json_encode($respuesta);


    

}


        
public static function consGraficoGeneralCalidadControlador(){


    $nacumulado=0;
    $totalnotas=0;

    $cantiddenotas = DatosAdminCalidad::consCantidaddeNotas("calidad");

    if ($cantiddenotas["cantnotas"]>0){
  
                
                $totalnotas=($cantiddenotas["cantnotas"]*100);

                $totalacumulado = DatosAdminCalidad::totalacumuladoNotas("calidad");
                foreach ($totalacumulado as $row => $item) {

                $prmedio=($item["cal_caltotal"]+$item["cal_soptotal"]+$item["cal_docutotal"])/3;
                $nacumulado=$nacumulado+$prmedio;


                }

                

                $totalponderado=($nacumulado*100)/$totalnotas;

                $cumplimeinto=$totalponderado;
                $incumplimiento=(100-$totalponderado);


                $data = array( $cumplimeinto,$incumplimiento);

                


                echo json_encode($data);

}else{

    echo 'sindatos';
}


    

}






        
public  function itemrecurrentesCalidadControlador(){



    $respuesta = DatosAdminCalidad::itemrecurrentesCalidadModelo("calidad");
    
    

    if($respuesta["calin1"]>0){
    
$cal1= $respuesta["calin1"];
$cal2= $respuesta["calin2"];
$cal3= $respuesta["calin3"];
$cal4= $respuesta["calin4"];
$cal5= $respuesta["calin5"];

$sopor1=$respuesta["soporn1"];
$sopor2=$respuesta["soporn2"];
$sopor3=$respuesta["soporn3"];
$sopor4=$respuesta["soporn4"];
$sopor5=$respuesta["soporn5"];

$docu1=$respuesta["docun1"];
$docu2=$respuesta["docun2"];
$docu3=$respuesta["docun3"];
$docu4=$respuesta["docun4"];
$docu5=$respuesta["docun5"];


$totaitem=

$cal1+
$cal2+
$cal3+
$cal4+
$cal5+

$sopor1+
$sopor2+
$sopor3+
$sopor4+
$sopor5+

$docu1+
$docu2+
$docu3+
$docu4+
$docu5;





$itemcal1="Protocolo de bienvenida";
$itemcal2="Identificación";
$itemcal3="Amabilidad, cortesia y lenguaje";
$itemcal4="Entrega información";
$itemcal5="Despedida";


$itemsopor1="Diagnostico";
$itemsopor2="Manejo tiempo de llamada";
$itemsopor3="Dominio del tema";
$itemsopor4="Sigue prodecemientos";
$itemsopor5="Soluciona";


$itemdocu1="Registro de caso";
$itemdocu2="Ingreso Correcto de Información";
$itemdocu3="Categorización";
$itemdocu4="Diagnostico, solución y cierre";
$itemdocu5="Tiempo apertura de caso";





$porcentajecal1=round(($cal1*100)/$totaitem,2);
$porcentajecal2=round(($cal2*100)/$totaitem,2);
$porcentajecal3=round(($cal3*100)/$totaitem,2);
$porcentajecal4=round(($cal4*100)/$totaitem,2);
$porcentajecal5=round(($cal5*100)/$totaitem,2);


$porcentajesopor1=round(($sopor1*100)/$totaitem,2);
$porcentajesopor2=round(($sopor2*100)/$totaitem,2);
$porcentajesopor3=round(($sopor3*100)/$totaitem,2);
$porcentajesopor4=round(($sopor4*100)/$totaitem,2);
$porcentajesopor5=round(($sopor5*100)/$totaitem,2);


$porcentajedocu1=round(($docu1*100)/$totaitem,2);
$porcentajedocu2=round(($docu2*100)/$totaitem,2);
$porcentajedocu3=round(($docu3*100)/$totaitem,2);
$porcentajedocu4=round(($docu4*100)/$totaitem,2);
$porcentajedocu5=round(($docu5*100)/$totaitem,2);





    echo '<tr>
            <td>'.$itemcal1.'</td>
            <td>'.$porcentajecal1.' %</td>
        </tr>

        <tr>
            <td>'.$itemcal2.'</td>
            <td>'.$porcentajecal2.' %</td>
        </tr>


        <tr>
            <td>'.$itemcal3.'</td>
            <td>'.$porcentajecal3.' %</td>
        </tr>



        <tr>
            <td>'.$itemcal4.'</td>
            <td>'.$porcentajecal4.' %</td>
        </tr>


        <tr>
            <td>'.$itemcal5.'</td>
            <td>'.$porcentajecal5.' %</td>
        </tr>


        <tr>




            <td>'.$itemsopor1.'</td>
                <td>'.$porcentajesopor1.' %</td>
                </tr>

                <tr>
                <td>'.$itemsopor2.'</td>
                <td>'.$porcentajesopor2.' %</td>
            </tr>

            <tr>
            <td>'.$itemsopor3.'</td>
            <td>'.$porcentajesopor3.' %</td>
            </tr>


            <tr>
            <td>'.$itemsopor4.'</td>
            <td>'.$porcentajesopor4.' %</td>
            </tr>


            <tr>
            <td>'.$itemsopor5.'</td>
            <td>'.$porcentajesopor5.' %</td>
            </tr>

        




            <tr>
            <td>'.$itemdocu1.'</td>
            <td>'.$porcentajedocu1.' %</td>
            </tr>

            <tr>
            <td>'.$itemdocu2.'</td>
            <td>'.$porcentajedocu2.' %</td>
            </tr>



            <tr>
            <td>'.$itemdocu3.'</td>
            <td>'.$porcentajedocu3.' %</td>
            </tr>


            <tr>
            <td>'.$itemdocu4.'</td>
            <td>'.$porcentajedocu4.' %</td>
            </tr>


            <tr>
            <td>'.$itemdocu5.'</td>
            <td>'.$porcentajedocu5.' %</td>
            </tr>


    
   
    ';





}else
{
    echo 'no hay datos';
}      
                    

}













public static function promedioGeneraluserControlador(){


       

                $respuesta = DatosAdminCalidad::promedioGeneraluserModelo("calidad");
                foreach ($respuesta as $row => $item) {

                        echo '
                            <tr>
                                <td>'.$item["nombres"].'</td>                         
                                <td class="text-center">'.round($item["cantidadeva"],2).'</td>
                                <td class="text-center">'.round($item["promedio"],2).' %</td>
                                

                                

                            </tr>

                        ';


                }



}




public static function consGraficoCategoraisControlador(){




    $calidad = DatosAdminCalidad::consGraficoCategoraisCalidadControlador("calidad");
    $soporte = DatosAdminCalidad::consGraficoCategoraisSoporteControlador("calidad");
    $docu = DatosAdminCalidad::consGraficoCategoraisDocuControlador("calidad");
    if (isset($calidad["cal_caltotal"])) {
    

$cantiddenotas = DatosAdminCalidad::consCantidaddeNotas("calidad");
    
$caliadpromedio=$calidad["cal_caltotal"]/$cantiddenotas["cantnotas"];
$soporpromedio=$soporte["cal_soptotal"]/$cantiddenotas["cantnotas"];
$docupromedio=$docu["cal_docutotal"]/$cantiddenotas["cantnotas"];

 
    


  $datacategorias = array(

    "cantnotas"=>$cantiddenotas["cantnotas"],
        "calidad"=>$caliadpromedio,
        "soporte"=>$soporpromedio,
        "docu"=>$docupromedio
    

    );


    echo json_encode($datacategorias);

}else{



    echo 'sindatos';

}












}












        
        
        
        
}
