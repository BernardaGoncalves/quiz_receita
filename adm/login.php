<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Administrador - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login do Administrador</h2>
        <form action="" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
            <div class="alert alert-danger" id="errosms" role="alert" style="display:none">
                falha no login <strong>usuário ou senha errada</strong>
            </div>
        </form>
    </div>
   <?php
    include "./loginAdim.php";
   ?>

</body>
</html>
