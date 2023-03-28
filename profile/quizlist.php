<?php
    include $_SERVER['DOCUMENT_ROOT']."/app/controller/navigation.php";
    
    //if not logged in redirect user to login page
    if(!$loggedin){
        redirectToLogin();  
    }
?>
<body>
<div class="profile-home-page">
    
    <!-- fake navbar -->
    <div class="fake-nav width-control">
        <div class="fake-nav-user-section"><strong style="color:#fff;margin-left:8px">← Profile</strong></div>
        <ul class="fake-nav-links fake-nav-quiz-section">
            <a href="/app/index.html">home /</a>
            <a href="index.php">profile /</a>
            <a href="/app/profile/index.php"><?php echo $username?> /</a>
            <a href="#">quizzes</a>
        </ul>
    </div>
    <!-- display screen  -->
    <div class="pro-screen width-control"></div>

    <!-- profile  -->
    <div class="profile-container">
        <div class="pro-div">
            <div class="user-info-section">
                <div class="user-name-and-photo">
                    <div class="user-photo"><img src="/app/assets/images/head.jpg" style="border-radius:50%; width:100px;height:100px;border:1px solid #ccc;margin:10px auto;"></div>
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
                        <li><a class="profile-nav-a" href="/app/profile/index.php">About</a></li>
                        <li><a class="profile-nav-a aon" href="/app/profile/quizlist.php?view=<?php echo $username?>">Quizes</a></li>
                        <li><a class="profile-nav-a" href="#">Accolades</a></li>
                    </div>
    <?php
        require_once "../controller/mycrud.php";
        $itr = $don->num_rows;
        
        
        for($x=0; $x<$itr; $x++){
                echo"<div class='allele'>".
                    "<div class='dbcontent'>".
                    "<small>Quiz category » ".$clist[$x]."</small>".
                        "<h3><span class='dbcontent-title'>".$qlist[$x]."</span></h3>".
                        "<p>".substr($dlist[$x],0,100)."..."."</p>".
                        "<div><small>created By ".$ulist[$x]." - ".$tlist[$x]."</small></div>".
                        "<div class='allele-btn-pro'>".
                        "<a data-tid='$qlist[$x]' onclick='fetchTopicID(this.dataset.tid);' class='allele-btn-left'>Edit</a> <a href='' class='allele-btn-right'>Delete</a></div>".
                    "</div>". 
                "</div>";
        }
    ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
    
<script src="../assets/jquery/jquery-3.6.0.js"></script>
<script src="../assets/js/quizlist.js"></script>
<script src="../assets/js/main-bundle.js"></script>    


