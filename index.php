<!DOCTYPE html>
<html lang="en">
<head>
   <?php require "./inc/head.php"?>
    <title>Dashboard - Repair Unlock</title>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <link rel="stylesheet" href="./css/dashbord.css">
</head>
<body>
     <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark px-3">
        <a class="navbar-brand d-flex align-items-center" href="/index.php">
            <img src="./img/Pro.png" alt="Repair Unlock">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Factura</a></li>
            </ul>
        </div>
        <div class="d-flex align-items-center text-white">
            <span class="me-2">Admin</span>
            <i class="bi bi-person-circle fs-4"></i>
        </div>
  </nav>

  <!-- Dashboard -->
  <div class="container mt-4">
    <div class="row g-4">
      <!-- Gráfico Circular -->
      <div class="col-md-6">
        <div class="chart-container">
          <canvas id="pieChart"></canvas>
          <h6>Servicio más Recurrente</h6>
        </div>
      </div>
      <!-- Gráfico de Barras -->
      <div class="col-md-6">
        <div class="chart-container">
          <canvas id="barChart"></canvas>
          <h6>Rendimiento del mes</h6>
        </div>
      </div>
    </div>
  </div>

<?php require("./inc/footer.php")  ?>
</body>
</html>