<?php

//Primera Forma de conexion con la Extension PDO

$servidor = "localhost";
$usuario = "root";
$password = "";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=prueba_conexion",$usuario,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión realizada con exito";
}
catch(PDOException $e){
    echo"La Conexión ha fallado: ". $e->getMessage();
}
$conexion = null;
