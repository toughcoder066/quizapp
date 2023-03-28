<?php
require_once 'backend.php';

    if(isset($_SESSION['user'])){
        destroySession();
    }
    if(isset($_POST['username'])){
        $user = sanitizeString($_POST['username']);
        $pass = sanitizeString($_POST['pass']);
        $email = sanitizeString($_POST['email']);

        if($user == "" || $pass == ""){
            $error = "enter username and password";
        }
        else{
            $check = myQuery("SELECT * FROM users WHERE username = '$user'");

            if($check->num_rows){
                die('username already exists, choose another username');
            }
            else{
                $salt1 = "&&@";
                $salt2 = "!!qm";
                $token = hash('ripemd128',"$salt1$pass$salt2");

                $enter = myQuery("INSERT INTO users(username,pass,email) VALUES('$user','$token','$email')");
                if($enter){
                    die("Account created <p>Please <a href='login.php'>Log in.</a></p>");
                }
            }
        }
    }
    

?>