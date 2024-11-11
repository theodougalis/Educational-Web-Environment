<?php
include "db_connection.php";


$title = $_POST['title'];
$description = $_POST['description'];
$path = $_POST['path'];
$sql = "INSERT INTO documents (title, description, path) VALUES ('$title','$description','$path')";
mysqli_query($conn, $sql);
header("Location: ../php/documentsTutor.php");


?>