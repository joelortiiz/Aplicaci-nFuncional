<?php
//require_once('../functions/dbConnection.php');
require '../functions/functions.php';
try {
    // joel,joel
    $db = new PDO('mysql:host=localhost;dbname=inventariotalaveracollection', 'joel', 'joel');
} catch (PDOException $e) {
    echo 'La página no está disponible actualmente';
    exit;
}
$user = 'joel';
if (isset($user)) {
    $sql = ("select * FROM almacen where Codusuario = (select Codusuario from usuario where Nomusuario = 'joel')");

    $inventarios = selectInventarios($db, $sql);
}//$db = null;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>Página</title>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //   require_once('../functions/dbConnection.php');
            //codificamos
            $nombre = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);

            // Buscamos el usuario en la base de datos
            $checkUser = $db->prepare("SELECT codusuario, Nomusuario, Contraseñausuario FROM usuario WHERE Nomusuario = ? AND Contraseñausuario = ?");
            $checkUser->execute([$nombre, $password]);

            $count = $checkUser->rowCount();

            if ($count > 0) {
                // echo 'bien';
                if(isset($_COOKIE['usercookie'])) {
                setcookie("usercookie", "", time() - 3600 * 24, "/");
                setcookie("usercookie", $_POST["username"], time() + 3600 * 24, "/");
                } else {
                    
                setcookie("usercookie", $_POST["username"], time() + 3600 * 24, "/");
                }
                //Hacer cookie con usuario
                //inicio de la sesión.
                session_start();
                $_SESSION['name'] = $nombre;
                //   header('Location: ../functions/session_validate.php');
                ?>

                <div class="container d-flex justify-content-center align-items-center flex-column">
                    <header class="d-flex flex-column">
                     
                        <h1>
                            Bienvenido a tus inventarios, <?php echo "<p class=''>" .$nombre ."</p>"; ?>
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
                                        <th scope="col">C.Almacén</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">C.Usuario</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $search = $db->prepare("select * FROM almacen where codusuario = (select Codusuario from usuario where Nomusuario = '" .$_POST['username'] ."')");
                        
                                    $search->execute();
                                    // Se recoge cada resultado y se lleva a la tabla
                                    while ($fetch = $search->fetch()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $fetch['codalmacen'] ?></td>
                                            <td><?php echo $fetch['nomalmacen'] ?></td>
                                            <td><?php echo $fetch['direccionalmacen'] ?></td>
                                            <td><?php echo $fetch['telefonoalmacen'] ?></td>
                                            <td><?php echo $fetch['codusuario'] ?></td>
                                             <td>
                                            <div class="mt-2 text-center">
                                                <?php $id = $fetch['codalmacen']?>
                                                 <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger">X</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 text-center">
                                                <button type="submit" class="btn btn-warning">
                                                    Actualizar
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 text-center">
                                                <button type="submit" class="btn btn-primary">
                                                    Entrar
                                                </button>
                                            </div>
                                        </td>
                                        </tr>

                                        <?php
                                    }
                                    ?>

                                        <!--    <tr>
                                        <td>Producto 2</td>
                                        <td>Agotado</td>
                                        <td>Marca B</td>
                                        <td>50</td>
                                        <td>2021</td>
                                        <td>Comentario 2</td>
                                        <td>XYZ789</td>
                                        <td>
                                            <div class="mt-2 text-center">
                                                <button type="submit" class="btn btn-danger">
                                                    Eliminar
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 text-center">
                                                <button type="submit" class="btn btn-warning">
                                                    Actualizar
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 text-center">
                                                <button type="submit" class="btn btn-primary">
                                                    Entrar
                                                </button>
                                            </div>
                                        </td>
                                    </tr>  --> 

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