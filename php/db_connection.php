<?php 

$hostname = "webpagesdb.it.auth.gr";
$database = "student3544";
$username = "EPDUser"; 
$password = "EPDpassword1";
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {

    echo "Connection failed!";

}
    
?>