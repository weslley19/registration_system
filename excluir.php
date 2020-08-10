<?php
    require 'config.php';
    if (isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM usuarios WHERE id = $id";
        $sql = $pdo->query($sql);

        header('Location: consultar.php');
        exit;
    }
?>