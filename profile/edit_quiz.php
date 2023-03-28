
<?php 
include $_SERVER['DOCUMENT_ROOT']."/app/controller/backend.php";
//require_once '../controller/requirements.php';

if(isset($_GET['id'])){
    $title_id = $_GET['id'];
    //echo $title_id;

}//$r = $edit_id->fetch_array();
//$title = myQuery("SELECT quiztitle FROM topics WHERE t_id = '$title_id' and username = '$user'");
$edit_id = myQuery("SELECT q_id FROM QUESTIONS WHERE t_id = '$title_id' and username = '$user'");

$list=array();
    $a = 0;
while($r = $edit_id->fetch_array()){
    $list[$a]=$r['q_id'];
    $a++;
}
//$r = $title->fetch_array();
//$quiztitle=$r['quiztitle'];
$quiztitle = $_GET['title'];




function get_ins($par){
    $title_id = $_GET['id'];
    $questn = myQuery("SELECT q_id,description,question,option_A,option_B,option_C,option_D,answer FROM topics,questions JOIN options, answers WHERE topics.t_id=$title_id AND questions.q_id = $par AND options.o_id = $par and answers.a_id = $par");
    $que_n_opt = $questn->fetch_array(MYSQLI_ASSOC);
    //print_r($que_n_opt);
    $data = array(
        'desc'=> $que_n_opt['description'],
        'question'=>$que_n_opt['question'],
        'answer'=>$que_n_opt['answer'],
        'options'=> array(
            'option_a'=> $que_n_opt['option_A'], //== $que_n_opt['answer'] ? $que_n_opt['option_B']: $que_n_opt['option_A'],
            'option_b'=>$que_n_opt['option_B'],
            'option_c'=>$que_n_opt['option_C'],
        )
    );
    return $data;
}

//array_push($data['options'],$que_n_opt['option_A'],$que_n_opt['option_B'],
  //          $que_n_opt['option_C']);
//print_r(get_ins($list[0])['question']);


//$ques_inst = myQuery("");



?>
<form>
<div>
<label for='title'>Title</label>
<input type="text" name="title" id="etitle" value="<?php echo $quiztitle;?>"/>
</div><br>

<div>
<label for='desc'>Description</label><br>
<textarea id="description" name="desc" rows="4" cols="50" value=""><?php echo get_ins($list[0])['desc'];?></textarea>
</div><br>

<div>
<label for='ques'>Question</label><!-- for questions in $ques echo qyestion-->
<input type="text" name="ques" id="" value="<?php echo get_ins($list[0])['question'];?>"/>
</div><br>


<label for='opt-1'>option_a</label>
<input type="text" name="opt-1" id="" value="<?php echo get_ins($list[0])['options']['option_a'];?>"/>

<label for='opt-1'>option_b</label>
<input type="text" name="opt-1" id="" value="<?php echo get_ins($list[0])['options']['option_b'];?>"/>

<label for='opt-1'>option_c</label>
<input type="text" name="opt-1" id="" value="<?php echo get_ins($list[0])['options']['option_c'];?>"/>
</form>