<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'conexion.php';
?>
<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Personajes de One Piece</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
</head>
<body class="bg-dark text-white">

  <div class="container mt-5">
    <h1 class="text-center mb-4">👒 Personajes de One Piece</h1>
    <div class="row">

    <?php
      $sql = "SELECT * FROM personajes";
      $resultado = $conexion->query($sql);

      while($fila = $resultado->fetch_assoc()) {
        echo '<div class="col-md-4 mb-4">
                <div class="card text-white bg-secondary h-100">
                  <img src="'.$fila["imagen"].'" class="card-img-top" alt="'.$fila["nombre"].'">
                  <div class="card-body">
                    <h5 class="card-title">'.$fila["nombre"].'</h5>
                    <button class="btn btn-warning btn-sm toggle-info">Ver descripción</button>
                    <p class="card-text mt-2 descripcion" style="display:none;">'.$fila["descripcion"].'</p>
                  </div>
                </div>
              </div>';
      }
    ?>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
