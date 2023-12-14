<!DOCTYPE html>
<html>
<?php include './adm/partes/head.php';?>

<body>
	<header>
		<h1>Contato</h1>
	</header>
	<main>
		<section class="contato">
			<form method="post" action="enviar.php">
				<label for="nome">Nome:</label>
				<input type="text" id="nome" name="nome"><br><br>
				<label for="email">E-mail:</label>
				<input type="email" id="email" name="email"><br><br>
				<label for="mensagem">Mensagem:</label>
				<textarea id="mensagem" name="mensagem"></textarea><br><br>
				<input type="submit" value="Enviar">
			</form>
		</section>
	</main>
	<footer>
		<p>© 2023 Seu Site</p>
	</footer>
</body>
</html>
