<!DOCTYPE html>
<html lang="es">
<head>
  <?php require "../inc/head.php" ?>
  <title>Ventas - Productos</title>
  <link rel="stylesheet" href="../css/regist_client.css">
</head>
<body>

 <?php require "../inc/navbar.php"?>

  <div class="container  d-flex align-items-center justify-content-center ">
    <div class="registro-card w-100">
      <h3>Ventas de productos</h3>

      <form>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="nombre" class="form-label">Acticulo</label>
            <input type="text" id="nombre" class="form-control" placeholder="Cover">
          </div>
          <div class="col-md-6">
            <label for="celular" class="form-label">Descripcion</label>
            <input type="tel" id="celular" class="form-control" placeholder="iphone 13 pro azul">
          </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="apellido" class="form-label">Precio</label>
                <input type="text" id="apellido" class="form-control" placeholder="RD$850.90">
            </div>
            <div class="col-md-6">
                <label for="cedula" class="form-label">cliente</label>
                <input type="text" id="cedula" class="form-control" placeholder="Desactivado">
            </div>
        </div> 
      <hr class="my-6 border-top border-secondary w-100 mx-auto opacity-75">
        <div class="row mb-3 ">
                <div class="col-mb-6 ">
                    <label for="correo" class="form-label">Monto</label>
                    <input type="number" id="precio" class="form-control tmImput" placeholder="RD$850.90">
                </div>
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