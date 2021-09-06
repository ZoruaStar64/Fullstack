<?php
session_start();
require_once('creds.php');

$showloggedin = false;
$profilePicture = "img/notLoggedIn.png";
$userName = "Not logged in";
$userId = 0;

require_once('functions.php');

$details = userCreds();
$profilePicture = $details["profilePicture"];
$userName = $details["userName"];
echo $userName;
echo $profilePicture

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="profile.css">
    <link rel="shortcut icon" href="img/ColoredStar.png">
    <title>Star Game Tracker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
</head>
<body>


<div id="navbar">
    <div class="Shine">
        <div><a href='index.php'><figure><img src='img/HomeButton.png' alt='Home button'></figure></a></div>
        <div><a href='#'><figure><img src='img/ProfileButton.png' alt='Profile button'></figure></a></div>
        <div><a href='#'><figure><img src='img/MainMenuButton.png' alt='main menu button'></figure></a></div>
        <div><a href='?logout'><figure><img src='img/LogoutButton.png' alt='Logout button'></figure></a></div>
    </div>
</div>
<div class="pageContainer">

    <div class="profileContainer">




    </div>

</div>
<script src="profile.js"></script>
</body>
</html>
