<?php

require_once('../functions/dbConnection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombreObjeto'];
    $estado = $_POST['estadoObjeto'];
    $marca = $_POST['marcaObjeto'];
    $stock = $_POST['stockObjeto'];
    $ano = $_POST['anoObjeto'];
    $comentario = $_POST['comentarioObjeto'];

   $consulta = $db->prepare(
           "UPDATE objeto
        SET
            Nombreobjeto = '$nombre',
            Estadoobjeto = '$estado',
            Marca = '$marca',
            Stock = '$stock',
            Anio = '$ano',
            comentario = '$comentario'
        WHERE
            Claveobjeto=".$_GET['id']
   );
    // Ejecutar la consulta
    $consulta->execute();
    header("Location: ../pages/objetos.php?id=" . urlencode($_GET['id']) . "&name=". urlencode($GET['name']));
    
} else {
    header('Location:../index.php');
}