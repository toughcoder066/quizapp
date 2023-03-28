<?php
require_once 'requirements.php';


if(isset($_POST['category']) && $_POST['category']!= ''){
    $_SESSION['selected_subject'] = $_POST['category'];
    if($_SESSION['selected_subject'] == ''){
        $re = $_SESSION['selected_subject'];
        exit('category submitted but session unchanged');
    }
    else{
        exit();
    };
}else{
    exit('Category Not selected');
}



?>