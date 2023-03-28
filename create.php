<?php
    require_once 'controller/navigation.php';
    // if(!$loggedin){
    //     redirectx();  
    // }
?>

<div class="create-container create-container-fluid">
    <div class="create-head-title">
        <h2>Create Your Quiz</h2>
    </div>
</div>
    
    <div class="create-container create-wrapper">
        <!-- user info and add quiz  -->
        <div class="create-user-quiz-block">
            <!-- user info block  -->
            <div class="user-info-section">
                <div class="">
                    <div class=""><h2><a href="/app/profile/"><?php echo $username;?></a></h2></div>
                </div><br>
                
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
                <!-- <button  class="bottoms" ><i class='fa fa-refresh' aria-hidden='true'></i> refresh</button>
                <button  class="bottoms">create quiz</button> -->
                <div class="pro-div-head-liner">
                    <a id="quizbill" class="pdh-btn">Create Quiz</a>
                    <a id="refresh" class="pdh-btn" onclick="location.reload();">Refresh</a>
                </div>
            </div>
                

            <!-- quiz entry block  -->
            <div class="create-space-form">
                
                <form id="form-id" class="add-ques-ans-form" onsubmit="event.preventDefault();">
                    <label for="qtitle"><i class='fa fa-list-alt' aria-hidden='true'></i> Select Your Quiz</label><br><br>
                    <select style="width: 100%; height: 40px;" name="qtitle" id="qtitle" required>
                        <option value=""></option>
                        <?php
                        require_once 'controller/svariables.php';
                        $n = 1;
                            for($i=0; $i<count($data['title']); $i++)
                            echo "<option value=".$data['id'][$i].">".$data['title'][$i]."</option>"; 
            
                        ?>
                    </select>  

                    <br><br><br>  
                    <label for=""><i class='fa fa-plus-square' aria-hidden='true'></i> Add Questions & Options</label>
                    <br><br>

                    <label for="ques">Question</label>
                    <input id="ques" type="text" name="question" required>
            

                    <label>Answer</label>
                    <input id="ans" type="text" name="answer" required>
            

                    <label>Option A</label>
                    <input id="opt-a" type="text" name="option-a" required>
            

                    <label>Option B</label>
                    <input id="opt-b" type="text" name="option-b" value="">
            

                    <label>Option C</label>
                    <input id="opt-c" type="text" name="option-c">
                    <br><br>
                
                    <button id="submit" class="create-submit" type="submit" onclick="sendData();" value="submit">Add To Set</button>
                    <br><br>
                    <div class="notification"></div>
                </form>
            </div>

        </div>
        
        <!--<div class="side-hustle">-->
        <div class="create-feed-and-notify">
            <h2 class="create-latest-quiz">Latest Quizzes</h2>
            <div class="profile-nav">
                <li><a class="profile-nav-a aon" href="#">Feed</a></li>
                <li><a class="profile-nav-a" href="#">Notification</a></li>
            </div>
            <div class="feedscroll">
            <?php
                require_once 'controller/crud.php';
                $itr = $cows->num_rows;
                if($itr > 10){$itr = 10;}
                for($x=0; $x<$itr; $x++){
                        echo"<div class='allele'>".
                            "<div class='dbcontent'>".
                            "<small>Quiz category » $catlist[$x] </small>".
                                "<h3 id='qt'><span class='dbcontent-title'>".$qlist[$x]."</span></h3>".
                                "<p>".substr($dlist[$x],0,50)." ..."."</p>".
                                "<div><small>Created By ".$ulist[$x]." - 4 hours ago</small></div>".
                                "<div class='allele-btn'>".$qlist_no[$x]->fetch_array()[0]."</div>".
                            "</div>". 
                        "</div>";
                }
                
            ?>
            </div>
            
        </div>
    
    </div>

    <div id="drop-down" class="create-quiz-modal">
        <form  class="quiz-modal" onsubmit="event.preventDefault();">
            <i class="fa fa-close close-modal" id="lil-fonts"></i>
            <h2>Create New Quiz</h2><br>
            <div class="modal-notify"></div><br>
            <label for='title'>Quiz Title</label>
            <input id="title" type="text" name="title" required>
            <br>
            <label for="category">Select Category:</label>
            <select style="width: 100%; height: 40px;" name="category" id="category" required>
                <option value=""></option>
                    <?php require_once 'controller/categories.php'; 
                        for($c=0; $c<count($data['categories']); $c++){ 
                        echo"<option value='".$data['categories'][$c]."'>".$data['categories'][$c]."</option>";
                    }
                    ?>
            </select><br><br>
            <label for='desc'>Quiz Description</label><br>
            <textarea id="desc" class="quiz-description" name="desc" wrap="type"></textarea>
            <br><br> 
            <button id="qsubmit" class="modal-btn" type="submit" onclick="createQuiz();" value="Submit">Create</button>
        </form>
    </div>
    
</div>

<script src="/app/assets/jquery/jquery-3.6.0.js"></script>
<script src="/app/assets/js/main-bundle.js"></script>
<script src="/app/assets/js/create.js"></script>
</body>
</html>