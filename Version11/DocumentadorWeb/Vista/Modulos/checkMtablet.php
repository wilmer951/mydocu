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

            
	<div class="row">

					<div class="col-10">
						<h5>Check Mtablet con adaptador de red</h5>
					</div>
					<div class="col-2">
					<a class="btn btn-sm btnone" href="index.php?ir=checklist">volver</a>
					</div>
	</div>
							




	<form class="mt-4"  method="post">
	
			
		<div class="item">
			<div class="titleitem">
			<span class="numberRe">1.</span> Verificar adaptador ethernet <span id="info1" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>
				<div  id="divinfo1" class="divocultoitem">
						Verificar que el adaptador ethernet este dando Link
				</div>


												<div class="result">	
													<div id="idindicador1" class="indicadoEstado"></div> 

														<span class="numberRe">Estado</span>
															<select name="colorlink" id="resulitem1" class="custom-select custom-select-sm">
													
																<option value="">selecionar</option>
																<option value="Verde">Verde</option>
																<option value="Ambar">Ambar</option>
																<option value="ninguno">Ninguno</option>

														</select>

												</div>
</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">2.</span> Verificar direccionamiento IP. <span id="info2" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>
			<div  id="divinfo2" class="divocultoitem">
						Realizar ping al direccionamiento IP correspondiente a la oficina indicado en el archivo Excel (MTabletLAN).
				</div>


						<div class="result">

							
							

														<input class="form-control form-control-sm" type="text" placeholder="Dirección IP" name="direIP" >
									<div id="idindicador2" class="indicadoEstado"></div> 
														
														<span class="numberRe">Resultado de PING </span>

														<select name="resulitem2"  id="resulitem2" class="custom-select custom-select-sm">
															<option value="">selecionar</option>
															<option value="exitoso">Exitoso</option>
															<option value="fallido">Fallido</option>

														</select>


													</div>

</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">3.</span>Verificar y compara que el direccionamiento IP <span id="info3" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>
				<div  id="divinfo3" class="divocultoitem">
						Verificar y comparar que el direccionamiento IP (IP Address, Netmask, Gateway address, DNS Address) estén bien ingresa
				</div>





													<div class="result">

														<div id="idindicador3" class="indicadoEstado"></div> 

													<span class="numberRe">Estado </span>

														<select name="resulitem3" id="resulitem3"  class="custom-select custom-select-sm">
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>
</div>


<div class="item">
			<div class="titleitem">
			<span class="numberRe">4.</span>Borrar Cache. <span id="info4" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>

			<div  id="divinfo4" class="divocultoitem">
						Borrar Cache en la ruta configuración/aplicaciones/Ded entrega de documentos.
				</div>

												
												<div class="result">
													<div id="idindicador4" class="indicadoEstado"></div> 

															<span class="numberRe">Estado </span>

														<select name="resulitem4" id="resulitem4"  class="custom-select custom-select-sm" >
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

														<select name="resulitem5"  id="resulitem5" class="custom-select custom-select-sm">
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

														<select name="resulitem6" id="resulitem6" class="custom-select custom-select-sm" >
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

														<select name="resulitem7"  id="resulitem7" class="custom-select custom-select-sm">
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
			<span class="numberRe">8.</span> Verificación Wifi Desactivado y que no cuenta con SIM insertada.
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
			<span class="numberRe">9.</span> Verificación de punto de red y cambio de cable.
			</div>

								<div class="result">	
								<div id="idindicador9" class="indicadoEstado"></div> 																	

													<span class="numberRe">Estado </span>

														<select name="resulitem9" id="resulitem9" class="custom-select custom-select-sm" >
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>

</div>



<div class="item">
			<div class="titleitem">
			<span class="numberRe">8.</span> Estado final de la Mtablet
			</div>


											<div class="result">
											<div id="idindicadorfin" class="indicadoEstado"></div> 	

													<span class="numberRe">Estado </span>

														<select name="resulitemst" id="resulitemst"   class="custom-select custom-select-sm" required>
															<option value="">selecionar</option>
															<option value="0">Solucionado</option>
															<option value="1">Con falla</option>

														</select>


													</div>


</div>
	
<div class="alert alert-warning" role="alert">
  Nota: para casos escalados a UNE solicitar numeros de contacto
</div>



<div>
	
<button class="btn btnone">Generar plantilla</button>
</div>

</form>






<?php

	$chMtabletadaptador = new Controlador_checklist();
	$chMtabletadaptador -> chmtabletAdaptadorcontrolador();


?>


		</div>
	</div>
</div>

