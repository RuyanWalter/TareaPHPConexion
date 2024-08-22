<?php
$inc = include("ConexionPDO2.php");

if(!$_POST){
    ?>

<form Method="post" action="insertar.php">
    Nombre: <input type="text" name="nombre">
    <br>
    <br>
    Email: <input type="text" name="email">
    <br>
    <br>
    Fecha: <input type="date" name="fecha_reg">
    <br>
    <br>
    <input type="submit" value="Enviar">

</form>
<?php
} else {

    try {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $fecha_reg = $_POST["fecha_reg"];


    $ssql = "INSERT INTO datos (nombre,email,fecha_reg)values(:nombre, :email, :fecha_reg)";
    $respuesta = $con->prepare($ssql);

    $respuesta->bindParam(':nombre',$nombre);
    $respuesta->bindParam(':email',$email);
    $respuesta->bindParam(':fecha_reg',$fecha_reg);
    
    if($respuesta->execute()){
        echo"Sentencia de insercion correcta";

    }else{
        echo"No inserte nada";
    }
}catch(PDOException $e){
    echo "Error:" . $e->getMessage();
}


}
?>