<!DOCTYPE html>
<html lang="es">
<head>
  <?php require "../inc/head.php" ?>
  <title>Registro de Cliente</title>
  <link rel="stylesheet" href="../css/regist_client.css">
</head>
<body>

 <?php require "../inc/navbar.php"?>

  <div class="container  d-flex align-items-center justify-content-center ">
    <div class="registro-card w-100">
      <h3>Registro de cliente</h3>

      <form>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" class="form-control" placeholder="EJ.Anastasia">
          </div>
          <div class="col-md-6">
            <label for="celular" class="form-label">Apellido</label>
            <input type="tel" id="celular" class="form-control" placeholder="Ej.Rodriguez">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="apellido" class="form-label">Cédula</label>
            <input type="text" id="apellido" class="form-control" placeholder="402-0014040-8">
          </div>
          <div class="col-md-6">
            <label for="cedula" class="form-label">Celular</label>
            <input type="text" id="cedula" class="form-control" placeholder="000-000-0000">
          </div>
        </div>

        <div class="mb-4">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" id="correo" class="form-control" placeholder="correo@email.com">
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-registrar px-4 py-2">Registrar</button>
        </div>
      </form>
    </div>
  </div>

 <?php require "../inc/footer.php"?>
</body>
</html>
