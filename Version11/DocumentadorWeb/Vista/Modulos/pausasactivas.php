<!-- MODAL MENSAJES DE ALERTA -->
<div id="pausasactivasalert" class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
 
      <div class="modal-body">

        <div id="artialert" class="text-center">



              <form id=form></form>


                                <input type="hidden" id='idmsgpa' value="">

                                <div class="mb-4">
                                <h3 id="titlemsgpac"></h3>
                                </div>


                                <div class="mb-4">
                                <h6 id="msgmsgpac"></h6>
                                </div>

                                <div class="mb-3">
                                          <img id="imgmsgpac" class="img-fluid" src="" alt="" width="150px" >
                                        </div>


                                <div id="divcontenidomsg1">

                                        <div id="verinstructivo" class="mb-4">
                                        
                                        </div>

                                     



                                        <div class="mb-2">
                                      ¿Realizaste la actividad?
                                        </div>
                                        <div><button class="btn btn-success bt-sm"  id="btnconfiry"  data-bs-dismiss="modal" aria-label="Close" onclick="btnconfirmarmsgPausaActiva('1')">SI</button> <button class="btn btn-danger bt-sm"  data-bs-dismiss="modal" aria-label="Close" onclick="btnconfirmarmsgPausaActiva('0')">NO</button></div>

                                </div>

                            
                                <div id="divcontenidomsg2">
                                        
                                        <div><button onclick="btnconfirmarmsgAccesorios()" class="btn btn-success bt-sm" >Confimar</button> 
                                        <button class="btn btn-danger bt-sm"  data-bs-dismiss="modal" aria-label="Close" onclick="btnconfirmarmsgPausaActiva('0')">Posponer</button></div>

                                </div>






                    </div>


      </div>
      
    </div>
  </div>
</div>

