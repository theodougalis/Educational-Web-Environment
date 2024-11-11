<?php
    session_start();
    include "db_connection.php";
    $rowToDelete = $_GET['rowID'];

    $sql = "DELETE FROM users WHERE loginame='$rowToDelete'";
    mysqli_query($conn, $sql);
    header("Location: ../php/users.php");
?>