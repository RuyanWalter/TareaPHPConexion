
<?php

//Segunda Forma de conexion con la Extension PDO

$servidor = "mysql:dbname=prueba_conexion; host=localhost";
$usuario = "root";
$password = "";

$con = new PDO($servidor,$usuario,$password);

    if($con){
        echo"Conexión Exitosa hacia la Base de datos";
    }
    else
    {
        echo"La Conexión hacia la base de datos ha fallado";
    }
