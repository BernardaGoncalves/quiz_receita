<!DOCTYPE html>
<html>
<head>
	<title>Quiz de Culinária</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		function toggleMenu() {
			var menu = document.getElementById("menu");
			if (menu.className === "menu") {
				menu.className += " responsive";
			} else {
				menu.className = "menu";
			}
		}
	</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="login.php">User</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quiz.php">Quiz</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="receitas.php">Receitas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Sobre</a>
      </li>
	  <li class="icon">
			<a href="javascript:void(0);" onclick="toggleMenu()">☰</a>
		</li>
    </ul>
	<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

	
</body>
</html>
