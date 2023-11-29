<?php
function selectInventarios($bd, $sql) {
$values = $bd->query($sql);


return $values;
}