<div class="container d-flex justify-content-center align-items-center vh-100" id="loginApp">
  <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%;">
    <h1 class="mb-4 text-center">Login</h1>

    <form @submit.prevent="enviarFormulario" novalidate>
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input
          id="usuario"
          type="text"
          v-model="usuario"
          class="form-control border-dark"
          required
          placeholder="Ingrese su usuario"
        >
      </div>

      <div class="mb-4">
        <label for="password" class="form-label">Contraseña</label>
        <input
          id="password"
          type="password"
          v-model="password"
          class="form-control border-dark"
          required
          placeholder="Ingrese su contraseña"
        >
      </div>

      <button type="submit" class="btn btn-dark w-100" :disabled="loading">Ingresar</button>

      <div v-if="error" class="alert alert-danger mt-3 text-center" role="alert">
        {{ error }}
      </div>

      <div v-if="loading" class="d-flex justify-content-center my-3">
        <div class="spinner-border" role="status" aria-hidden="true"></div>
        <span class="visually-hidden">Cargando...</span>
      </div>
    </form>
  </div>
</div>
