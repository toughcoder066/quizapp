<?php
require_once '../controller/header.php';
echo "<title>".$appname." | Log in</title></head><body>";
?>
<div class="cover">
    <div class="overlay">
        <!-- <div class="box-filter"></div> -->
        <div class="auth-wrapper">
            <div class="form-space">
                
                <div class="placeholder-img" style="margin-top:20px"></div>
                <form id="login-form" class="auth-form" onsubmit="event.preventDefault();">
                    <div id="access-moticon">
                        <button class="input-icon"><i class="fa fa-user"></i></button>
                        <input id="username" class="input-width" type="text" name="username" placeholder="Username">
                    </div>    
                    <div id="access-moticon">
                        <button class="input-icon"><i class="fa fa-lock"></i></button>
                        <input id="pass" class="input-width" type="password" name="pass" placeholder="Password">
                    </div>
                    <div class="notification"></div>
                    
                    <button id="submit" class="create-submit" type="submit" onclick="loginUser();" value="Login">Login</button>
                    <p class="forgot-password"><a href="#">Forgot password?</a></p>

                    <div class="below-btn">Don't have an Account? <a style="text-decoration:underline" href="signup.php">Signup</a></div>
                </form><br>
                
            </div>
        </div>
    
    </div>
    
</div>

<script src="../assets/jquery/jquery-3.6.0.js"></script>
<script src="../assets/js/main-bundle.js"></script>
</body>
</html>