<?php
    $usernameRaw = attribution('username');
    $passwordRaw = attribution('password');
    $confirmRaw = attribution('passwordConfirm');
    $emailRaw = attribution('email');
    $honeyRaw = attribution('honeypot');
    $username = sanitize($usernameRaw, FILTER_SANITIZE_STRING);
    $password = sanitize($passwordRaw, FILTER_SANITIZE_STRING);
    $confirm = sanitize($confirmRaw, FILTER_SANITIZE_STRING);
    $honeypot = sanitize($honeyRaw, FILTER_SANITIZE_STRING);
    $email = sanitize($emailRaw, FILTER_SANITIZE_EMAIL);
    $email = sanitize($email, FILTER_VALIDATE_EMAIL);
    class UserSignUp
    {
        public $username;
        public $email;
        private $password;
        private $confirm;
        public $honeypot;
        function __construct($username, $email, $password, $confirm, $honeypot) {
            $this->username = $username;
            $this->password = $password;
            $this->confirm = $confirm;
            $this->email = $email;
            $this->honeypot = $honeypot;
        }
        function signUp(){
            if (isset($this->username) && isset($this->email) && isset($this->password) && isset($this->confirm) && isset($this->honeypot) &&
            $this->password == $this->confirm && $this->honeypot == "18") {
                $bd = new Database();
                $db = $bd->connect();
                $this->password = password_hash($this->password, PASSWORD_DEFAULT);
                $db->exec("insert into users (username, email, password) values ('$this->username','$this->email', '$this->password' )");
            } else {echo "erreur";}

        }

    }
