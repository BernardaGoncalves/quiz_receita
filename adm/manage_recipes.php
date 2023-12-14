<?php
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: login.php');
    exit();
}

// lógica para gerenciar receitas
?>
<!DOCTYPE html>
<html lang="en">
<!--  código HTML, formulários e estilos necessários aqui -->
</html>
