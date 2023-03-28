<?php
    require_once 'header.php';

    echo "<title>".$appname."</title>".
        "</head>".
        "<body>";
if($loggedin){

echo <<<_END
  <header class="header" id="header">
        <nav class="navbar container">
            <a href="/app/index.php">
                <h2 class="logo">
                    $appname
                </h2>
            </a>
            <div class="menu" id="menu">
                <ul class="menu-list">
                    <li class="menu-list-item">
                        <a href="/app/index.php" class="menu-list-link current">Home</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="/app/create.php" class="menu-list-link">Create</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="/app/profile/index.php" class="menu-list-link">Profile</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="#" class="menu-list-link">Blog</a>
                    </li>
                    <li class="menu-list-item screen-lg-hidden">
                        <a href="#" class="menu-list-link">Log In</a>
                    </li>
                    <li class="menu-list-item screen-lg-hidden">
                        <a href="#" class="menu-list-link">Sign Up</a>
                    </li>
                </ul>
            </div>

            <div class="menu-list list-right">
                <button class="btn centered search-btn">
                    <i class="fa fa-search"></i>
                </button>
                <button class="btn screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="fa fa-bars open-menu-icon"></i>
                    <i class="fa fa-close close-menu-icon"></i>
                </button>
                <div class="space screen-sm-hidden"></div>
_END;
                echo "<button class='menu-list-link screen-sm-hidden'>".$username."</button><div class='space screen-sm-hidden'></div>".
                "<a href='/app/accounts/logout.php' class='menu-list-link screen-sm-hidden log-in-btn'>Log out</a>".
            "</div>".
        "</nav>".
    "</header>";

}
else{
  echo <<<_END
  <header class="header" id="header">
        <nav class="navbar container">
            <a href="/app/index.php">
                <h2 class="logo">
                    $appname
                </h2>
            </a>
            <div class="menu" id="menu">
                <ul class="menu-list">
                    <li class="menu-list-item">
                        <a href="/app/index.php" class="menu-list-link current">Home</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="/app/create.php" class="menu-list-link">Create</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="#" class="menu-list-link">Blog</a>
                    </li>
                    <li class="menu-list-item screen-lg-hidden">
                        <a href="#" class="menu-list-link">Log In</a>
                    </li>
                    <li class="menu-list-item screen-lg-hidden">
                        <a href="#" class="menu-list-link">Sign Up</a>
                    </li>
                </ul>
            </div>

            <div class="menu-list list-right">
                <button class="btn centered search-btn">
                    <i class="fa fa-search"></i>
                </button>
                <button class="btn screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="fa fa-bars open-menu-icon"></i>
                    <i class="fa fa-close close-menu-icon"></i>
                </button>
                <div class="space screen-sm-hidden"></div>
_END;
                echo "<button class='menu-list-link screen-sm-hidden'>".$username."</button><div class='space screen-sm-hidden'></div>".
                "<a href='/app/accounts/login.php' class='menu-list-link screen-sm-hidden log-in-btn'>Log in</a>".
                "<a href=''/app/accounts/signup.php'' class='menu-list-link screen-sm-hidden sign-up-btn'>Sign up</a>".
            "</div>".
        "</nav>".
    "</header>";
}

?>