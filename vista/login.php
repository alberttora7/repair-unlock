<!DOCTYPE html>
<html lang="es">
<head>
    <?php require "./inc/head.php"?>
  <title>Login - Repair Unlock</title>
</head>
<body>

  <!-- Logo -->
  <div class="logo text-center">
    <!-- Aquí colocas tu logo -->
    <img src="./img/pro.jpg" alt="Logo Repair Unlock">
    <h5 class="fw-bold mt-2">REPAIR UNLOCK</h5>
  </div>

  <!-- Caja de Login -->
  <div class="login-box mt-3">
    <h3>Inicio de sesión</h3>
    <form>
      <!-- Email -->
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
        <input type="email" class="form-control" placeholder="Correo electrónico">
      </div>
      <!-- Contraseña -->
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
        <input type="password" class="form-control" placeholder="Contraseña">
      </div>
      <!-- Botón -->
      <button type="submit" class="btn btn-login w-100">Iniciar sesión</button>
      <!-- Enlace -->
       <!--<a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>-->
    </form>
  </div>

  <?php require("./inc/footer.php")  ?>
</body>
</html>
