<?php
    include $_SERVER['DOCUMENT_ROOT']."/app/controller/navigation.php";
    //include('navigation.php');
    //require_once '../controller/navigation.php';
    if(!$loggedin){
        redirectToLogin();  
    }
?>

<div class="profile-home-page">
    
    <!-- fake navbar -->
    <div class="fake-nav width-control">
        <div class="fake-nav-user-section"><strong style="color:#fff;margin-left:8px">← Profile</strong></div>
        <ul class="fake-nav-links fake-nav-quiz-section">
            <a href="/app/index.html">home /</a>
            <a href="index.php">profile /</a>
            <a href="/app/profile/index.php"><?php echo $username?></a>
        </ul>
    </div>
    <!-- display screen  -->
    <div class="pro-screen width-control"></div>

    <!-- profile  -->
    <div class="profile-container">
        <div class="pro-div">
            <div class="user-info-section">
                <div class="user-name-and-photo">
                    <div class="user-photo"><img class="profile-pic-spec" src="/app/assets/images/head.jpg"></div>
                    <div class="user-name"><h2><?php echo $username;?></h2></div>
                </div>
                
                <div class="user-sub-items">
                    <div>
                        <p><small>Quizes taken:</small></p>
                        <p><small>Points:</small></p>
                        <p><small>Age:</small></p>
                    </div>
                    <div>
                        <p><small>Date Joined:</small></p>
                        <p><small>Trophies:</small></p>
                        <p><small>Level:</small></p>
                    </div>
                    
                </div><br><br>
                <div class="pro-div-head-liner">
                    <a class="pdh-btn" href="/app/create.php">Create</a>
                    <a class="pdh-btn" href="/app/quiz/landing.php">Quiz</a>
                </div>
            </div>
            
            
            <div class="quiz-info-section">
                <div class="">
                    <div class="profile-nav">
                        <li><a class="profile-nav-a aon" href="/app/profile/index.php">About</a></li>
                        <li><a class="profile-nav-a" href="/app/profile/quizlist.php?view=<?php echo $username?>">Quizes</a></li>
                        <li><a class="profile-nav-a" href="#">Accolades</a></li>
                    </div>
                    <div style="padding-top:20px; display: flex; justify-content: flex-start;flex-direction:column">
                    <?php require_once '../controller/userinfo.php';
                        $msg = 'You have not provided any information yet'; 
                        echo"<li class=''style='font-size:10px;'><a href='#'>[Edit]</a></li><br>".
                        "<li class='profile-ctn-title'>Biography</li>".
                        "<li class='profile-ctn'>"; if(count($blist)<1){}else{echo $blist[0];} echo"</li>".
                        "<li class='profile-ctn-title'>Birthday</li>".
                        "<li class='profile-ctn'>"; if(count($dlist)<1){}else{echo $dlist[0];} echo"</li>".
                        "<li class='profile-ctn-title'>Country of Origin</li>".
                        "<li class='profile-ctn'>"; if(count($nlist)<1){}else{echo $nlist[0];} echo"</li>".
                        "<li class='profile-ctn-title'>Occupation</li>".
                        "<li class='profile-ctn'>"; if(count($olist)<1){}else{echo $olist[0];} echo"</li>".
                        "<li class='profile-ctn-title'>Interests</li>".
                        "<li class='profile-ctn'>"; if(count($ilist)<1){}else{echo $ilist[0];} echo"</li>";
                    ?>
                    </div>
                    
                <div>
                </div>
            </div>
        </div>
    </div>
        
</div>
<script src="/app/assets/js/main-bundle.js"></script>
</body>
</html>