<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Talavera Collection Store</title>
    </head>
    <body>
        <div class="d-flex flex-column justify-content-center align-items-center">


            <header class= "text-center">
                <h1 class="title">Talavera Collection Store</h1>
                <h2>Inventory management</h2>
                <div>
                    <p>Iván García y Joel Ortiz</p>
                    <p>Curso: 2º DAW</p>
                    <p>Módulo: Desarrollo web en entorno servidor (DWES)</p>
                </div>
            </header>
            <div>
                <?php 
                    //para ver los errores de inicio de sesión
                    if(isset($_GET['error'])){
                        echo '<p class="text-danger"> Datos incorrectos </p>';
                    }
                ?>
                <form class="" action="./pages/pagina.php" method="POST">
                    <div class="form-group">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="username" placeholder="Usuario" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="" name="password">
                    </div>
                    <div class="mt-2 text-center">
                        <button type="submit" class="btn btn-primary">Entrar</button>

                    </div>

                </form>

                <!-- Registro de nuevo usuario -->
                <h2>¿Nuevo usuario? Registrese aquí</h2>
                <?php 
                    if(isset($_GET['errorNew'])){
                        echo '<p class="text-danger"> Datos mal introducidos, vuelva a introducirlos</p>';
                    }elseif(isset($_GET['success'])){
                        echo '<p class="text-success">Usuario registrado exitosamente</p>';
                    }
                
                ?>
                <form action="./pages/newUser.php" method="POST">
                    <div class="form-group">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="username" placeholder="Usuario" name="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="*****" name="password">
                    </div>

                    <div class="form-group">
                        <label for="passwordRepeat">Repetir la contraseña</label>
                        <input type="password" class="form-control" id="passwordRepeat" placeholder="*****" name="passwordRepeat">
                    </div>

                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" placeholder="" name="direccion">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="tel" class="form-control" id="telefono" placeholder="" name="telefono">
                    </div>

                    <div class="mt-2 text-center">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
