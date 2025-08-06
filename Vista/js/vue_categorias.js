Vue.createApp({
  data() {
    return {
          categorias: [],
      subcategorias: [],
      sub_subcategoria: [],
      categoriaSeleccionada: '',
      subcategoriaSeleccionada: '',
      sub_subcategoriaSeleccionada: '',
      estadoSubcategoria: '1' // 🔹 Aquí defines la variable
    };
  },
  mounted() {
    fetch('Vista/ajax/ajax_categorias.php')
    
      .then(res => res.json())
      .then(data => {
        this.categorias = data;
        console.log("Categorias recibidas:", data); //
      })
      .catch(err => console.error("Error cargando categorías:", err));
  },  
  methods: {
 cargarSubcategorias() {
      this.subcategorias = []; // limpiar antes de cargar nuevas
      this.subcategoriaSeleccionada = ''; // 🔹 Resetear la selección
      if (this.categoriaSeleccionada === '') return;

      categoriaSeleccionada =
              fetch('Vista/ajax/ajax_categoriasSub.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
              id_categoria: this.categoriaSeleccionada,
              estadoSubcategoria: this.estadoSubcategoria
            })
          })
          .then(res => res.json())
          .then(data => {
            this.subcategorias = data;
            console.log("Subcategorías recibidas:", data);
          })
        .catch(err => console.error("Error cargando subcategorías:", err));
    },



 cargarSub_subcategorias() {
      this.sub_subcategoria = []; // limpiar antes de cargar nuevas
      this.sub_subcategoriaSeleccionada = ''; // 🔹 Resetear la selección
      if (!this.subcategoriaSeleccionada) return;

      subcategoriaSeleccionada =
              fetch('Vista/ajax/ajax_categoriasSub_sub.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
              id_subcategoria: this.subcategoriaSeleccionada,
              estadoSubcategoria: this.estadoSubcategoria
            })
          })
          .then(res => res.json())
          .then(data => {
            this.sub_subcategoria = data;
            console.log("Sub_Subcategorías recibidas:", data);
          })
        .catch(err => console.error("Error cargando subcategorías:", err));
    }





  }
}).mount('#categoriasApp');



