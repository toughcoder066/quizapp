<?php
require_once 'backend.php';

$don = myQuery("SELECT * FROM topics WHERE username='$username'");

$qlist=array();$dlist=array();$clist=array();$ulist=array();$tlist=array();

$x = 0;
    while($r = $don->fetch_array()){
        $qlist[$x]=$r['quiztitle'];
        $dlist[$x]=$r['description'];
        $clist[$x]=$r['category'];
        $ulist[$x]=$r['username'];
        $tlist[$x]=conv($r['created_on']);
        $x++;
    }


if(sizeof($qlist) == 0){$err = 'You haven\'t created any Quiz';
    exit("<div style='font-size:13px;margin: auto;text-align:center;margin-top:150px;color:#333;'>$err</div>");}


    

// $datetime is something like: 2014-01-31 13:05:59
function conv($date){
$time = strtotime($date);
$myFormat = date("F j, Y - g:i a", $time);
return $myFormat;
}
?>