

<?php
// login Admin------------------------------------------------------
// Verificação de login 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifique se o nome de usuário e a senha correspondem 
    if ($username === 'admin' && $password === 'adminpass') {
        $_SESSION['admin'] = true;
        header('Location: admin_dashboard.php');
        exit();
    } else {
        $error_message = "Nome de usuário ou senha incorretos.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Verificação</title>
</head>
<body>
    <?php if (isset($error_message)): ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>
</body>
</html>

</head>
</html>
<?php
//logout Admin--------------------------------------------------------------
session_start();
session_destroy();
header('Location: index.php');
exit();
?>
<?php
//dashboard---------------------------------------------------------------------
// Verificação de sessão
//session_start();

if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: index.php');
    exit();
}

/*
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
</body>*/


?>