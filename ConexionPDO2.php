
<?php

//Segunda Forma de conexion con la Extension PDO

$servidor = "mysql:dbname=prueba_conexion; host=localhost";
$usuario = "root";
$password = "";

try{
    $con = new PDO($servidor,$usuario,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión Exitosa hacia la Base de datos";
} catch (PDOException $e) {
    echo "La Conexión hacia la base de datos ha fallado: " . $e->getMessage();
}
?>