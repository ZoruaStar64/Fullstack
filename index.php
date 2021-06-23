<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mainMenu.css">
    <link rel="shortcut icon" href="img/ColoredStar.png">
    <title>Star Game Tracker</title>
</head>
<body>
<div class="pageContainer">
    <div class="userBox">
    <img id="profilePicture" src="img/notLoggedIn.png" alt="Profile Picture">
    </div>
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
echo $creationMessage;
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

        <div class="inputContainer">
            Gender : <select style="width: 50%; margin-left: 12%" name="gender[]" multiple="multiple">
                <option value="male" >Male</option>
                <option value="female">Female</option>
                <option value="trans">Trans</option>
                <option value="secret">keep secret</option>
            </select>
        </div>

        <input id="creationButton" type='submit' name='createAcc' value='Create Account'>


    </form>
    <br>

    <form id="loginForm" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>

        <div class="inputContainer">
            Email &emsp;&ensp;&nbsp;: <input type='text' name='emailLogin' value=''>
        </div>
        <br>
        <div class="inputContainer">
            Password &nbsp;: <input type='password' name='passwordLogin' value=''>
        </div>

        <input id="ActualLoginButton" type='submit' name='login' value='Login'>
    </form>
    <br>
    <?php


    ?>

<script src="home.js"></script>
</div>
</body>
</html>