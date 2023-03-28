<?php
    require_once 'backend.php';

    //$error = $user = $pass = "";
    if (isset($_POST['username'])){
        $user = sanitizeString($_POST['username']);
        $pass = sanitizeString($_POST['pass']);

        if ($user == "" || $pass == "")
            die("Not all fields were entered");
        else{
            $result = myQuery("SELECT username,pass FROM users
                                WHERE username='$user'");
            if ($result->num_rows == 0){
                die("Username/Password invalid");
            }else{
                $row = $result->fetch_array(MYSQLI_NUM);
                $passwd = $row[1];
               
                $salt1 = "&&@";
                $salt2 = "!!qm";
                $token = hash('ripemd128',"$salt1$pass$salt2");

                if($token == $passwd){
                    $_SESSION['user'] = $user;
                    // $_SESSION['pass'] = $token;
                    die("log in successful. <a style='text-decoration: underline' href='/app/profile/index.php?view=$user'>" .
                        "click here</a> to continue.<br>");
                }else{
                    die("log in failed.<br> Username/Password invalid<br>".$token);
                }
                
            }
        }
    }
?>