<?php
include "db_connection.php";


$goals = $_POST['goals'];
$path = $_POST['path'];
$deliverable = $_POST['deliverable'];
$deadline = $_POST['deadline'];

$sql = "INSERT INTO homework (goals, path, deliverable, deadline) VALUES ('$goals','$path','$deliverable','$deadline')";
mysqli_query($conn, $sql);
header("Location: ../php/homeworkTutor.php");


?>