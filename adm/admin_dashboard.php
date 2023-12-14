?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Área do Administrador - Painel de Controle</title>
    <!-- Adicione os links do Bootstrap ou outros estilos aqui, se necessário -->
</head>
<body>
    <style>
       
        .dropdown-menu{
            background-color: #fff;
        }
     
       
    </style>
    <!-- Adicione links para gerenciar perguntas, receitas, etc. -->
    <div class="dropdown-menu p-4 text-body-secondary" style="max-width: 300px; left: 10px">
    <h2>Bem-vindo, Administrador!</h2>
    <ul class="dropdown-menu">
  <li><a class="dropdown-item" href="manage_questions.php">Gerenciar perguntas</a></li>
  <li><a class="dropdown-item" href="manage_recipes.php">Gerenciar receitas</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><a class="dropdown-item" href="logout.php">sair</a></li>
</ul>
</div>
</body>
</html>
