<?php
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: login.php');
    exit();
}

//  lógica para gerenciar perguntas do quiz
?>
<!DOCTYPE html>
<html lang="en">
<!--  formulários e estilos necessários aqui -->
</html>
