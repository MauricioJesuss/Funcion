<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <!-- Enlace al archivo CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Productos</h2>
  <br>
  <form>
    <div class="form-group">
      <label for="clave">Clave:</label>
      <input type="text" class="form-control" id="clave" name="clave" required>
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="fechadecaducidad">Fecha de Caducidad:</label>
      <input type="date" class="form-control" id="fechadecaducidad" name="fechadecaducidad" required>
    </div>
    <div class="form-group">
        <label for="existencia">Existencia:</label>
        <input type="text" class="form-control" id="existencia" name="Existencia" required>     
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
</div>

<!-- Enlace al archivo JavaScript de Bootstrap (opcional, pero necesario para algunas funcionalidades) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>             