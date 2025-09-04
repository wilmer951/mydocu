<!--  DIV ANUL SERIALES  -->



<div class="anullserial" id="anullserial" style="display:none;">


<div class="card mt-5 mb-3">
  <div class="card-header">Generar consulta de seriales terminados</div>
  <div class="card-body">
  <div class="row">

  <div class="textareaoculto"><textarea  id="queryconestado"></textarea></div>

      <div class="col-4">
      <input type="text" class="form-control" name="conserialt" id="conserialt" maxlength="3" placeholder="codigo oficina">
      </div>
      

      <div class="col-1">
      <button  id="btnconserialt" type="submit" class="btn btn-sm  btntwo">GO</button>
        </div>

          <div class="col-1">
          <button id="btncopycons" id="copy" onclick="CopyToClipboard('queryconestado');" class="btn btn-sm btnone" style="display:none;">Copy</button>
          </div>
    </div>


      </div>
    </div>
  
  







  
  <div class="card mb-3">
  <div class="card-header">Generar borrado de seriales terminados</div>
  <div class="card-body">

  <div class="row">

  <div class="textareaoculto"><textarea  id="querydeleteserial"></textarea></div>

      <div class="col-4">
      <input type="text" class="form-control" id="delserialt" name="delserialt" maxlength="3" placeholder="codigo oficina">
      </div>
      

      <div class="col-1">
      <button  id="btndelserialt" type="submit" class="btn btn-sm btntwo">GO</button>
        </div>

          <div class="col-1">
          <button id="btncopydelete" class="btn btn-sm btnone" onclick="CopyToClipboard('querydeleteserial');" style="display:none;">Copy</button>
          </div>
    </div>

      </div>
    </div>
  

    <div class="card mb-3">
  <div class="card-header">Generar consulta de seriales</div>
  <div class="card-body">

  <div class="textareaoculto"><textarea  id="queryconcupo"></textarea></div>

  <div class="row">

  <div class="textareaoculto"><textarea  id="querydeleteserial"></textarea></div>

      <div class="col-3">
      <input type="text" class="form-control" id="codoficinacon" name="codoficinacon" maxlength="3" placeholder="codigo oficina">
      </div>
      

      <div class="col-2">
                  <select class="form-select" id="tiporcxcon">
                <option value="N">N</option>
                <option value="M">M</option>
                <option value="D">D</option>
              </select>
        </div>

        <div class="col-1">
        <button  id="btnquerycon" type="submit" class="btn btn-sm btntwo">GO</button>
        </div>

          <div class="col-1">
          <button id="btncopycon" class="btn btn-sm btnone" onclick="CopyToClipboard('queryconcupo');" style="display:none;">Copy</button>
          </div>
    </div>

  <div class="row mt-1">

  <div class="col-12">
  <textarea id="listcuposcon" class="mt-1 form-control" rows="3" placeholder="0012345678,0098765321"></textarea>
  </div>
  </div>


      </div>
    </div>






    <div class="card mb-3">
  <div class="card-header">Generar insesión de cupos de seriales</div>
  <div class="card-body">

  <div class="textareaoculto"><textarea  id="queryinsercupo"></textarea></div>

  <div class="row">

  

      <div class="col-4">
      <input type="text" class="form-control" id="codoficina" name="codoficina" maxlength="3" placeholder="codigo oficina">
      </div>
      
      <div class="col-3">
        <input type="text" class="form-control" id="fechaasig" name="fechaasig" maxlength="10" placeholder="AAA-MM-DD">
      </div>
      
      <div class="col-2">
                  <select id="tiporcx" class="form-select">
                <option value="N">N</option>
                <option value="M">M</option>
                <option value="D">D</option>
              </select>
        </div>

        <div class="col-1">
        <button  id="btnqueryinsert" type="submit" class="btn btn-sm btntwo">GO</button>
        </div>

          <div class="col-1">
          <button id="btncopyinsert" class="btn btn-sm btnone" onclick="CopyToClipboard('queryinsercupo');" style="display:none;">copy</button>
          </div>
    </div>

  <div class="row mt-1">

  <div class="col-12">
  <textarea id="listcupos" class="mt-1 form-control" rows="3"  placeholder="0012345678,0098765321"></textarea>
  </div>
  </div>


      </div>
    </div>










    





</div><!-- Cierre div  anulserial-->