<?php
// require_once '../controller/requirements.php';
require_once '../controller/navigation.php';
?>


<div class="landing-container">
    <!-- mobile verison  -->
    <div class="land-nav">
        <div class="fake-nav vertical">
            <li id="nav-dashboard" class="nav-selected"><i class='fa fa-user'></i>&nbsp <span class="screen-hidden-sm">Dashboard</span></li>
            <li id="nav-settings"><i class='fa fa-gears'></i>&nbsp <span class="screen-hidden-sm">Settings</span></li>
            <li id="nav-stats"><i class='fa fa-line-chart'></i>&nbsp <span class="screen-hidden-sm">Stats</span></li>
            <li id="nav-leaderboard"><i class='fa fa-sort-alpha-asc'></i>&nbsp <span class="screen-hidden-sm">Leaderboard</span></li>
        </div>
        
        <!-- <div class='land-nav vertical screen-hidden-sm'>
            <li id=""><i class='fa fa-user'></i> &nbsp Dashboard</li>
            <li id="nav-settings"><i class='fa fa-gears'></i> &nbsp Settings</li>
            <li><i class='fa fa-line-chart'></i> &nbsp Stats</li>
            <li><i class='fa fa-sort-alpha-asc'></i> &nbsp Leaderboard</li>
        </div> -->
    </div>
    
    <div class="land-content-right">
        <!-- dashboard -->
        <form id="score-board" class="score-board" method="post" action="quiz.php">
            <p class="score-board-title">Quiz Over</p>
            <div class="score-board-content">
                <div class="score-pic"></div>
                <div>- Your Score -</div>
                <div id="score-num" class="score-num"></div>
                <input type="hidden" name="title_id" id="try-again-id">
                <button id="try-again" class="try-again" type="submit">Try Again</button>
            </div>
        </form>

        <!-- settings  -->
        <div id="quiz-settings" class="quiz-settings"> 
            <!-- <i class="fa fa-times-circle" id="lil-fonts"></i> -->
            <h3 class="quiz-settings-title">Quiz Settings</h3> 

            <!-- quiz form      -->
            <form id="qz-form" method="post" action="quiz.php">
                <label>Select Your Quiz <span style="color:red">*</span></label><br>
                <select name="title_id" id="title" required>
                    <option value=""></option>
                    <?php
                        $isPresent = FALSE;
                        require_once '../controller/svariables.php';
                            for($i=0; $i<count($data['title']); $i++){
                            echo "<option value='".$data['id'][$i]."'>".$data['title'][$i]."</option>";
                            
                        }
                        ?>
                </select><br><br>

                <label>Questions Range</label><br>
                <select name="qrange" id="qrange">
                    <option value="">--- Currently Unavailable ---</option>
                    <option value="1-20" disabled>1-20 questions(small-set)</option>
                    <option value="1-50" disabled>1-50 questions(standard-set)</option>
                    <option value="1-80" disabled>1-80 questions(medium-set)</option>
                    <option value="1-100" disabled>1-100 questions(large-set)</option>
                </select><br><br>

                <label>Quiz Type</label><br>
                <select name="type" id="type">
                    <option value="">--- Currently Unavailable ---</option>
                    <option value="Count Down"><!--Count Down--></option>
                    <option value="Pop Quiz"><!--Pop Quiz--></option>
                    <option value="Game"><!--Game--></option>
                    
                </select><br><br>
                <button id="begin-quiz-btn" class="modal-btn" type="submit" form="qz-form" value="Submit">Begin</button>
            
            </form>
            <div style="margin-top: 10px;text-align:center;">
                <?php
                if(count($data['title']) < 1){
                echo"<small>you have not yet created a quiz. <a href='/app/create.php'>create</a> one now to start</small>";
                }?>
            </div>
        </div>

        <!-- Stats -->
        <div id="quiz-stats" class="quiz-stats">

        </div>

        <!-- leaderboard -->
        <div id="quiz-leaderboard" class="quiz-leaderboard">
            <h3>Leaderboard</h3>
            <div class="quiz-taker-and-score">
                <div class="quiz-taker"><br>
                    <h4>Username</h4><br>
                    <?php require_once '../controller/users.php';
                    
                        for($x=0; $x < count($user); $x++){
                            echo"<li>".$user[$x]."</li><br>";
                            
                        };
                    ?>
                </div>
                <div class="quiz-taker quiz-taker-score"><br>
                    <h4>Hi Score</h4><br>
                        <?php require_once '../controller/users.php';
                        
                            for($x=0; $x < count($user); $x++){
                                echo"<li style='text-align:center'>".$x."</li><br>";
                                
                            };
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
<script src="../assets/jquery/jquery-3.6.0.js"></script>
<script>
    $('#score-num').html(localStorage['score']);

    
    function stripeAll(){
        $('#score-board').css('display', 'none');
        $('#quiz-settings').css('display', 'none');
        $('#quiz-leaderboard').css('display', 'none');
        $('#nav-dashboard').removeClass('nav-selected');
        $('#nav-leaderboard').removeClass('nav-selected');
        $('#nav-settings').removeClass('nav-selected');
    }

   

    $('#nav-settings').click(()=>{
        stripeAll();
        $('#nav-settings').addClass('nav-selected')
        $('#quiz-settings').css('display', 'block');
        
    });

    $('#nav-dashboard').click(()=>{
        stripeAll();
        $('#nav-dashboard').addClass('nav-selected')
        $('#score-board').css('display', 'block');
    });

    $('#nav-leaderboard').click(()=>{
        stripeAll();
        $('#nav-leaderboard').addClass('nav-selected')
        $('#quiz-leaderboard').css('display', 'block');
    });

// var quizTitle = $('#title option:selected').text();
    $('#begin-quiz-btn').click(()=>{
        var quizTitleId = $('#title').val()//option:selected').text();
        console.log(quizTitleId);
        if(!localStorage.getItem('title_id')){
        localStorage.setItem('title_id',quizTitleId);
        }else{
            localStorage.setItem('title_id',quizTitleId);
        }
    });

    $('#try-again').click(()=>{
        v = document.getElementById("try-again-id");
        v.value=localStorage.getItem('title_id');
    });
</script>