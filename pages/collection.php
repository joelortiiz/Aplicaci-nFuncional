<?php

session_start();
echo 'Hola '.$_SESSION['name'];

//Aquí, se manda a un enlace que cierra la sesión
echo '¿Quieres cerrar la sesión?<a href=../functions/logout.php> Pulsa aquí </a>';


//Carga los almacenes.




?>