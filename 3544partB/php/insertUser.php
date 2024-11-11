<?php
include "db_connection.php";


$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$sql = "INSERT INTO users (name, surname, loginame, password, role) VALUES ('$name','$surname','$email','$password','$role')";
mysqli_query($conn, $sql);
header("Location: ../php/users.php");


?>