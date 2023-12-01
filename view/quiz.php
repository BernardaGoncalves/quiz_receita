<!DOCTYPE html>
<html>
<?php include './adm/partes/head.php';?>

<body>
	<header>
		<h1>Quiz de Culinária</h1>

        <nav>
			<ul>
            <div class="megamenu">
      <ul class="single-mega cn-col-4">
        <li><a href="#">Início</a></li>
        <li><a href="quiz.php">Quiz</a></li>
        <li><a href="receitas.php">Receitas</a></li>
        <li><a href="about.php">Sobre</a></li>
      </ul>
    </div>
			
		</nav>
	</header>
	<main>
		<section class="quiz">
			<h2>Quiz de Culinária</h2>
			<p>Teste seus conhecimentos culinários com nosso quiz!</p>
			<form onsubmit="return checkAnswers()">
				<label for="q1">Qual é o ingrediente principal do guacamole?</label>
				<input type="radio" name="q1" value="a">Abacate<br>
				<input type="radio" name="q1" value="b">Tomate<br>
				<input type="radio" name="q1" value="c">Cebola<br>
				<input type="radio" name="q1" value="d">Pimentão<br>
				<br>
				<label for="q2">Qual é o prato nacional da Espanha?</label>
				<input type="radio" name="q2" value="a">Paella<br>
				<input type="radio" name="q2" value="b">Taco<br>
				<input type="radio" name="q2" value="c">Sushi<br>
				<input type="radio" name="q2" value="d">Churrasco<br>
				<br>
				<label for="q3">Qual é o ingrediente principal do risoto?</label>
				<input type="radio" name="q3" value="a">Arroz<br>
				<input type="radio" name="q3" value="b">Macarrão<br>
				<input type="radio" name="q3" value="c">Batata<br>
				<input type="radio" name="q3" value="d">Cenoura<br>
				<br>
				<input type="submit" value="Enviar">
			</form>
			<div id="timer">Tempo restante: 30 segundos</div>
		</section>
	</main>
	<footer>
		<p>© 2023 Quiz de Culinária</p>
	</footer>
	<script>
		var timeLeft = 30;
		var timer = setInterval(function() {
			timeLeft--;
			document.getElementById("timer").innerHTML = "Tempo restante: " + timeLeft + " segundos";
			if (timeLeft <= 0) {
				clearInterval(timer);
				document.querySelector("form").submit();
			}
		}, 1000);
	</script>
</body>
</html>
