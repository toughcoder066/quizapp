<?php
    require_once 'backend.php';

    //This code queries the database and retrieves a single question together with its corresponding 
    //answer and options. it then proceeds to load them into their respective forms

    

    if(isset($_POST['title_id']) && $_POST['title_id'] != ''){
      $sub_id = $_POST['title_id'];
      
      $t_rows = myQuery("SELECT q_id FROM questions where t_id='$sub_id'");
      //$t_num = $t_rows->fetch_array;//range(1,$t_rows->fetch_array(MYSQLI_NUM)[0]); //this is the same as range(1,total number of entries in the database. currently 4 so range(1,4))
      //print_r($t_num);
      //foreach ($t_num as $values){
      //  echo $values."<br>";
      //}
      $list=array();
      
      $a = -1;
      while($r = $t_rows->fetch_array()){
        $a++;
        $list[$a]=$r['q_id'];
      }
      //print_r($list);
      shuffle($list);
      
      $question = specialQuery($list[0]);
   // print_r($question);
    

    //$rows = $question->fetch_array(MYSQLI_ASSOC);
    //print_r(get_class_methods(range)); //**php version of dir() func in python #get_class_methods

 
    
      $nth_row = $question->fetch_array(MYSQLI_ASSOC);
      //print_r($nth_row);

      $data = array(
        'question' => $nth_row['question'],
        'answer'   => $nth_row['answer'],
        'options' => array()
      );
    //print_r($nth_row['question']);
 
      /*array_push($data['question'],$nth_row['question']);
      array_push($data['answer'],$nth_row['answer']);*/
      array_push($data['options'],$nth_row['option_A'],$nth_row['option_B'],
                 $nth_row['option_C'],$nth_row['option_D']);
      $package = json_encode($data);
       
      echo $package;
    
    }

    else
    {
      $t_rows = myQuery("SELECT COUNT(*) FROM questions");
      $t_num = range(1,$t_rows->fetch_array(MYSQLI_NUM)[0]);
      
      shuffle($t_num);
  
      $question = specialQuery($t_num[0]);
   
      
        $nth_row = $question->fetch_array(MYSQLI_ASSOC);
  
        $data = array(
          'question' => $nth_row['question'],
          'answer'   => $nth_row['answer'],
          'options' => array()
        );
        
        array_push($data['options'],$nth_row['option_A'],$nth_row['option_B'],
                   $nth_row['option_C'],$nth_row['option_D']);
        $package = json_encode($data);
         
        echo $package;
    }
?>