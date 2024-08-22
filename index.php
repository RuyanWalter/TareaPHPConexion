<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <!-- Formulario de Inserción -->
    <div class="form-container">
        <?php
        include("insertar.php"); // Incluye el formulario de inserción
        ?>
    </div>

    <!-- Mostrar Registros -->
    <div class="table-container">
        <?php
        include("mostrar.php"); // Incluye el archivo que muestra los registros
        ?>
    </div>
</div>
</body>
</html>
