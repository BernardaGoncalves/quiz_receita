<!DOCTYPE html>
<html>
<head>
	<title>Administração</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Administração</h1>
		<nav>
			<ul>
				<li><a href="adicionar.php">Adicionar Receita</a></li>
				<li><a href="editar.php">Editar Receita</a></li>
				<li><a href="excluir.php">Excluir Receita</a></li>
				<li><a href="logout.php">Sair</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="receitas">
			<h2>Receitas</h2>
			<table>
				<tr>
					<th>Nome</th>
					<th>Categoria</th>
					<th>Data</th>
				</tr>
				<?php
				// Conecte-se ao banco de dados
				$conn = mysqli_connect("localhost", "usuario", "senha", "banco_de_dados");

				// Selecione todas as receitas
				$sql = "SELECT * FROM receitas";
				$resultado = mysqli_query($conn, $sql);

				// Exiba as receitas em uma tabela
				while ($receita = mysqli_fetch_assoc($resultado)) {
					echo "<tr>";
					echo "<td>" . $receita["nome"] . "</td>";
					echo "<td>" . $receita["categoria"] . "</td>";
					echo "<td>" . $receita["data"] . "</td>";
					echo "</tr>";
				}

				// Feche a conexão
				mysqli_close($conn);
				?>
			</table>
		</section>
	</main>
	<footer>
		<p>© 2023 Gerador de Receitas</p>
	</footer>
</body>
</html>
