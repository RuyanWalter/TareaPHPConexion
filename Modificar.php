<?php
$inc = include("ConexionPDO2.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM datos WHERE id = :id";
    $stmt = $con->prepare($consulta);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $nombre = $row['nombre'];
        $email = $row['email'];
        $fecha_reg = $row['fecha_reg'];
    }
}

if ($_POST) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha_reg = $_POST['fecha_reg'];

    $consulta = "UPDATE datos SET nombre = :nombre, email = :email, fecha_reg = :fecha_reg WHERE id = :id";
    $stmt = $con->prepare($consulta);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':fecha_reg', $fecha_reg);

    if ($stmt->execute()) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro";
    }
}
?>

<form Method="post" action="modificar.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>">
    <br><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <br><br>
    Fecha: <input type="date" name="fecha_reg" value="<?php echo $fecha_reg; ?>">
    <br><br>
    <input type="submit" value="Actualizar">
</form>
