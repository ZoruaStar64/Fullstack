<?php
require_once('creds.php');


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


function inLogFormulier($link) {

    $email = $_POST['emailLogin'];
    $wachtwoord = $_POST['passwordLogin'];

    $query = "select * from u3651p69583_tracker.Users where `e-mail` = '$email'";
    $statement = mysqli_prepare($link, $query);
    $statement->bind_param("ss", $trueEmail, $trueWachtwoord);

    while ($arraytable = $statement->fetch()) {

        $trueEmail = $arraytable[0];
        $trueWachtwoord = $arraytable[1];

    }

    if (isset($_POST['login'])
        && $email == $trueEmail && $wachtwoord == $trueWachtwoord) {
        $_SESSION["user"] = array("naam" => $trueEmail,
            "wachtwoord" => $trueWachtwoord);
    }
}

?>