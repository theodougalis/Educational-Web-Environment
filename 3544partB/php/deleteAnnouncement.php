<?php
    session_start();
    include "db_connection.php";
    $rowToDelete = $_GET['rowID'];

    $sql = "DELETE FROM announcements WHERE id='$rowToDelete'";
    mysqli_query($conn, $sql);
    header("Location: ../php/announcementTutor.php");
?>