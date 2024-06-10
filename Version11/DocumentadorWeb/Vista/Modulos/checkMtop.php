<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">
  <div class="card">
    <div class="card-body">

            
	<div class="row">

					<div class="col-10">
						<h5>Check MorphoTOP</h5>
					</div>
					<div class="col-2">
					<a class="btn btn-sm btnone" href="index.php?ir=checklist">volver</a>
					</div>
	</div>
							




	<form class="mt-4"  method="post">
			
			<input type="hidden" name="resulmtop" value="1">
			
		<div class="item">
			<div class="titleitem">
			<span class="numberRe">1.</span> Tipo de Documento.
			</div>
				

												<div class="result">	
													<div id="idindicador1" class="indicadoEstado"></div> 

														
															<select name="tipdoc" id="resulitem1" class="custom-select custom-select-sm">
													
																<option value="">selecionar</option>
																<option value="Primera vez TI">Primera vez TI</option>
																<option value="Renovación TI">Renovación TI</option>
																<option value="Rectificación TI">Rectificación TI</option>
																<option value="Duplicado TI">Duplicado TI</option>
																<option value="Primera vez CC">Primera vez CC</option>
																<option value="Renovación CC">Renovación CC</option>
																<option value="Rectificación CC">Rectificación CC</option>
																<option value="Duplicado CC">Duplicado CC</option>

														</select>

												</div>
</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">2.</span> NUIP.
			</div>
		


						<div class="result">

							
							

														<input class="form-control form-control-sm" type="text" placeholder="Numero de NUIP" name="nuip" required>
									
														
														


													</div>

</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">3.</span>Verificación Hardware <span id="info3" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>
				<div  id="divinfo3" class="divocultoitem">
						<li>Verificar conexiones de cable.</li>
						<li>Verificar administrador de dispositivos. <b>(captura)</b></li>
			

				</div>





													<div class="result">

														<div id="idindicador3" class="indicadoEstado"></div> 

													<span class="numberRe">Estado </span>

														<select name="resulitem3" id="resulitem3"  class="custom-select custom-select-sm" required>
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>
</div>


<div class="item">
			<div class="titleitem">
			<span class="numberRe">4.</span>Verificación Software. <span id="info4" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>

			<div  id="divinfo4" class="divocultoitem">
						
						<li>Reinicio de servicio SagemLicence service. <b>(captura)</b></li>
						<li>Verificación de licencia SagemSecurite_licence_manager. <b>(captura)</b></li>
						<li>Eliminación de temporales.</li>
						<li>Ejecución de Test MorphoTop con huellas afectado. <b>(captura)</b></li>
						<li>Ejecución de Test MorphoTop con huellas otra persona. <b>(captura)</b></li>


				</div>

												
												<div class="result">
													<div id="idindicador4" class="indicadoEstado"></div> 

															<span class="numberRe">Estado </span>

														<select name="resulitem4" id="resulitem4"  class="custom-select custom-select-sm" required>
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>
</div>

<div class="item">
			<div class="titleitem">
			<span class="numberRe">5.</span> Verificación de procedimiento.<span id="info5" class="info"><img src="Vista/Imagenes/info.png"></span>
			</div>

						<div  id="divinfo5" class="divocultoitem">
						
						<li>Limpieza de manos.</li>
						<li>Limpieza de MorphoTop.</li>
						<li>Verificación correcta colocación de dedos del afectado. <b>(captura)</b></li>
						<li>Error generado <b>(captura)</b></li>
						
						
						


				</div>



													<div class="result">
													<div id="idindicador5" class="indicadoEstado"></div> 	

													<span class="numberRe">Estado </span>

														<select name="resulitem5"  id="resulitem5" class="custom-select custom-select-sm" required>
															<option value="">selecionar</option>
															<option value="1">Verificado</option>
															

														</select>


													</div>
</div>


	
<div class="alert alert-warning" role="alert">
  <h6>Importante adjuntar adicionalmente las siguientes imagenes.</h6>
  <li>Fotografia ciudadano generando captura de huella en dispositivo MorphoTop.</li>
  </div>



<div>
	
<button class="btn btnone">Generar plantilla</button>
</div>

</form>




<?php

	$chmtop = new Controlador_checklist();
	$chmtop -> chmMtopcontrolador();


?>


		</div>
	</div>
</div>

