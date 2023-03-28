<?php //signup
require_once '../controller/header.php';
echo "<title>".$appname." | Sign up</title></head><body>";
?>

<div class="signup-background">
    <div class="overlay">
        <div class="auth-wrapper">
                <div class="signup-heading">
                    <h3>Sign Up</h3>
                    <p><small>Fill this form to register your account</small></p>
                </div>
            
            <div class="form-space">
                <div class="notification"></div>
                <form id="login-form" class="auth-form" onsubmit="event.preventDefault();">
                        
                        <input id="email" class="input-width" type="email" name="email" placeholder="Email" required>
                        <br>
                        <input id="username" class="input-width" type="text" name="username" placeholder="Username" required>
                        <br>
                        <input id="pass" class="input-width" type="password" name="pass" placeholder="Password" required>
                        <br>
                        <input id="confirm" class="input-width" type="password" name="confirm" placeholder="Confirm Password" required>
                        <br><br>
                        <!--<div>i accept the terms of use & privacy policy</div>-->
                    <button class="create-submit" id="submit" type="submit" onclick="signUpUser();" value="Create Account">Create Account</button>
                    
                    <div class="below-btn">Already have an Account? <a style="text-decoration:underline" href="login.php">Login</a></div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../assets/jquery/jquery-3.6.0.js"></script>
<script src="../assets/js/main-bundle.js"></script>
</body>
</html>
