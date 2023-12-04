<?php 
require_once('../functions/dbConnection.php');

   if(isset($_GET['id'])){
    $oldItem = $_GET['id'];
    $eraseItem = $db->prepare("DELETE FROM objeto WHERE claveobjeto = ?");
    $eraseItem->execute([$oldItem]);
   }
header("Location: ../pages/objetos.php?id=" . urlencode($_GET['id_parent']) . "&name=" . urlencode($_GET['name_parent']));
