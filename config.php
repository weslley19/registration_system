<?php
    try {
        $pdo = new PDO('mysql:dbname=projeto_lanchonete;host=localhost', 'root', '');
    } catch (PDOException $e) {
        echo 'Falhou..'.$e->getMessage();
        exit;
    }
?>