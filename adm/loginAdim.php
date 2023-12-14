<?php

class AdminLogin {
    private $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function authenticate($username, $password) {
        $count = 0;

        $username = mysqli_real_escape_string($this->link, $username);
        $password = mysqli_real_escape_string($this->link, $password);

        $res = mysqli_query($this->link, "SELECT * FROM admins WHERE username='$username' AND password='$password'");
        $count = mysqli_num_rows($res);

        return $count;
    }
}



class AdminAuthenticator {
    private $adminLogin;

    public function __construct($adminLogin) {
        $this->adminLogin = $adminLogin;
    }

    public function handleLoginForm() {
        if (isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $count = $this->adminLogin->authenticate($username, $password);

            if ($count == 0) {
                ?>
                <script type="text/javascript">
                    document.getElementById("errorsms").style.display = "block";
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    window.location = "admin_dashboard.php";
                </script>
                <?php
            }
        }
    }
}

// Uso das classes
$adminLogin = new AdminLogin($link);
$authenticator = new AdminAuthenticator($adminLogin);
$authenticator->handleLoginForm();

?>

