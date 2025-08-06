
Vue.createApp({

  data() {
    return {
      usuario: '',
      password: '',
      error: ''
    };
  },
  methods: {
    async enviarFormulario() {
      if (!this.usuario || !this.password) {
        this.error = "Todos los campos son obligatorios";
        return;
      }

      try {
        const res = await fetch("Vista/ajax/ajax_login.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            nameUserLogin: this.usuario,
            namePasswordLogin: this.password,
          }),
        });

   
        
        const data = await res.json();
        console.group(data)

        if (data.estado===true) {
          window.location.href = "index.php?ir=interfaz";
        } else {
          this.error = data.mensaje;
        }

      } catch (err) {
        console.error(err);
        this.error = "Error de conexión con el servidor.";
      }
    }
  }
}).mount('#loginApp');
