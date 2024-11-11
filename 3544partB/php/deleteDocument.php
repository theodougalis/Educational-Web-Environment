<?php
    session_start();
    include "db_connection.php";
    $rowToDelete = $_GET['rowID'];

    $sql = "DELETE FROM documents WHERE id='$rowToDelete'";
    mysqli_query($conn, $sql);
    header("Location: ../php/documentsTutor.php");
?>