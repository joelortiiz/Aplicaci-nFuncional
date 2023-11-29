<?php
session_start();

    //Aquí,se mira si la sesión con el nombre existe. 
    if(isset($_SESSION['name'])){
        //si existe, nos lleva a collection.php
        header('Location: ../pages/collection.php');
    } else {
        //si no, nos devuelve a index
        header('Location: ../index.php');
    }
