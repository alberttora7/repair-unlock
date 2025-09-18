<!DOCTYPE html>
<html lang="en">
<head>
   <?php require "./inc/head.php"?>
    <title>Dashboard - Repair Unlock</title>
     <!--<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>-->
     
</head>
<body>
     <!-- Navbar -->
  <?php require "./inc/navbar.php"?>

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