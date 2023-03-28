<?php
    require_once 'backend.php';

    if(isset($_POST['question']) && isset($_POST['answer']) && isset($_POST['option_a']))
    {   
        $question = ucfirst(sanitizeString($_POST['question']));
        $answer   = ucfirst(sanitizeString($_POST['answer']));
        $option_a = ucfirst(sanitizeString($_POST['option_a']));
        $option_b = ucfirst(sanitizeString($_POST['option_b']));
        $option_c = ucfirst(sanitizeString($_POST['option_c']));
        $title_id    = sanitizeString($_POST['title_id']);
        
        //$option_d = sanitizeString($_POST['option-d']);

        $options = array();
        array_push($options,$option_a,$option_b,$option_c,$answer);
        //shuffle($options);


        $result = myQuery("INSERT INTO questions VALUES(NULL,'$question','$title_id','$username')");
        $result += myQuery("INSERT INTO answers VALUES(NULL,'$answer')");
        $result += myQuery("INSERT INTO options VALUES(NULL,'$options[0]','$options[1]','$options[2]','$options[3]')");
        
        if($result == 3){
            $response = "data sent successfully"; 
        }else{
            $response = "fatal error!...one or more fields not sent";
        }
        
        
    }
    else{
        $response = "you cannot leave question or answer fields empty";
    }

    
    if(isset($_POST['title']) && isset($_POST['desc']))
    {
        if($_POST['title'] == '' && $_POST['desc'] == ''){
            $response = ""; 
        }
        $title = ucfirst(sanitizeString($_POST['title']));
        $desc  = ucfirst(sanitizeString($_POST['desc']));
        $category = ucfirst(sanitizeString($_POST['category']));

        $result = myQuery("INSERT INTO topics VALUES(NULL,'$title','$category','$desc',NOW(),'$username')");

        if($result){
            $response = "Quiz Sucessfully Created"; 
        }else{
            $response = "fatal error!...Could not create quiz";
        }
    }

    exit($response);

    
?>