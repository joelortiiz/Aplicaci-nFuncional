<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Cambiar Datos del Objeto</title>
    </head>
    <body>

        <div class="container mt-5">
            <h2 class="mb-4">Cambiar Datos del Objeto</h2>

            <form action="../functions/updateItem.php?id=<?= $_GET['id'] ?>&name=<?= $_GET['name']?>" method="post">
                <div class="form-group">
                    <label for="nombreObjeto">Nombre del Objeto:</label>
                    <input type="text" class="form-control" id="nombreObjeto" placeholder="Nombre del Objeto" name="nombreObjeto">
                </div>
                <div class="form-group">
                    <label for="estadoObjeto">Estado del Objeto:</label>
                    <input type="text" class="form-control" id="estadoObjeto" placeholder="Estado del Objeto" name="estadoObjeto">
                </div>
                <div class="form-group">
                    <label for="marcaObjeto">Marca:</label>
                    <input type="text" class="form-control" id="marcaObjeto" placeholder="Marca" name="marcaObjeto">
                </div>
                <div class="form-group">
                    <label for="stockObjeto">Stock:</label>
                    <input type="number" class="form-control" id="stockObjeto" placeholder="Stock" name="stockObjeto">
                </div>
                <div class="form-group">
                    <label for="anoObjeto">Año:</label>
                    <input type="date" class="form-control" id="anoObjeto" placeholder="Año" name="anoObjeto" value='<?= date("Y-m-d")?>'>
                </div>
                <div class="form-group">
                    <label for="comentarioObjeto">Comentario:</label>
                    <textarea class="form-control" id="comentarioObjeto" rows="3" placeholder="Comentario" name="comentarioObjeto"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    </body>
</html>
