<!DOCTYPE html>
<html>
<?php include_once './partes/head.php';?>

<?php include_once './partes/menu.php';?>
<!--
<div class="home_content">
		<h1>
			Seja bem vindo <b> <?php echo $_session['userName']; ?> </b> <?php echo TITLE;?>
		</h1>
	</div>
-->
<header class="foto">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./img/bg-img/r4.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/bg-img/r5.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/bg-img/r6.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<h3>Encontre aqui as melhores receitas</h3>

<div class="container div row">
    <div class="col-md-4">
        <div class="card" >
            <img src="./img/bg-img/insta2.jpg" class="img recipe-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bolo de chocolate</h5>
                <p class="card-text">Duração: 45min | Sobremesa</p>
            </div>

            <div class="card-body">
                <a href="receitas.php">Ver receita</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" >
            <img src="./img/bg-img/insta2.jpg" class="img recipe-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Gambas ao alho</h5>
                <p class="card-text">Duração: 30min | Aperitivo</p>
            </div>
            <div class="card-body">
                <a href="receitas.php">Ver receita</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" >
            <img src="./img/bg-img/insta2.jpg" class="img recipe-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Arroz chau chau</h5>
                <p class="card-text">Duração: 1h30min  |  Almoço</p>
            </div>

            <div class="card-body">
                <a href="receitas.php">Ver receita</a>
            </div>
        </div>
    </div>
</div>




<section class="quiz">
    <p>Teste seus conhecimentos culinários com nosso quiz!</p>
    <form>
        <label for="q1">Qual é o ingrediente principal do guacamole?</label><br>
        <input type="radio" name="q1" value="a">Abacate<br>
        <input type="radio" name="q1" value="b">Tomate<br>
        <input type="radio" name="q1" value="c">Cebola<br>
        <input type="radio" name="q1" value="d">Pimentão<br>
        <br>
        <label for="q2">Qual é o prato nacional da Espanha?</label><br>
        <input type="radio" name="q2" value="a">Paella<br>
        <input type="radio" name="q2" value="b">Taco<br>
        <input type="radio" name="q2" value="c">Sushi<br>
        <input type="radio" name="q2" value="d">Churrasco<br>
        <br>
        <label for="q3">Qual é o ingrediente principal do risoto?</label><br>
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
</div>

</body>

</html>