<?php
session_start();
include_once("../creds.php");

global $link;

function favOrUnFavGame($link, $gameId, $userId) {

    echo "<p>function called</p>";

    print_r($gameId);
    echo "<br>";
    print_r($userId);
}


?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/mainMenu.css">
    <link rel="shortcut icon" href="../img/ColoredStar.png">
    <title>Star Game Tracker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
</head>
<body>

<?php
if (isset($_POST["favoriteGame"])) {

    $gameId = $_POST["hiddenId1"];
    $userId = $_POST["hiddenId2"];
    favOrUnFavGame($link, $gameId, $userId);
}
?>

</body>
</html>

