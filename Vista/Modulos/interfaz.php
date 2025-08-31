<?php include "controlsesion.php";  ?>
<?php include "menu.php";  ?>


<div class="container"><!-- INICIO CONTAINER -->
  Bienvenidos.

  <div class="row" id="categoriasApp"> <!-- INICIO DIV APP -->

    <div class="col-4">  
      <!-- Select de CATEGORIAS -->
      <label for="categoria" class="form-label">Categoría</label>
      <select
        id="categoria"
        class="form-select"
        v-model="categoriaSeleccionada"
        @change="cargarSubcategorias"
      >
        <option disabled value="">Seleccione una categoría</option>
        <option 
          v-for="cat in categorias" 
          :key="cat.id_categoria" 
          :value="cat.id_categoria"
        >
          {{ cat.nombre_categoria }}
        </option>
      </select>
    </div>

    <div class="col-4">
      <!-- Select Subcategoría -->
      <label for="subcategoria" class="form-label">Subcategoría</label>
      <select
        id="subcategoria"
        class="form-select"
        v-model="subcategoriaSeleccionada"
        :disabled="subcategorias.length === 0"
         @change="cargarSub_subcategorias"
      >
        <option disabled value="">Seleccione una subcategoría</option>
        <option 
          v-for="sub in subcategorias" 
          :key="sub.id_subcategoria" 
          :value="sub.id_subcategoria"
        >
          {{ sub.nombre_subcategoria }}
        </option>
      </select>
    </div>

    <div class="col-4">

            <!-- Select SUBSUBCATEGORIA -->
        <label for="sub_subcategoria" class="form-label">Subcategoría</label>
        <select
          id="sub_subcategoria"
          class="form-select"
          v-model="sub_subcategoriaSeleccionada"
          :disabled="sub_subcategoria.length === 0"
        >
          <option disabled value="">Seleccione una subcategoría</option>
          <option 
            v-for="subsub  in sub_subcategoria" 
            :key="subsub.id_sub_subcategoria" 
            :value="subsub.id_subsubcategoria"
          >
             {{ subsub.nombre_subcategoria }}
          </option>
        </select>
      </div>


    </div>

  </div><!-- FIN DIV APP -->
</div><!-- FIN  CONTAINER -->
