<?php

class Autenticacao {
    private $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function realizarLogin($username, $password) {
        $count = 0;
        $res = mysqli_query($this->link, "SELECT * FROM regisstro WHERE username='$username' AND password='$password'");
        $count = mysqli_num_rows($res);

        if ($count == 0) {
            $this->exibirMensagemFalha();
        } else {
            $this->redirecionarParaIndex();
        }
    }

    private function exibirMensagemFalha() {
        ?>
        <script type="text/javascript">
            document.getElementById("falha").style.display = "block";
        </script>
        <?php
    }

    private function redirecionarParaIndex() {
        ?>
        <script type="text/javascript">
            window.location = "admin_dashboard.php";
        </script>
        <?php
    }
}

// Exemplo de uso:

if (isset($_POST["login"])) {
    $autenticacao = new Autenticacao($link);
    $autenticacao->realizarLogin($_POST["username"], $_POST["password"]);
}

?>
