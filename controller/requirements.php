<?php
  $dbhost  = 'localhost';
  $dbport  = '3306';
  $dbname  = 'Library';
  $dbuser  = 'admin';
  $dbpass  = '@fmb1uy5u';
  $appname = 'QuizApp';

  $connection = new mysqli($dbhost,$dbuser,$dbpass,$dbname,$dbport);
  if ($connection->connect_error)die("couldn't establish connection!: ".$connection->connect_error);

  session_start();
  
  if(isset($_SESSION['user'])){
      $user = $_SESSION['user'];
      $loggedin = TRUE;
      $username = "$user";
  

  }else{
      $loggedin = FALSE;
      $username = "Guest";
      //$_SESSION['subject_selected'] = '';
}
  ?>