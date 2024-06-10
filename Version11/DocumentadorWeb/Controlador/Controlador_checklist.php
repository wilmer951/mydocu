<?php

class Controlador_checklist {




//************* METODO CHECKLIST ADAPTADOR DE RED MTABLET **************	

public function chmtabletAdaptadorcontrolador(){




	if(isset($_POST["resulitemst"])){


		$colorlink=$_POST["colorlink"];	
		$direIP=$_POST["direIP"];	
		$estadoitem2=$_POST["resulitem2"];
		$estadoitem3=$_POST["resulitem3"];
		$estadoitem4=$_POST["resulitem4"];
		$estadoitem5=$_POST["resulitem5"];
		$estadoitem6=$_POST["resulitem6"];
		$estadoitem7=$_POST["resulitem7"];	
		$estadoitem8=$_POST["resulitem8"];
		$estadoitem9=$_POST["resulitem9"];
		$estadofinal=$_POST["resulitemst"];	



		if ($colorlink != null) {

			$estadoitem1="Se realiza la verificación del color link del adaptador dando color ".$colorlink.'.';

		}else
		{

			$estadoitem1="";
		}



		if ($estadoitem2 != null) {

			$estadoitem22="Se realiza ping a la dirección IP: " . $direIP ." siendo este " .$estadoitem2.'.';

		}else
		{

			$estadoitem22="";
		}



		if ($estadoitem3==1) {

			$estadoitem3="Se verifica que el direccionamiento IP(IP Address, Netmask, Gateway address, DNS Address) coincida con la última actualización entregada.";
		}else{

			$estadoitem3="";

		}


		if ($estadoitem4==1) {

			$estadoitem4="Se realiza borrado de cache de la aplicación de entrega de documentos.";
		}else{

			$estadoitem4="";

		}


		if ($estadoitem5==1) {

			$estadoitem5="Se realiza reinicio de la Mtablet.";
		}else{

			$estadoitem5="";

		}

		if ($estadoitem6==1) {

			$estadoitem6="Se verifica configuración de la fecha y hora.";
		}else{

			$estadoitem6="";

		}


		if ($estadoitem8 != null) {

			$estadoitem8="Se verifica que la Mtablet cuente con el WIfi desactivado y no tenga una SIM insertada.";
		}else{

			$estadoitem8="";

		}


	if ($estadoitem9 != null) {

			$estadoitem9="Se realiza cambio de puerto de red y cable.";
		}else{

			$estadoitem9="";

		}



			if ($estadoitem7 != null) {

			$estadoitem77="Se verifica la versión de DED siendo ".$estadoitem7.'.';
		}else{

			$estadoitem77="";

		}




		if ($estadofinal==0) {
			$estadofinal="Luego de realizar estas verificaciones, se realizan pruebas y son exitosas.";
		}


		else if ($estadofinal==1) {
			$estadofinal=". Luego de realizar estas verificaciones, se realizan pruebas y la falla continua, por lo cual se realiza notificación al área correspondiente para su revisión.";
		}



		echo '
		<div class="textareaoculto">
<textarea id="copycheck1">
Tipo de conexión: Adaptador.
'.$estadoitem1.'
'.$estadoitem22.'
'.$estadoitem3.'
'.$estadoitem4.'
'.$estadoitem5.'
'.$estadoitem6.'
'.$estadoitem77.'
'.$estadoitem8.'
'.$estadoitem9.'

'.$estadofinal.'</textarea>
				</div>

		<div class="text-center">
				<button class="btn btn-success" onclick="CopyToClipboard(\'copycheck1\')">Copy</button>
		</div>
		';


		
		
			
		




	}


}





//************* METODO CHECKLIST SIM DE RED MTABLET **************	


public function chmtabletSimControlador(){



	if(isset($_POST["resulitemst"])){


		$operador=$_POST["resulitem1"];
		$senal=$_POST["resulitem2"];
		$apn=$_POST["resulitem3"];
		$resulitem4=$_POST["resulitem4"];
		$resulitem5=$_POST["resulitem5"];		
		$resulitem6=$_POST["resulitem6"];
		$resulitem7=$_POST["resulitem7"];
		$resulitem8=$_POST["resulitem8"];
		$resulitem9=$_POST["resulitem9"];
		$resulitem11=$_POST["resulitem11"];
		$resulitem12=$_POST["resulitem12"];
		$estadofinal=$_POST["resulitemst"];



		if ($operador != null) {

			$itemoperador='Operador: '.$operador;


		}else
		{

			$itemoperador="";
		}



		if ($senal != null) {

			$itemsenal='Se verifica el tipo de señal la cual arroja: '.$senal.'.';


		}else
		{

			$itemsenal="";
		}



		if ($apn == 1) {


			$itemapn='Se realiza la verificación de la configuración de la APN.';	

		}else
		{

			$itemapn="";
		}


		if ($resulitem4 != null) {

			$resulitem4='Se dan indicaciones de retirar la SIM y volverla a colocar.';


		}else
		{

			$resulitem4="";
		}

		if ($resulitem5 ==1) {

			$resulitem5='Se realiza reinicio de la Mtablet.';


		}else
		{

			$resulitem4="";
		}


		if ($resulitem6 == 1) {

			$resulitem6='Se realiza verificación de la fecha y hora.';


		}else
		{

			$resulitem6="";
		}



		if ($resulitem7 != null) {

			$resulitem77='Se verifica la versión del DED '.$resulitem7.'.';


		}else
		{

			$resulitem77="";
		}



		if ($resulitem8==1) {

			$resulitem8="Se verifica el tipo de red preferido sea 4G.";
		}else{

			$resulitem8="";

		}


		if ($resulitem9==1) {

			$resulitem9="Se realiza borrado de cache de la aplicación de entrega de documentos.";
		}else{

			$resulitem9="";

		}



			if ($resulitem11==1) {

			$resulitem11="No es posible realizar prueba de ping (Versión de DED incompatible)";
		}else if ($resulitem11==2){

			$resulitem11="Se realiza prueba de ping con resultado exitoso.";

		}else if ($resulitem11==3){
			$resulitem11="Se realiza prueba de ping con resultado fallido.";
		}else{
			$resulitem11="";
		}



		if ($resulitem12==1) {

			$resulitem12="Se verifica que no se encuentre conectada una WIFI y los datos se encuentren activos.";
		}else{

			$resulitem12="";

		}



		if ($estadofinal == 0) {

			$estadofinal='Luego de realizar estas verificaciones se realizan pruebas y son exitosas.';


		}else if($estadofinal == 1)
		{

			$estadofinal='Luego de realizar estas verificaciones se realizan pruebas y continua la falla, se procede a notificar al área correspondiente para su revisión.';
		}


		echo '
		<div class="textareaoculto">
<textarea id="copycheck1">
Se evidencia que la Mtablet se encuentra conectada por medio de SIM.
'.$itemoperador.'
'.$itemsenal.'
'.$itemapn.'
'.$resulitem4.'
'.$resulitem5.'
'.$resulitem6.'
'.$resulitem77.'
'.$resulitem8.'
'.$resulitem9.'
'.$resulitem11.'
'.$resulitem12.'
'.$estadofinal.'</textarea>
		</div>
		
			<div class="text-center">
			<button class="btn btn-success" onclick="CopyToClipboard(\'copycheck1\')">Copy</button>

			</div>




		';



	}


}









//************* METODO CHECKLIST MORPHOTOP **************	

public function chmMtopcontrolador(){




	if(isset($_POST["resulmtop"])){


		$tipdoc=$_POST["tipdoc"];	
		$nuip=$_POST["nuip"];	
		$resulitem3=$_POST["resulitem3"];	
		$resulitem4=$_POST["resulitem4"];	
		$resulitem5=$_POST["resulitem5"];

		
			





		echo '
<div class="textareaoculto">
<textarea id="copycheck1">Tipo de documento: '.$tipdoc.'. 
Numero de NUIP: '.$nuip.'.

Verificaciones a nivel de hardware:

Se verifica que el dispositivo se encuentre correctamente conectado.
Se verifica que el equipo reconozca el dispositivo MorphoTop a través del administrador de dispositivos.

Verificaciones a nivel de Software:

Se realiza reinicio de servicio de licencia de MorphoTop.
Se realiza borrado de temporales del equipo.
Se ejecuta Test de dispositivo con huellas de otra persona.
Se ejecuta Test de dispositivo con huellas del ciudadano.


Verificaciones a nivel de procedimiento.

Se informa al funcionario validar correcta limpieza de manos del ciudadano.
Se informa al funcionario validar correcta limpieza del dispositivo MorphoTop.
Se verifica correcta colocación de manos del ciudadano.

Se recomienda al funcionario realizar captura de huellas en tinta.
</textarea>
				</div>

		<div class="text-center">
				<button class="btn btn-success" onclick="CopyToClipboard(\'copycheck1\')">Copy</button>
		</div>

<script>
Swal.fire({
   title: "<strong>Importante</u></strong>",
   icon: "warning",
  text: "Antes de generar el caso tener las capturas completas.",
})
</script>

		';


		
		
			
		




	}


}





 }//cierre clase principal

 