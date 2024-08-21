
<?php


        $servidor = "mysql:dbname=prueba_conexion;host=localhost";
        $usuario = "root";
        $password = "";
        
        $con = new PDO($servidor, $usuario, $password);
        
        if ($con) {
            echo "<div class='notification success'>Conexión exitosa hacia la base de datos</div>";
        } else {
            echo "<div class='notification error'>La conexión hacia la base de datos ha fallado</div>";
        }
        
        ?>
        
        <style>
        .notification {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #fff;
            text-align: center;
        }
        
        .success {
            background-color: #4CAF50; /* Verde para éxito */
        }
        
        .error {
            background-color: #f44336; /* Rojo para error */
        }
        </style>
