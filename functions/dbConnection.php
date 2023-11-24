<?php

    try {
        // joel,joel
        $db = new PDO('mysql:host=localhost;dbname=inventariotalaveracollection', 'joel', 'joel');
    } catch (PDOException $e) {
        echo 'La página no está disponible actualmente';
        exit;
    }