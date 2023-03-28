<?php
require_once 'backend.php';

$foo = myQuery("SELECT COUNT(question) FROM questions WHERE quiztitle='capital cities'");

print_r($foo->fetch_array());
?>