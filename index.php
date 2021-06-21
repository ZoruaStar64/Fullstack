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
$showloggedin = false;
echo "<div class='Shine'>";
echo "<div><a href='#'><figure><img src='img/MainMenuButton.png' alt='main menu button'></figure></a></div>";
echo "<div><a href='#'><figure><img src='img/Register.png' alt='Register button'></figure></a></div>";
echo "<div><a href='#'><figure><img src='img/LoginButton.png' alt='Login button'></figure></a></div>";
if ($showloggedin == true) {
echo "<div><a href='#'><figure><img src='img/ProfileButton.png' alt='Profile button'></figure></a></div>";
echo "<div><a href='#'><figure><img src='img/LogoutButton.png' alt='Logout button'></figure></a></div>";
}
echo "</div>"

?>

</div>
</body>
</html>