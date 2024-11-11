<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Χρήστες</title>
    <link rel="stylesheet" href="../css/mycss.css" />
  </head>
  <body>
    <header><h1>Διαχείριση Χρηστών</h1></header>
    <div class="content">
      <ul class="nav">
        <li class="nav-item">
          <a href="./homeTutor.php">
            <img src="../img/home.png" width="30" height="30" />
            Αρχική Σελίδα
          </a>
        </li>
        <li class="nav-item">
          <a href="./announcementTutor.php">
            <img src="../img/announcement.png" width="30" height="30" />
            Ανακοινώσεις
          </a>
        </li>
        <li class="nav-item">
          <a href="./communicationTutor.php">
            <img src="../img/communication.png" width="30" height="30" />
            Επικοινωνία
          </a>
        </li>
        <li class="nav-item">
          <a href="./documentsTutor.php">
            <img src="../img/documents.png" width="30" height="30" />
            Έγγραφα Μαθήματος
          </a>
        </li>
        <li class="nav-item">
          <a href="./homeworkTutor.php">
            <img src="../img/homework.png" width="30" height="30" />
            Εργασίες
          </a>
        </li>
        <li class="nav-item">
          <a href="./users.php">
            <img src="../img/users.png" width="30" height="30" />
            Χρήστες
          </a>
        </li>
        <li class="nav-item">
          <a href="./logout.php">
            <img src="../img/logout.png" width="30" height="30" />
            Αποσύνδεση
          </a>
        </li>
      </ul>
      <main>
      <div class="bordered">
          <h3>
            <a href="./newUser.php">Προσθήκη νέου χρήστη</a>
          </h3>
        </div>
        <?php

        include "db_connection.php";
        $sql = "SELECT * FROM users";

        $result = mysqli_query($conn, $sql);
        $counter=1;
        while ($row = $result->fetch_array(MYSQLI_NUM)){
          echo "
          <div class='bordered'>
          <h2>Χρήστης: $counter <a href='./deleteUser.php?rowID=$row[2]'>[διαγραφή]</a></h2>
          <p>
          <b>Όνομα:</b> $row[0]<br />
          <b>Επώνυμο:</b> $row[1]<br />
          <b>Username:</b> $row[2]<br />
          <b>Ρόλος:</b> $row[4]<br />
          </p>
          </div>
          ";
          $counter++;
          }
          ?>  
          <div align="right">
            <br>
            <a href="./users.php"><b>Επιστροφή στην κορυφή της σελίδας</b></a>
            <br>
          </div>
      </main>
    </div>
  </body>
</html>