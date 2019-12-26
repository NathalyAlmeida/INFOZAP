<?php
    require('conexao.php');
    $id = $_GET['id'];
    $deleta = $pdo->query("DELETE FROM moveis WHERE id = $id");
    header("Location: remover.php");
?>
