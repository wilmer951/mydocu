<?php include "controlsesion.php";  ?>



<script>




</script>

<div class="divventanaemergente">
  <div class="card">
    <div class="card-body">

            
	<div class="row mb">

					<div class="col-10">
						<h5>Check EIS</h5>
					</div>
					<div class="col-2">
					<a class="btn btn-sm btnone" href="index.php?ir=checklist">volver</a>
					</div>
	</div>
			
	












			


			




<hr class="mb-3 mt-3">









<form  onsubmit="return false;"  id="fomrcheckEis" >




		<div class="row mt-3">
				<div class="col-5 text-center py-3 px-5">
										

														<div class="mb-5">
										

																	<div class="inputbox">
																						<input type="text" id="checEISip" required="required">
																						<span>* Direccion IP</span>
																						<i></i>
																		</div>
																										
																	
														
															</div>
			



												<div  class="mb-3">


																		<div class="row">

																				<div class="col-4"><div class="inputbox">
																						
																						<input type="text" id="checEISmodel"  required="required"  list="modeldesk">

																						<datalist id="modeldesk">
    <option value="HP ProDesk G2"></option>
    <option value="HP ProDesk G4"></option>
    <option value="HP ProDesk G5"></option>
    <option value="HP ProDesk G7"></option>
    <option value="HP ProDesk G9"></option>
    
</datalist>
																						
																						<span>* Modelo de equipo </span>
																						<i></i>
																					</div></div>
																				<div class="col-8">comando <span class="fw-bold fst-italic">"wmic csproduct"</span></div>
																		</div>																					
																			

																					
																		

																								
																				
																	
															</div>
															


															
																						



								</div>



								<div class="col-6 text-center">

												Selecciona un dispositivo




									
																				<div class="">
																		<div class="radio-tile-group">
																			<div class="input-container">
																			<input id="checkMTOP" class="radio-button" type="radio" name="radio" value="1">
																			<div class="radio-tile">
																				<div class="icon checkMTOP-icon">

																				</div>
																				<label for="checkMTOP" class="radio-tile-label">MTOP</label>
																			</div>
																			</div>

																			<div class="input-container">
																			<input id="checkMSO" class="radio-button" type="radio" name="radio" value="2">
																			<div class="radio-tile">
																				<div class="icon bike-icon">
																				
																				</div>
																				<label for="bike" class="radio-tile-label">MSO</label>
																			</div>
																			</div>

																			<div class="input-container">
																			<input id="checkCamara" class="radio-button " type="radio" name="radio" value="3">
																			<div class="radio-tile">
																				<div class="icon car-icon">
																				
																				</div>
																				<label for="drive" class="radio-tile-label">CAMARA</label>
																			</div>
																			</div>
																		</div>
																		</div>










								</div>



		</div>







		

		<div class="row  px-5">



				

<!--  DIV PARA MORPPHOTOP INICIO   -->

		<div class="card mt-3 divcheckMtop blur-in"  style="display:none; font-size:13px">
  			
		
		
		
				<div class="card-body">

			
										
				<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemtop1">
										
										<li class="list">
										Reinicio de servicios Licences y MorphoTop.
										</li>
							</div>









							<div class="form-check">
							<input class="form-check-input" type="checkbox"  id="itmemtop2">
										

									<li class="list">
										Reconexión de dispostivo.
										</li>
							</div>







							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemtop3">
										

										<li class="list">
										Eliminar en el administrador de dispositivos todo el hardware que no se encuentra conectado (estado gris).
										</li>
							</div>



							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemtop4">
										

										<li class="list">
										Revisar dispositivo este conectado en un puerto USB 3.0
										</li>
							</div>
									
							

							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemtop5">
										

										<li class="list">
										Revisar en el administrador de dispositivos que el MSO y Morpho top se visualice sin ningún tipo de error. 
										</li>
							</div>
										


							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemtop7">
										

										<li class="list">
										Validar  que la licencia se encuentre instalada en la aplicación "GUI" Multiprotect License Manager (sofware license) para estaciones windows 11
										</li>
							</div>
										


							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemtop8">
										
										<li class="list">
										Validar que el Mtop sea reconocido en la aplicación "GUI" Multiprotect License Manager (VERIF)
										</li>
							</div>


							<div>
								<textarea class="form-control"  id="itmemtop9" placeholder="Indique si realizo alguna acción adicional"></textarea>
							</div>


										







											
			
					</div><!-- FIN CARD  -->
	</div>



<!--  DIV PARA MORPPHOTOP FIN   -->















<!--  DIV PARA MSO INICIO   -->

<div class="card mt-3 divcheckMSO blur-in"  style="display:none; font-size:13px">
  			
		
		
		
			  <div class="card-body">

		  
									  
						
					  <div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemso1">
										

										<li class="list">
										Eliminar en el administrador de dispositivos todo el hardware que no se encuentra conectado (estado gris)
										</li>
							</div>


							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemso2">
										

										<li class="list">
										Revisar dispositivo este conectado
										</li>
							</div>


							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemso3">
										

										<li class="list">
										Revisar en el administrador de dispositivos que el MSO y Morpho top se visualice sin ningún tipo de error.
										</li>
							</div>


							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemso4">
										

										<li class="list">
											Validar  que el certificado "Certificate Entity SDI" se encuentre una sola vez instalado en la siguiente ubicación, "Entidades de certificacion raiz de confianza / Certificados "
										</li>
							</div>



							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmemso5">
										

										<li class="list">
										Ejecutar el patch 2.
										</li>
							</div>


						
							<div>
								<textarea class="form-control"  id="itmemoo7" placeholder="Indique si realizo alguna acción adicional"></textarea>
							</div>

			


				  </div><!-- FIN CARD  -->
  </div>



<!--  DIV PARA MSO FIN   -->

























<!--  DIV PARA CAMARA INICIO   -->

<div class="card mt-3 divcheckCamara blur-in"  style="display:none; font-size:13px">
  			
		
		
		
			  <div class="card-body">

		  
								
			  
							<div class="form-check">
														<input class="form-check-input" type="checkbox"  id="itmecam9">
														
														<li class="list">
														Reinstalar driver de camara.
													</li>
						</div>






		
					 <div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmecam1">
										
										<li class="list">
											Se debe validar la version del Google Chrome debe ser la 69 o la 89.
										</li>
							</div>


							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmecam2">
										<li class="list">
											Desconectar la cámara web del equipo.
										</li>
							</div>




							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmecam3">
										
										<li class="list">
											Eliminar en el administrador de dispositivos todo el hardware que no se encuentran conectado (estado gris).
										</li>
							</div>



							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmecam4">
										
										<li class="list">
										Reiniciar estación.
										</li>
							</div>



							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmecam5">
										
										<li class="list">
										Conectar la cámara web.
										</li>
							</div>



							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmecam6">
										
										<li class="list">
										Validar en el administrador de dispositivos que se haya instalado correctamente la cámara, Mtop, Mso.
										</li>
							</div>


							<div class="form-check">
										<input class="form-check-input" type="checkbox"  id="itmecam7">
										
										<li class="list">
										Si persiste la novedad se recomienda desinstalar manualmente los cots EVC y EVS según el caso, reiniciar estación y volver a instalar desde el EIS_install según tipo de estación.
										</li>
							</div>



							<div>
								<textarea class="form-control"  id="itmecam8" placeholder="Indique si realizo alguna acción adicional"></textarea>
							</div>







						

		  
				  </div><!-- FIN CARD  -->
  </div>




<!--  DIV PARA CAMARA FIN   -->




<div id="inputSolucion" class="card-body" style="display:none;">

		<div class="row">
				<div class="col">
							<label class="material-checkbox mt-3 mb-3">
														<input type="checkbox" id="btnchecksoluplanEis">
														<span  class="checkmark2"></span>
														<span id="labelchecksolucion" >Sin solución.</span> 
							</label>

					</div>





		</div>	
		
		





					<div class="row mt-3" id="divocultocontacto">

								<div class="col">

																<div class="inputbox">
																						<input type="text" id="checEISCel" required="required">
																						<span>* Celular de contacto</span>
																						<i></i>
																</div>
																				
									
								</div>

							


					</div>



							



<dic class="row">

<div class="col">




<div class="alert alert-success mensajealertaexitoso text-center" id="mensajealertaexitoso" role="alert">
			Se genero la plantilla exitosamente..
			</div>



</div>
</dic>










<div class="row">



				<div class="col-6">

											<div class="mt-3">

													<button id="btngenearPlatCheckEis" type="submit" class="button3">Generar plantilla</button>
													<button id="btnlimpiarPlatCheckEis" type="submit" class="button3">limpiar formulario</button>
											</div>



						</div>

						</form>








	<div class="col-6 mt">

		
	<div class="loader" id="idloader"></div>







	<div class="divocultocopyplantilla" id="divocultocopyplantilla">







										
			
				<div class="divbtncopopyplantilla" id="divbtncopopyplantilla">
				<img id="copiarplantilla" src="Vista/Imagenes/iconos/icon-copy.png" alt="" class="img-fluid imgcopycheck">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
															Ver plantilla
															</button>

				</div>









	
		
							


																															<!-- Button trigger modal -->
															
											

		
	
	


</div>
























	</div>

			



</div>







































<hr>
								
			
	










		





		</div>
	</div>
</div>



















				<!-- Modal -->
				<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
																				<div class="modal-dialog modal-lg modal-dialog-scrollable"">
																					<div class="modal-content">
																					<div class="modal-header">
																						<h5 class="modal-title" id="staticBackdropLabel">Plantilla generada</h5>
																						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																					</div>
																					<div class="modal-bod py-5 px-5">


																					

																					
																		
																					<div id="divcopicheckPlantilla" class="divcopicheckPlantilla "></div>
																		

																					

																					</div>
																					<div class="modal-footer">
																						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																						
																					</div>
																					</div>
																				</div>
																				</div>
																					<!-- Modal -->
																													







<script src="Vista/js/copy.js"></script>


