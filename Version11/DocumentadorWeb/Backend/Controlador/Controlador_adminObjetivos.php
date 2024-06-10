<?php //************* ADMINISTRACION DE BOTONES **************



class Controlador_adminObjetivos{



//************* OBJETIVO CURSOS UDEMY  **************



//************* CONSULTAR LISTADO DE INGENIEROS Y PORCENTAJE CUMPLIMIENTO  **************

public function consulObjetivoUdemyusuariosControaldor(){
 
	$respuesta = DatosAdminObjetivos::consulObjetivoUdemyusuariosModelo("usuarios");

$infoIndicaCursosudemy=DatosAdminObjetivos::cantCursosObjeUdemyModelo("indicadores");
$canCursos=$infoIndicaCursosudemy["valor_indica"];
$promeCursos=$infoIndicaCursosudemy["por_max_indica"];

    foreach ($respuesta as $row => $item) {

		$promedio=round(($item["curapbrobados"]*100)/$canCursos,2);

		if ($promedio>$promeCursos) {
			$promedio=$promeCursos;
		}
echo'



			<tr>
			<th scope="row">'.$item["nombres"].'</th>
			<td>'.$item["curapbrobados"].'</td>
			<td>'.$promedio.'%</td>

			

			</tr>


     ';


    }



}













//************* CONSULTAR LISTADO DE CURSOS PENDIENTES POR APROBAR  **************



public function consulcurospendienteaprobacionControaldor(){
 
	$respuesta = DatosAdminObjetivos::consulcurospendienteaprobacionModelo("obj_udemy");

    foreach ($respuesta as $row => $item) {

		
echo'



			<tr>
			<th scope="row">'.$item["nombres"].'</th>
			<td scope="row">'.$item["nom_aproba"].'</td>
			
			

			
						<td>
						<button type="button" class="btn btn-outline-warning btnutili" data-bs-toggle="modal" data-bs-target="#modalverdetalle" onclick="functionVerdatalleobjUdemy(\''.$item["id_objudemy"].'\')">
						
						</button>


						
					</td>

			

			</tr>


     ';


    }


}




//************* CONSULTAR DETALLE DEL CURSO PENDIENTE POR APROBAR  **************


public function consDetalleCursoControlador($idcurso){
 
	$respuesta = DatosAdminObjetivos::consDetalleCursoModelo($idcurso,"obj_udemy");
    
	echo json_encode($respuesta);


}















//************* CAMBIO DE ESTADO DE CURSO APROBADO O RECHAZADO  **************
	#------------------------------------
	public function cambioEstadoCursoControlador(){

		if(isset($_POST["idcursocambioestado"])){

				
		

				$datosController = array( "idcurso"=>$_POST["idcursocambioestado"],
										"stcurso"=>$_POST["estadoAprobacion"],
									      "comentariosCurso"=>$_POST["comentariosCurso"]);

			

				$respuesta = DatosAdminObjetivos::cambioEstadoCursoModelo($datosController, "obj_udemy");

				if($respuesta == "success"){
					
					
				header("location:index.php?ir=adminObjetUdemy&st=ok");



				}

				else{

					
				header("location:index.php?ir=adminObjetUdemy&st=fail");
				}
	
			
			}


		}


	



//************* OBJETIVO CURSOS UDEMY  **************


















 }//fin clase princiipal