<?php

class ModulosMVC{


//******************** METODO ENLACES ************************
		public static function enlacesModelos($enlaces)

			{


				if(
						$enlaces=="home"||
						$enlaces=="login"||
						$enlaces=="interfaz"||
						$enlaces=="salir"
						

							)

				     {


				     	  $enlaces="Vista/Modulos/".$enlaces.".php";

				     }else {


				     		$enlaces="Vista/Modulos/home.php";

				     		}


				     	return $enlaces;




			}







}//FIN CLASE PRINCIPAL