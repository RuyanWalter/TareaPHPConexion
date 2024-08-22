
<?php
        $servidor = "mysql:dbname=prueba_conexion;host=localhost";
        $usuario = "root";
        $password = "";
        
        $con = new PDO($servidor, $usuario, $password);
        
        if ($con) {
            echo "Conexión exitosa hacia la base de datos";
        } else {
            echo "La conexión hacia la base de datos ha fallado";
        }
        ?>