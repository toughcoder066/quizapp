<?php
    require_once 'requirements.php';

  function myQuery($query){
      global $connection;
      $result = $connection->query($query);
      if(!$result)die("<div style='text-align center;width:100%; height:100%;font-size:120%;color:grey;margin:auto;padding:100px;background:default;'><div> unavailable </div> "./*.$connection->error.*/$connection->close()."</div>");
      return $result;
      $connection->close();
  }

  function createTable($name, $query){
      myQuery("CREATE TABLE IF NOT EXISTS $name($query)");
      echo ("Table $name has been created...<br>");
  }

  function specialQuery($row){
      return myQuery("SELECT * FROM questions JOIN options,answers
        WHERE questions.q_id = $row AND options.o_id = $row
        AND answers.a_id = $row");
  }

  function addEntry($name,$query){
      myQuery("INSERT INTO $name VALUES(NULL,$query)");
  }

  function sanitizeString($text){
      global $connection;
      $text = strip_tags($text);
      $text = htmlentities($text);
      $text = stripslashes($text);
      return $connection->real_escape_string($text);
  }
  
  function destroySession(){
    $_SESSION = array();
    if (session_id() != "" || isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-2592000, '/');
    session_destroy();
    echo"<script>localStorage.setItem('score','0');</script>";
}

    function redirectToLogin(){
        header("location: http://localhost/app/accounts/login.php");
        exit();
    }
    function redirect_page(){
        header("location:http://localhost/app/profile/edit_quiz.php");
        exit();
    }
?>