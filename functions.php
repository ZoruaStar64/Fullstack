<?php
session_start();
require_once('creds.php');
global $link;
$showloggedin = false;


/*$query = "SELECT * FROM Users";
$result = $link->query($query);*/
/*JSC($result);*/
/*JSC($link);*/

/*while ($row = $result->fetch_assoc()){
    JSC($row['nickname'] );
}*/

/*function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}*/

$creationMessage = "";

if (isset($_POST["createAcc"])) {

    if (isset($_POST["emailReg"])) {
        $emailReg = $_POST["emailReg"];
    }

    if (isset($_POST["passwordReg"])) {
        $passwordReg = $_POST["passwordReg"];
    }

    if (isset($_POST["nickname"])) {
        $nickname = $_POST["nickname"];
    }

    if (isset($_POST["gender"])) {
        foreach ($_POST["gender"] as $theGender) {
            $gender = $theGender;
        }

    }
    createAccount($link, $emailReg, $nickname, $passwordReg, $gender);
}



function createAccount ($link, $emailReg, $nickname, $passwordReg, $gender)
{

    $query = "INSERT INTO u3651p69583_tracker.Users(`e-mail`, nickname, password, gender) VALUE (?, ?, ?, ?)";
    $stmt1 = mysqli_prepare($link, $query);
    $stmt1->bind_param("ssss", $emailReg, $nickname, $passwordReg, $gender);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    } else {
        mysqli_stmt_execute($stmt1);

        $creationMessage = "Account created!";
        echo mysqli_stmt_error($stmt1);
        mysqli_stmt_close($stmt1);
    }
}

if (isset($_POST["login"])) {
    inLogFormulier($link);
}

function inLogFormulier($link) {
    global $showloggedin, $profilePicture, $userName, $userId, $bio;


    $email = $_POST['emailLogin'];
    $wachtwoord = $_POST['passwordLogin'];

    $query = "SELECT * FROM u3651p69583_tracker.Users WHERE `e-mail` = '$email' AND password = '$wachtwoord'";
    $result = $link->query($query);
 /*   $statement = mysqli_prepare($link, $query);
    $statement->bind_param("isssss", $userId, $trueEmail, $nick, $trueWachtwoord, $gender, $profilePicture);*/

    while ($arraytable = $result->fetch_assoc()) {

        $profileId = $arraytable['userId'];
        $trueEmail = $arraytable['e-mail'];
        $nick = $arraytable['nickname'];
        $trueWachtwoord = $arraytable['password'];
        $gender = $arraytable['gender'];
        $bio = $arraytable['bio'];
        $profilePicture = $arraytable['profilePicture'];
    }

    if (isset($_POST['login'])
        && $email == $trueEmail && $wachtwoord == $trueWachtwoord) {

        $_SESSION["user"] = array("userId" => $profileId,
            "email" => $trueEmail,
            "name" => $nick,
            "wachtwoord" => $trueWachtwoord,
            "gender" => $gender,
            "bio" => $bio,
            "PFP" => $profilePicture);


        $usercreds = userCreds();
        $profilePicture = $usercreds['profilePicture'];
        $userName = $usercreds['userName'];
        $userId = $usercreds['userId'];
        $bio = $usercreds['bio'];
        $showloggedin = true;

    }

}

if (isset($_POST["changeBio"])) {

    $bio = $_POST["changedBio"];
    $userId = $_POST["hiddenId"];
    editBio($link, $bio, $userId);
}

function editBio ($link, $bio, $userId) {

    $queryBio = "UPDATE u3651p69583_tracker.Users SET bio='$bio' WHERE userId='$userId'";
    $stmt1 = $link->prepare($queryBio);
    $stmt1->bind_param("s", $bio);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    } else {
        mysqli_stmt_execute($stmt1);

        echo "Your bio has been changed!";
        /*echo mysqli_stmt_error($stmt1);*/
        mysqli_stmt_close($stmt1);
        header("Location: profile.php?id=$userId");
    }
}

/*if (isset($_POST["changePFP"])) {

    $PFP = $_POST["changedPFP"];
    $userId = $_POST["hiddenId"];
    editPFP($link, $PFP, $userId);
}*/

function editPFP ($link, $PFP, $userId) {

    $queryPFP = "UPDATE u3651p69583_tracker.Users SET profilePicture='$PFP' WHERE userId='$userId'";
    $stmt1 = $link->prepare($queryPFP);
    $stmt1->bind_param("s", $PFP);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    } else {
        mysqli_stmt_execute($stmt1);

        echo "Your bio has been changed!";
        /*echo mysqli_stmt_error($stmt1);*/
        mysqli_stmt_close($stmt1);
        header("Location: profile.php?id=$userId");
    }
}

function userCreds() {

    $usercreds = [];
    $profilePicture = $_SESSION["user"]["PFP"];
    /*JSC($profilePicture);*/
    if (!empty($profilePicture)) {

        $usercreds['profilePicture'] = $profilePicture;
    }
    else {
        $gender = $_SESSION["user"]["gender"];
        switch ($gender) {
            case "male":
                $usercreds['profilePicture'] = "img/IconMan.png";
                break;
            case "female":
                $usercreds['profilePicture'] = "img/IconWoman.png";
                break;
            case "secret":
                $usercreds['profilePicture'] = "img/UnknownGender.png";
                break;
            default:
                $usercreds['profilePicture'] = "img/notLoggedIn.png";
        }
    }


    $usercreds['userName'] = $_SESSION["user"]["name"];
    $usercreds['userId'] = $_SESSION["user"]["userId"];
    $usercreds['bio'] = $_SESSION["user"]["bio"];

    return $usercreds;

}

?>