<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Talavera Collection Store</title>
    </head>
    <body>
        <header class= "info">
            <h1 class="title">Talavera Collection Store</h1>
            <h2>Inventory management</h2>
            <div>
                <p>Iván García y Joel Ortiz</p>
                <p>Curso: 2º DAW</p>
                <p>Módulo: Desarrollo web en entorno servidor (DWES)</p>
            </div>
        </header>

          <?php
        $cadena_conexion = 'mysql:dbname=ejemplo;host=127.0.0.1';
        $usuario = 'joel';
        $clave = 'joel';

        try {
            //Se crea la conexión con la base de datos
            $bd = new PDO($cadena_conexion, $usuario, $clave);
            // Opcional en MySQL, dependiendo del controlador 
            // de base de datos puede ser obligatorio
            //$bd->closeCursor();
            echo "Conexión establecida";
            //Se cierra la conexión
            $bd = null;
        } catch (Exception $e) {
            echo "Error con la base de datos: " . $e->getMessage();
        }
        ?>
        <div>
          
        </div>                       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
