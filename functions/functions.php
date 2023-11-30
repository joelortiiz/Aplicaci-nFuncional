<?php
//funcion que conecta con la base de datos y elige un inventario,devuelve los valores
function selectInventarios($bd, $sql) {
$values = $bd->query($sql);


return $values;
}

