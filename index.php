<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mainMenu.css">
    <link rel="shortcut icon" href="img/ColoredStar.png">
    <title>Star Game Tracker</title>
</head>
<body>
<div class="pageContainer">
<img id="pageLogo" src="img/StarGameTrackerLogo.png" alt="Star Tracker logo">



<?php
require_once('creds.php');
require_once('functions.php');
$showloggedin = false;

echo "<div class='Shine'>";
echo "<div><a href='#'><figure><img src='img/MainMenuButton.png' alt='main menu button'></figure></a></div>";
if ($showloggedin == false) {
    ?>  <div id='registerButton'><a href='#'><figure><img src='img/Register.png' alt='Register button'></figure></a></div>
        <div id='loginButton'><a href='#'><figure><img src='img/LoginButton.png' alt='Login button'></figure></a></div>
    <?php
}
if ($showloggedin == true) {
    ?>  <div><a href='#'><figure><img src='img/ProfileButton.png' alt='Profile button'></figure></a></div>
        <div><a href='#'><figure><img src='img/LogoutButton.png' alt='Logout button'></figure></a></div>
    <?php
}

echo "</div>"

?>

    <form id="registerForm" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
        <div class="inputContainer">
        Email &emsp;&ensp;&nbsp;: <input type='text' name='emailReg' value=''>
        </div>

        <div class="inputContainer">
        Password &nbsp;: <input type='text' name='passwordReg' value=''>
        </div>

        <div class="inputContainer">
        Nickname : <input type='text' name='nickname' value=''>
        </div>

        <input id="creationButton" type='submit' name='createAcc' value='Create Account'>
        <?php $creationMessage; ?>

    </form>
    <br>
    <?php


    ?>

<script src="home.js"></script>
</div>
</body>
</html>