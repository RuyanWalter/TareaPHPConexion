<?php
$inc = include("ConexionPDO2.php");
if($inc){
    $consulta = "SELECT * FROM datos";

    //Ejecutar la consulta con PDO
    $resultado = $con->query($consulta);
    
    if($resultado){
        while($row=$resultado->fetch(PDO::FETCH_ASSOC)){
            $id = $row['id'];
            $nombre = $row['nombre'];
            $email = $row['email'];
            $fecha_reg = $row['fecha_reg'];
            ?>
            <div>
                <h2><?php echo $nombre; ?></h2>
            </div>
                <p>
                    <b>ID:</b> <?php echo $id; ?> <br>
                    <b>Email:</b> <?php echo $email; ?> <br>
                    <b>Fecha Registro:</b> <?php echo $fecha_reg; ?> <br>
                    <a href="modificar.php?id=<?php echo $id; ?>">Modificar</a> |
                    <a href="eliminar.php?id=<?php echo $id; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a>
                </p>

            <?php
        }
        
    }else {
        echo "Error al ejecutar la consulta";
    }


}
?>