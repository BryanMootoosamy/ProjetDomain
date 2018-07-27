<?php
// besoin de redescendre la sanitization dans la classe pour rendre cette dernière valable. Il faut donc
// modifier la fonction attribution en sortant le post de la fonction afin de le passer dans la fonctino construct
//  à l'instanciation de la classe. Il faut aussi corriger la conexion à la bd en passant par un prepare et execute. 
    $emailLogRaw = attribution('emailLog');
    $passwordLogRaw = attribution('passwordLog');
    $emailLog = sanitize($emailLogRaw, FILTER_SANITIZE_EMAIL);
    $emailLog = sanitize($emailLog, FILTER_VALIDATE_EMAIL);
    $passwordLog = sanitize($passwordLogRaw, FILTER_SANITIZE_STRING);
    class Connexion
    {
        public $emailCo;
        private $passwordCo;
        function __construct($email, $password) {
            $this->emailCo = $email;
            $this->passwordCo = $password;
        }
        function log() {
            $bd = new Database();
            $db = $bd->connect();
            $verifyInit = $db->query("select * from users where email = '".$this->emailCo."'");
            $verify = $verifyInit->fetch();
            if ($this->emailCo == $verify["email"] && password_verify($this->passwordCo, $verify["password"])) {
                $_SESSION['username'] = $verify['username'];
                $_SESSION['isAdmin'] = $verify['isAdmin'];
            }
        }
    }
