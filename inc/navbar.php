

<nav class="navbar navbar-expand-lg navbar-dark  px-3">
  <a class="navbar-brand d-flex align-items-center" href="/index.php">
    <img src="./img/Pro.png" alt="Repair Unlock" height="40">
  </a>

  <!-- Botón hamburguesa -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Contenido del navbar -->
  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>

      <!-- Dropdown Registro  //dropdown-toggle >-->
      <li class="nav-item dropdown">
        <a class="nav-link  " href="#" id="registroDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Registro
        </a>
        <ul class="dropdown-menu" >
          <li><a class="dropdown-item" href="#">Registro de cliente</a></li>
          <li><a class="dropdown-item" href="#">Registro de servicio</a></li>
        </ul>
      </li>

      <li class="nav-item"><a class="nav-link " href="#">Factura</a></li>
    </ul>


    <!-- Perfil -->
    <div class="dropdown">
      <a class="d-flex align-items-center text-white text-decoration-none " href="#" id="perfilDropdown" role="button" data-bs-toggle="dropdown">
        <span class="me-2">Admin</span>
        <i class="bi bi-person-circle fs-4"></i>
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="perfilDropdown">
        <li><a class="dropdown-item" href="#">Editar perfil</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
      </ul>
    </div>
  </div>
</nav>
