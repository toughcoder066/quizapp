<div class="ajaxresponse"> <!--this is to hide the output of collect.php-->
<?php 
require_once '../controller/backend.php';
$sub;

if(isset($_POST['title_id'])){
    $sub = sanitizeString($_POST['title_id']);
    echo $sub;
}else $sub = '';

$quiztitle = myQuery("SELECT quiztitle FROM topics WHERE t_id=$sub");
$title = $quiztitle->fetch_array(MYSQLI_ASSOC);

?>
</div>



<!DOCTYPE Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    
    <title>Document</title>
</head>
<body onload="loadScore()">
<main>

<div class="container-game">
    <div class="score-line">
        <div class="nav-left">
            <div class="player">
                <a href="landing.php">
                    <i class='fa fa-arrow-left quiz-profile'></i> <?php echo " ".$username?>
                </a>
            </div>
            
            <!-- <li style="margin-left:-15px;color:yellow">Beginner</li> -->
            
        </div>
        <div class="nav-right">
            <li>Current score </li>
            <li id="score"></li>
            <li>Points </li>
            <li id="hi-score">1000</li>
        </div>
    </div>
    
    <!-- quiz title  -->
    <div class="fake-nav game-play-title">
        <li><?php if($sub)print_r($title['quiztitle']);?></li>
    </div>
    <!-- <div class="vertical-spacer"></div> -->

    <div class="question-container">
        <!--question card-->
        <div class="question-card">
            <h2 id="ques"></h2>
        </div>
    </div>
    

    <!--options card-->
    <div class="option-container">
<?php
    for($i=1; $i<5; $i++)
    echo "<div class='option-card' id='option-$i'></div>";
    
?>

    </div>
    <div class="info-block" id="block-click"></div>
    <div class="info-display" id="disp-access"><!--aka restrict-->
        <div id="win-or-lose">
            <h1 id="remark" style="color:white"></h1><br>
            <div id="your-result"></div>
            <p style="color:white;margin-bottom:10vh">your current score is <span id="score2"></span></p>
            
            <div>
                <a href="landing.php" id="close-it" class="dull">Give up</a>
                <a id="next" onclick="getQuestion();">Persist</a>
            </div><br>
        </div>
    </div>
</div>
<div>
    <form id="fform" onsubmit="event.preventDefault();">
        <select style="display:none;" name="title_id" id="title_id">
                <option value="<?php echo $sub;?>"></option>
                </select>
        <div class="quiz-btn"><a href='' id="close" style="background:red">End Quiz</a>
        <input value="Next" id="next" type="submit" onclick="getQuestion();">
</div>
</form>
</div>


    
</main>
<script src="../assets/jquery/jquery-3.6.0.js"></script>
<script src="../assets/js/quiz.js"></script>
</body>
</html>