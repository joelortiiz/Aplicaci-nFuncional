<?php
    //Se hace session_destroy para quitar la sesión y se devuelve al index.
    
    session_destroy();
    header('Location:../index.php');
