<?php
function selectValues($bd, $sql) {
$values = $bd->query($sql);
return $values;
}