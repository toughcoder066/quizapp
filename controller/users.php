<?php 
require_once 'backend.php';

$rows = myQuery("SELECT username FROM users");


$user = array();
$var=0;
for($var=0; $var <= $rows->num_rows; $var++){
    $user_rows = $rows->fetch_array(MYSQLI_ASSOC);
    $user[$var] = $user_rows['username'];
};

// print_r(count($user));

?>