<?php

class Controlador_informacion {




//************* METODO CONSULTA DE INFORMACION  **************	

public static function consultaarticulosinfoContralador(){


			

	$respuesta = Datosinfo::consultaarticulosinfoModelo("articleinfo");

	foreach ($respuesta as $row => $item) {
		
		$date=date_create($item["fecha_art"]);
		$fecha = date_format($date, "d/m/Y");

		echo '
        <div class="articulo">
			<div class="infoTigulo">'.$item["tit_art"].'            
				<div class="divfecha">Actu. '.$fecha.'</div>
			</div>
            
        	<div class="infotexto">'.$item["text_art"].'</div>

		</div>


		';

	}

}



}

