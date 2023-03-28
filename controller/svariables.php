<?php
    require_once 'backend.php';
// run a query
// gather quiztitle where 
// if(!$loggedin){

// $t_rows = myQuery("SELECT t_id,quiztitle,category FROM topics");
// //$q_rows = myQuery("SELECT category FROM topics");

// $data=array(
//     'id'=>array(),
//     'title'=>array(),
//     'cat'=>array()
// );
//     $a = -1;$j = -1;
//     while($r = $t_rows->fetch_array()){
//         $a++;
//         $data['id'][$a]=$r['t_id'];
//         $data['title'][$a]=$r['quiztitle'];
//         $data['cat'][$a]=$r['category'];
//     }

   /* while($r = $q_rows->fetch_array()){
        $j++;
        $clist[$j]=$r['category'];
    }*/
//$qcat = json_encode($clist);
//$qlist = json_encode($list);
//print_r($data['id']);
//print_r($data['title']);
//print_r($data['cat']);
/*$data = array(
    'titles' => $list,
    'categories' => $clist
  );*/
//   print_r($data['title'][0]);
//   print_r(count($data['title']));
//$package = json_encode($data);

//}
//print_r($package);

//print_r($list);
//exit($qlist,$qcat);

//////////////////////////////////

//else{
$t_data = myQuery("SELECT t_id,quiztitle,category FROM topics WHERE username='$username' ORDER BY created_on");
//$q_data = myQuery("SELECT category FROM topics WHERE username='$username'");

$data=array(
    'id'=>array(),
    'title'=>array(),
    'cat'=>array()
);
    $x = 0;
    while($r = $t_data->fetch_array()){
        $data['id'][$x]=$r['t_id'];
        $data['title'][$x]=$r['quiztitle'];
        $data['cat'][$x]=$r['category'];
        $x++;
    }

    /*$data = array(
        'titles' => $list,
        'categories' => $clist
      );*/
    $package = json_encode($data);

    print_r(count($data['title']));
//}
?>