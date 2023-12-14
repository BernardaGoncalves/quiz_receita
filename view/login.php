<?php
include "../conection.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">

	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
	
		<div class="login">
			<form class="form" action="" method="post">
			<h1> <a href="index.php"style="text-decoration:none; color:#fff;">Login</a></h1>

				<div class="input-box">
					<input type="text"  placeholder="username" required>
					<!--<i class='bx bxs-user'></i>-->
				</div>
				<div class="input-box">
					<input type="password"  placeholder="password" required>
					<!--<i class='bx bxs-lock-alt'></i> -->
				</div>				
				<div class="remember-forgot">
					<label><input type="checkbox">Remember me</label>
							<a href='#'>Forguet password</a>
				</div>	
				<button style="text-align: center;" type="submit"  class="btn">Entrar</button>

				<div class="registrar-link">
					<p>Não possui uma conta? <a href="register.php">Registrar-se</a> </p>
				</div>
				<div class="alert alert-danger" id="falha" role="alert" style="display:none">
                falha no login <strong>usuário ou senha errada</strong>
            </div>
			</form>
		</div>
	<?php
		include "../controller/login.php"
	?>
</body>
</html>
