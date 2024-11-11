<?php 

session_start(); 
include "db_connection.php"; 


if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);

    if (empty($username)) {

        header("Location: ../index.php?error=Username is required");

        exit();

    }else if(empty($password)){

        header("Location: ../index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE loginame='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['loginame'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['loginame'] = $row['loginame'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['surname'] = $row['surname'];
                
                $_SESSION['role'] = $row['role'];

                //TODO Check Role and redirect accordingly
                if ($row['role'] == "Tutor") {
                    
                    header("Location: ./homeTutor.php");
                    
                }
                else if($row['role'] == "Student"){
                    
                    header("Location: ./home.php");

                }


                exit();

            }else{

                header("Location: ../index.php?error=Incorrect username or password");

                exit();

            }

        }else{

            header("Location: ../index.php?error=Incorrect username or password");

            exit();

        }

    }

}else{

    header("Location: ../index.php");

    exit();

}
    
?>
