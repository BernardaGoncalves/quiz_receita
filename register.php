<?php
include "conection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	
	<div class="login">
    <h1> <a href="index.php" style="text-decoration:none; color:#fff;">Registrar</a></h1>

			<form action="" name="forml" method="post">
                <div class="input-box">
                    <label >Nome:</label>
				    <input type="text" name="username"><br><br>
                </div>
                    <div class="input-box">
                    <label >E-mail:</label>
				<input type="text"  name="email"><br><br>
                </div>
                <div class="input-box">
                <label >Senha:</label>
				<input type="password"  name="Password"><br><br>
                </div>
				
				<button type='submit' name="submit1" class='btn'>Registrar</button>
                <div class="registrar-link">
                    <p>Já possui uma conta?<a href="login.php">Entrar</a></p>
                </div>
                <div class="alert alert-primary" id="sucesso" role="alert" style="display:none">
                     conta criada com <strong>sucesso</strong>
                </div>
                <div class="alert alert-danger" id="falha" role="alert" style="display:none">
                Conta <strong>existente</strong>
            </div>
			</form>
            </div>
	<?php
        if(isset($_POST["submit1"])){

            $count=0;
            $res=mysqli_query($link, "select * from regisstro where username='$_POST[username]'") or die(mysqli_error($link));
            $count=mysqli_num_rows($res);

            if($count> 0){
                ?>
                    <script type="text/javascript">
                        document.getElementById("sucesso").style.display="block";
                        document.getElementById("falha").style.display="none";
                        </script>
                <?php
            }
            else {
                mysqli_query($link,"insert into regisstro values(NULL, '$_POST[username]','$_POST[email]','$_POST[password]')") or die(mysqli_error($link));
                ?>
                <script type="text/javascript">
                        document.getElementById("sucesso").style.display="none";
                        document.getElementById("falha").style.display="block";
                </script>
                <?php
            }
        }
    ?>
</body>
</html>
