<?php
include "db_connection.php";

$currentdate = date("Y-m-d");
$thissubject = $_POST['subject'];
$thismaintext = $_POST['maintext'];
$sql = "INSERT INTO announcements (date, subject, maintext) VALUES ('$currentdate','$thissubject','$thismaintext')";
mysqli_query($conn, $sql);
header("Location: ../php/announcementTutor.php");


?>