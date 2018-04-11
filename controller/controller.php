<?php
    session_start();
    require model."title.php";
    require view."head.php";
    require view."header.php";
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'portfolio') {
            require view."portfolio.php";
        }
        elseif ($_GET['action'] == 'espaceperso') {
            require model."function.php";
            require model."db-connect.php";
            require model."log.php";
            require model."connect.php";
            require model."logoff.php";
            if (isset($_POST['sign'])) {
                $user = new UserSignUp($username, $email, $password, $confirm, $honeypot);
                $user->signUp();
            } elseif (isset($_POST['log'])) {
                $connexion = new Connexion($emailLog, $passwordLog);
                $connexion->log();
            }
            require view."espaceperso.php";
        }
    } else {
        require view."homepage.php";
    }
    require view."footer.php";
?>
