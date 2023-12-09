<?php
// Verificação de sessão
session_start();

if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Administrador - Painel de Controle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Bem-vindo, Administrador!</h2>
        <p>Conteúdo do painel de controle...</p>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
