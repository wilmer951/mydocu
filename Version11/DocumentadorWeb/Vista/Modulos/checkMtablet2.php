<?php include "controlsesion.php";  ?>
<script>
Swal.fire({
   title: "<strong>Importante</u></strong>",
   icon: "warning",
  text: "Los casos remitidos a UNE, es obligatorio que cuenten con las evidencias de PING, en caso de que la versión de DED lo permita de no adjuntarse no seran tenidos en cuenta.",
})
</script>

<div class="divventanaemergente">
  <div class="card">
    <div class="card-body">

			<!-- CON SIM -->
			<div class="row">

			<div class="col-10">
							<h5>Check Mtablet con SIM</h5>
						</div>
						<div class="col-2">
						<a class="btn btn-sm btnone" href="index.php?ir=checklist">volver</a>
						</div>
			</div>


<form class="mt-4" method="post">
	




<div class="item">
			<div class="titleitem">
			<span class="numberRe">1.</span> Verificar el operador de SIM
			</div>


	
												

													<div class="result">

												<div id="idindicador1" class="indicadoEstado"></div> 	

													<span class="numberRe">Operador </span>

														<select name="resulitem1" id="resulitem1" class="custom-select custom-select-sm">
															<option value="">selecionar</option>
															<option value="Claro">Claro</option>
															<option value="Tigo">Tigo</option>
															<option value="Movistar">Movistar</option>

														</select>


													</div>


</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">2.</span> Verificar el nivel de señal
			</div>



													<div class="result">

														<div id="idindicador2" class="indicadoEstado"></div> 	

													<span class="numberRe">Estado </span>

														<select name="resulitem2" id="resulitem2" class="custom-select custom-select-sm">
															<option value="">selecionar</option>
															<option value="Sin señal">Sin Señal</option>
															<option value="e">e</option>
															<option value="h">h</option>
															<option value="2G">2G</option>
															<option value="3G">3G</option>
															<option value="4G">4G</option>
															

														</select>


													</div>

</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">3.</span> Verificar configuración de APN.<span id="info3" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>

						
			<div  id="divinfo3" class="divocultoitem">	
							Claro: mtablet.comcel.com.co
							Tigo: mtablet.tigo.com
							Movistar: mtablet.movistar
			</div>
												
												<div class="result">	

												<div id="idindicador3" class="indicadoEstado"></div> 			

													<span class="numberRe">Estado </span>

														<select name="resulitem3" id="resulitem3"  class="custom-select custom-select-sm" >
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>

</div>
<div class="item">
			<div class="titleitem">
			<span class="numberRe">4.</span> Reinserción  de SIM
			</div>


													<div class="result">

													<div id="idindicador4" class="indicadoEstado"></div> 		

													<span class="numberRe">Estado </span>

														<select name="resulitem4" id="resulitem4" class="custom-select custom-select-sm">
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>



													</div>
</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">5.</span> Reiniciar dispositivo.
			</div>


													<div class="result">

													<div id="idindicador5" class="indicadoEstado"></div> 		

													<span class="numberRe">Estado </span>

														<select name="resulitem5" id="resulitem5" class="custom-select custom-select-sm">
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>
</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">6.</span> Verificar Hora y fecha
			</div>

								<div class="result">																		

											<div id="idindicador6" class="indicadoEstado"></div> 	
													<span class="numberRe">Estado </span>



														<select name="resulitem6" id="resulitem6"class="custom-select custom-select-sm" >
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>
</div>


<div class="item">
			<div class="titleitem">
			<span class="numberRe">7.</span> Versión de DED
			</div>

										<div class="result">	

											<div id="idindicador7" class="indicadoEstado"></div> 	

													<span class="numberRe">Estado </span>

														<select name="resulitem7" id="resulitem7" class="custom-select custom-select-sm">
															<option value="">selecionar</option>
															<option value="1.0">1.0</option>
															<option value="1.1">1.1</option>
															<option value="1.1.">1.1.</option>
															<option value="1.2">1.2</option>
															<option value="1.1.3">1.1.3</option>
															<option value="1.3.42">1.3.42</option>

														</select>


													</div>

</div>


<div class="item">
			<div class="titleitem">
			<span class="numberRe">8.</span> Verificación de tipo de red preferido 4G
			</div>

								<div class="result">	

								<div id="idindicador8" class="indicadoEstado"></div> 																		

													<span class="numberRe">Estado </span>

														<select name="resulitem8" id="resulitem8" class="custom-select custom-select-sm" >
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>



						</div>

</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">9.</span> Borrar Cache.
			</div>
				<div  id="divinfo9" class="divocultoitem">
						Borrar Cache en la ruta configuración/aplicaciones/Ded entrega de documentos.
				</div>

												
												<div class="result">

													<div id="idindicador9" class="indicadoEstado"></div> 	
													<span class="numberRe">Estado </span>

														<select name="resulitem9" id="resulitem9"  class="custom-select custom-select-sm" >
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>



</div>





<div class="item">
			<div class="titleitem">
			<span class="numberRe">11.</span> Realización de ping.<span id="info11" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>

					<div  id="divinfo11" class="divocultoitem">
						<li>Verificar que la IP se encuentre en segmento </li> 
						<li>Tigo 10.10.0.0/21</li>
						<li>Movistar 10.59.35.0/23</li>
						<li>Claro: 10.81.38.0/23 10.105.12.0/22</li>
				</div>

											<div class="result">

													<div id="idindicador11" class="indicadoEstado"></div> 	
													<span class="numberRe">Estado </span>

														<select name="resulitem11" id="resulitem11"  class="custom-select custom-select-sm" >
															<option value="">selecionar</option>
															<option value="1">Versión DED desactualizada</option>
															<option value="2">Ping exitoso</option>
															<option value="3">Ping Fallido</option>
															

														</select>


													</div>



</div>







<div class="item">
			<div class="titleitem">
			<span class="numberRe">12.</span> Verificación Wifi Desactivado y Uso de datos activo.
			</div>

								<div class="result">	

								<div id="idindicador12" class="indicadoEstado"></div> 																		

													<span class="numberRe">Estado </span>

														<select name="resulitem12" id="resulitem12" class="custom-select custom-select-sm" >
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>



						</div>

</div>







<div class="item">
			<div class="titleitem">
			<span class="numberRe">13.</span> Estado final de la Mtablet
			</div>


											<div class="result">
											<div id="idindicadorfin" class="indicadoEstado"></div> 		

													<span class="numberRe">Estado </span>

														<select name="resulitemst" id="resulitemst"required  class="custom-select custom-select-sm">
															<option value="">selecionar</option>
															<option value="0">Solucionado</option>
															<option value="1">Con falla</option>

														</select>


</div>													</div>






<div class="alert alert-warning" role="alert">
  Nota: para casos escalados a UNE solicitar numeros de contacto
</div>


<div>
<button class="btn btnone">Generar plantilla</button>

</div>

</form>






<?php

	$chMtabletaSim = new Controlador_checklist();
	$chMtabletaSim -> chmtabletSimControlador();


?>


	


		</div>
	</div>
</div>
