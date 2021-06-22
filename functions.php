<?php


function createAccount ($link, $email, $nickname, $password)
{

    $query = "INSERT INTO u3651p69583_tracker.Users(`e-mail`, nickname, password) VALUE (?, ?, ?)";
    $stmt1 = mysqli_prepare($link, $query);
    $stmt1->bind_param("sss", $email, $nickname, $password);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    } else {
        mysqli_stmt_execute($stmt1);

        echo mysqli_stmt_error($stmt1);
        mysqli_stmt_close($stmt1);
    }
}

function inLogFormulier($link) {

    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $query = "select * from u3651p69583_tracker.Users where `e-mail` = '$email'";
    $statement = mysqli_prepare($link, $query);
    $statement->bind_param("ss", $trueEmail, $trueWachtwoord);

    while ($arraytable = $statement->fetch()) {

        $trueEmail = $arraytable[0];
        $trueWachtwoord = $arraytable[1];

    }

    if (isset($_POST['knop'])
        && $email == $trueEmail && $wachtwoord == $trueWachtwoord) {
        $_SESSION["user"] = array("naam" => $trueEmail,
            "wachtwoord" => $trueWachtwoord);
    }
}

?>