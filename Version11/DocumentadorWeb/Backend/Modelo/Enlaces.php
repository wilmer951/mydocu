<?php


//******************** FUNCION ENLACES ************************

		
class ModulosMVC
	{



		public static function enlacesModelos($enlaces)

			{


				if(
						$enlaces=="home"|| 
						$enlaces=="login" || 
						$enlaces=="salir" || 
						$enlaces=="adminUsers"|| 
						$enlaces=="adminBottons" || 
						$enlaces=="adminModulos" || 
						$enlaces=="adminSubmodulos"|| 
						$enlaces=="adminCategorias" || 
						$enlaces=="subPsw" ||
						$enlaces=="subCmd" ||
						$enlaces=="subScr"||
						$enlaces=="adminPausasActivas"||
						$enlaces=="adminAlertLogin"||
						$enlaces=="adminInfo"||
						$enlaces=="adminInventario"||
						$enlaces=="adminInventarioHome"||
						$enlaces=="adminInventarioAcc"||
						$enlaces=="sinacceso"||
						$enlaces=="adminCalidad"||
						$enlaces=="adminCalidadDetalles"||
						$enlaces=="adminObjetUdemy"||
						$enlaces=="adminObjetWiki"||
						
						$enlaces=="reportes"

						

						

						
						
					
		
							)

				     {


				     	  $enlaces="Vista/Modulos/".$enlaces.".php";

				     }else {


				     		$enlaces="Vista/Modulos/login.php";

				     		}


				     	return $enlaces;




			}







	}

?>

