<?php
    require_once 'backend.php';

    /*$queri = myQuery("SELECT quiztitle FROM topics");
    $wan = $queri->fetch_array(MYSQLI_ASSOC);
    //print_r($queri);

    $list=array();
    /*$a = -1;
    while($r = $queri->fetch_array()){
        $a++;
        $list[$a]=$r['quiztitle'];
    }*
    for($r=0; $r<$queri->num_rows; ++$r){
        $dd = $queri->fetch_array();
        $list[$r]=$dd['quiztitle'];
    }
    print_r($list);*/
    

    $cows = myQuery("SELECT * FROM topics");
    $cows->fetch_array(MYSQLI_ASSOC);
    //print_r($cows->num_rows);

    $q_rows = myQuery("SELECT * FROM topics ORDER BY created_on DESC");
    //print_r($q_rows);


$idlist=array();$qlist=array();$dlist=array();$ulist=array();$catlist=array();$qlist_no=array();
    $x = 0;
    while($r = $q_rows->fetch_array()){
        $idlist[$x]=$r['t_id'];
        $qlist[$x]=$r['quiztitle'];
        $dlist[$x]=$r['description'];
        $catlist[$x]=$r['category'];
        $ulist[$x]=$r['username'];
        $x++;
    }
    //print_r($qlist[3]);
    
    for($x=0; $x<count($qlist); $x++){
        $qlist_no[$x] = myQuery("SELECT COUNT(question) FROM questions WHERE t_id='$idlist[$x]'");
    }

    //print_r($qlist_no[3]->fetch_array()[0]); 
    
    /*while($r = $d_rows->fetch_array()){
        $x++;
        $dlist[$x]=$r['description'];
    }

    while($r = $u_rows->fetch_array()){
        $y++;
        $ulist[$y]=$r['username'];
    }*/
    ////////////////////////////////////

    function conv($date){
        $time = strtotime($date);
        $myFormat = date("F j, Y - g:i a", $time);
        return $myFormat;
        }
        //date('Y-m-d H:i:s')
    function getDt($date1,$date2){
        $myFormat = array();
        $date1 = strtotime($date1);
        $date2 = strtotime($date2);

        $diff = abs($date2 - $date1);

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24));
        $days = floor(($diff - $years * (365*60*60*24) - $months * (30*60*60*24))/ (60*60*24));
        $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
        $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
        $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));

        $myFormat[0] = $years;
        $myFormat[1] = $months;
        $myFormat[2] = $days;
        $myFormat[3] = $hours;
        $myFormat[4] = $minutes;
        $myFormat[5] = $seconds;

        return $myFormat;
    }
    //$one = '2022-09-29 17:13:26';
    //$two = date('Y-m-d H:i:s');
    //print_r(getDt($one,$two)[1]);
    
        // Declare and define two dates
  $date1 = strtotime("2016-06-01 22:45:00");
  $date2 = strtotime("2018-09-21 10:44:01");
 
  // Formulate the Difference between two dates
  $diff = abs($date2 - $date1);
 
  // To get the year divide the resultant date into
  // total seconds in a year (365*60*60*24)
  $years = floor($diff / (365*60*60*24));
 
  // To get the month, subtract it with years and
  // divide the resultant date into
  // total seconds in a month (30*60*60*24)
  $months = floor(($diff - $years * 365*60*60*24)
                                 / (30*60*60*24));
 
  // To get the day, subtract it with years and
  // months and divide the resultant date into
  // total seconds in a days (60*60*24)
  $days = floor(($diff - $years * 365*60*60*24 -
               $months*30*60*60*24)/ (60*60*24));
 
  // To get the hour, subtract it with years,
  // months & seconds and divide the resultant
  // date into total seconds in a hours (60*60)
  $hours = floor(($diff - $years * 365*60*60*24
         - $months*30*60*60*24 - $days*60*60*24)
                                     / (60*60));
 
  // To get the minutes, subtract it with years,
  // months, seconds and hours and divide the
  // resultant date into total seconds i.e. 60
  $minutes = floor(($diff - $years * 365*60*60*24
           - $months*30*60*60*24 - $days*60*60*24
                            - $hours*60*60)/ 60);
 
  // To get the minutes, subtract it with years,
  // months, seconds, hours and minutes
  $seconds = floor(($diff - $years * 365*60*60*24
           - $months*30*60*60*24 - $days*60*60*24
                  - $hours*60*60 - $minutes*60));
?>