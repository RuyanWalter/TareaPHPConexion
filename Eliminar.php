<?php
$inc = include("ConexionPDO2.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $consulta = "DELETE FROM datos WHERE id = :id";
    $stmt = $con->prepare($consulta);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro";
    }
}
?>
