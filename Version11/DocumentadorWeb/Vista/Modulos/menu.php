<?php
  $randon=rand(1,15); //versión de archivos JS y css
 ?>
<div class="sectionmenu fst-italic">


<button class="buttonmenu menu__icon mt-3" data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="offcanvasExample">
  <span></span>
  <span></span>
  <span></span>
</button>


</div>

<div class="offcanvas offcanvas-start fw-lighter text-break" tabindex="-1" id="menu" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
  <a href="javascript:ventanaSecundaria11('index.php?ir=miperfil')">
    <img src="Vista/Imagenes/perfil.png" class="imagenperfilmenu" alt=""></a> <span class="px-3">Mi perfil</span> 
    <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   




  
  <ul class="list-group">
  
  
  <li class="list-group-item itemmenu">

    <a href="javascript:ventanaSecundaria2('index.php?ir=psw')">

            <div style="width: 100%; height:100;">
              <i class="bi bi-bag-plus-fill"></i>
                <spam style="margin-left:8px;";>Contraseñas</spam>
            </div>
        </a>
    </li>

    <li class="list-group-item itemmenu">

        <a href="javascript:ventanaSecundaria3('index.php?ir=cmd')">
            <div style="width: 100%;">
            <i class="bi bi-terminal-fill"></i>
            <spam style="margin-left:8px;";>Comandos</spam>
            </div>
        </a>
    </li>

    
    <li class="list-group-item itemmenu">

        <a href="javascript:ventanaSecundaria4('index.php?ir=scp')">
            <div style="width: 100%;">
            <i class="bi bi-list-nested"></i>

            <spam style="margin-left:8px;";>Script</spam>
            </div>
        </a>
    </li>


    


    <li class="list-group-item itemmenu">

        <a href="javascript:ventanaSecundaria5('index.php?ir=utili')">
    
            <div style="width: 100%;">
            <i class="bi bi-tools"></i>
            <spam style="margin-left:8px;";>Utilidades</spam>

            </div>
        </a>
    </li>




    <li class="list-group-item itemmenu">
        <a href="javascript:ventanaSecundaria6('index.php?ir=info')">
            <div style="width: 100%;">
            <i class="bi bi-info-circle-fill"></i>
            <spam style="margin-left:8px;";>Información</spam>
            </div>
        </a>
    </li>




    <li class="list-group-item itemmenu">
         <a href="javascript:ventanaSecundaria7('index.php?ir=directorio')">
    
            <div style="width: 100%;">
            <i class="bi bi-telephone-inbound-fill"></i>
            <spam style="margin-left:8px;";>Directorio</spam>
            </div>
        </a>
    </li>

    <li class="list-group-item itemmenu">
    <a href="javascript:ventanaSecundaria8('index.php?ir=checklist')">    
    
            <div style="width: 100%;">
            <i class="bi bi-list-check"></i>
            <spam style="margin-left:8px;";>CheckList</spam>
            </div>
        </a>
    </li>
    
<!--  
    <li class="list-group-item itemmenu">
    <a onClick="window.open(this.href, this.target, 'width=600,height=870'); return false;" target="_blank" href="index.php?ir=postularplanti">
            <div style="width: 100%;">
            <i class="bi bi-list-check"></i>
            <spam style="margin-left:8px;";>Postular plantilla</spam>
            </div>
        </a>
    </li>


    <li class="list-group-item itemmenu">
    <a onClick="btnconfirmarmsgAccesorios(0);">
            <div style="width: 100%;">
            <i class="bi bi-list-check"></i>
            <spam style="margin-left:8px;";>Accesorios</spam>
            </div>
        </a>
    </li>
    
    -->
    


    <li class="list-group-item itemmenu">
        <a  href="index.php?ir=salir">
            <div style="width: 100%;">
            <i class="bi bi-box-arrow-left"></i>
            <spam style="margin-left:8px;";>Salir</spam>
            </div>
        </a>
    </li>

    





  
</ul>


<div class="imgmenu mt-3 px-4">


<img src="Vista/imagenes/Imgmenu/imagenmenu<?php echo $randon?>.png?v=<?php echo $randon?>" class="img-fluid mt-3" alt="">

</div>





  </div>
</div>

















