<?php
require_once 'backend.php';

$don = myQuery("SELECT bio,dob,nationality,occupation,interests FROM userdetail WHERE username='$username'");

$blist=array();$dlist=array();$nlist=array();$olist=array();$ilist=array();

$x = 0;
    while($r = $don->fetch_array()){
        if($don->num_rows > 0){
        $blist[$x]=$r['bio'];
        $dlist[$x]=conv($r['dob']);
        $nlist[$x]=$r['nationality'];
        $olist[$x]=$r['occupation'];
        $ilist[$x]=$r['interests'];
        $x++;
        }

    }
    

function conv($date){
    return $date = date_format(date_create($date),"D d M, Y");
}
?>