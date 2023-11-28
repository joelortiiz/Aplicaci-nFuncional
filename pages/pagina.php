<?php
//require_once('../functions/dbConnection.php');
require '../files/functions.php';

$user = 'joel';
if (isset($user)) {
    $sql = "SELECT Nombreobjeto, Estadoobjeto, Marca, Stock, Anio, Comentario, Codalmacen from objeto where ''";
    $inventarios = selectInventarios($bd, $sql);
}$bd = null;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css">
        <title>Página</title>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once('../functions/dbConnection.php');
            //codificamos
            $nombre = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);

            // Buscamos el usuario en la base de datos
            $checkUser = $db->prepare("SELECT codusuario, Nomusuario, Contraseñausuario FROM usuario WHERE Nomusuario = ? AND Contraseñausuario = ?");
            $checkUser->execute([$nombre, $password]);

            $count = $checkUser->rowCount();

            if ($count > 0) {
                // echo 'bien';
                setcookie("usuario", $_POST["username"], time() + 3600 * 24, "/");
                //Hacer cookie con usuario
                //inicio de la sesión.
                session_start();
                $_SESSION['name'] = $nombre;
                header('Location: ../functions/session_validate.php');
                ?>

                <div class="container d-flex justify-content-center align-items-center flex-column">
                    <header class="d-flex flex-column">
                        <h1>
                            Bienvenido a tus inventarios, //Usuario
                        </h1>
                        <?php
                        setlocale(LC_TIME, "spanish");
                        $fecha_act = strftime("%A, %d de %B de %Y");
                        ?>
                        <p><?= $fecha_act ?></p> 
                    </header>
                    <main class="">
                        <h2>
                            Estos son tus inventarios:
                        </h2>
                        <section>
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Año</th>
                                        <th scope="col">Comentario</th>
                                        <th scope="col">Cod Almacén</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                   <?php
                                   
                                   ?>
                                    </tr>
                                    <tr>
                                        <td>Producto 2</td>
                                        <td>Agotado</td>
                                        <td>Marca B</td>
                                        <td>50</td>
                                        <td>2021</td>
                                        <td>Comentario 2</td>
                                        <td>XYZ789</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </section>
                    </main>
                </div>

                <?php
            } else {
                echo 'mal';
            }
        } else {
            echo 'No se ha rellenado el formulario de login.';
        }
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>