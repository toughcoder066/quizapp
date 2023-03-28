<?php
require_once '../controller/header.php';
if (isset($_SESSION['user']))
{
destroySession();
echo "<div>You have been logged out.";
echo"<script>localStorage.setItem('score','0');</script>";
header("location: http://localhost/app/index.php");
    exit();
}
else echo "<div>you are not logged in</div>";
?>