<?php

class RegistroHandler {
    private $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function registrarUsuario($username, $email, $password) {
        $count = 0;
        $res = mysqli_query($this->link, "SELECT * FROM regisstro WHERE username='$username'") or die(mysqli_error($this->link));
        $count = mysqli_num_rows($res);

        if ($count > 0) {
            $this->exibirMensagem(true);
        } else {
            mysqli_query($this->link, "INSERT INTO regisstro VALUES(NULL, '$username', '$email', '$password')") or die(mysqli_error($this->link));
            $this->exibirMensagem(false);
        }
    }

    private function exibirMensagem($sucesso) {
        if ($sucesso) {
            ?>
            <script type="text/javascript">
                document.getElementById("sucesso").style.display = "none";
                document.getElementById("falha").style.display = "block";
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                document.getElementById("sucesso").style.display = "block";
                document.getElementById("falha").style.display = "none";
            </script>
            <?php
        }
    }
}

// Exemplo de uso:

if (isset($_POST["submit1"])) {
    $registroHandler = new RegistroHandler($link);
    $registroHandler->registrarUsuario($_POST["username"], $_POST["email"], $_POST["password"]);
}

?>
