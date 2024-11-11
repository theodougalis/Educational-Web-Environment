<?php
    session_start();

    $to="tutor@csd.auth.gr";

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $body = $_POST["message"];
    }

    if (empty($email)) {

        header("Location: ../php/communication.php?error=Παρακαλώ προσθέστε το email σας!");

        exit();
    }
    else if (empty($subject)) {

        header("Location: ../php/communication.php?error=Παρακαλώ προσθέστε θέμα!");

        exit();
    }
    else if (empty($body)) {

        header("Location: ../php/communication.php?error=Παρακαλώ προσθέστε το κυρίως κείμενο!");
        
        exit();
    }
    else {
        $headers = "From: $email";
        mail($to, $subject, $body, $headers);

        if ($_SESSION['role'] == "Student"){
            header("Location: ../php/communication.php?error=Ευχαριστούμε {$_SESSION['name']}, θα επικοινωνήσουμε το συντομότερο δυνατό!");
        }
        else if ($_SESSION['role'] == "Tutor"){
            header("Location: ../php/communicationTutor.php?error=Ευχαριστούμε {$_SESSION['name']}, θα επικοινωνήσουμε το συντομότερο δυνατό!");
        }
    }

?>