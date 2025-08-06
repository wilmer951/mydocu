
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container-fluid">
    
    <!-- Marca (Inicio) -->
    <a class="navbar-brand px-3" href="index.php?ir=interfaz">Inicio</a>

    <!-- Botón de colapso para móviles -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenido del navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Espacio izquierdo (puedes agregar enlaces aquí) -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Vacío por ahora -->
      </ul>

      <!-- Usuario y salir a la derecha -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <?php if (isset($_SESSION['usuario'])): ?>
          <li class="nav-item d-flex align-items-center">
            <span class="nav-link text-white">
              👤 <?php echo htmlspecialchars($_SESSION['usuario']); ?>
            </span>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white"  href="index.php?ir=salir">Salir</a>
          </li>
        <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>
