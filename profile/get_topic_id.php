<?php //this code is used to retrieve a topics id from the topics table
    
    require_once '../controller/backend.php';

    if(isset($_POST['title'])){
      $title = $_POST['title'];
      $edit_id = myQuery("SELECT t_id FROM topics WHERE quiztitle = '$title' and username = '$user'");
      $r = $edit_id->fetch_array();
      $get_t_id = $r['t_id'];
 
      echo $get_t_id;
    }
    


    /*$questn = myQuery("SELECT question,answer,option_A,option_B,option_C,option_D 
                        FROM (
                                (questions INNER JOIN answers ON questions.q_id = answers.a_id ) 
                                INNER JOIN options ON questions.q_id = options.o_id
                              )");*/


?>
