<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ανακοινώσεις</title>
    <link rel="stylesheet" href="../css/mycss.css" />
  </head>
  <body>
    <header><h1>Ανακοινώσεις Μαθήματος</h1></header>
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
            <a href="./newAnnouncement.php">Προσθήκη νέας ανακοίνωσης</a>
          </h3>
        </div>
        <?php

        include "db_connection.php";
        $sql = "SELECT * FROM announcements";

        $result = mysqli_query($conn, $sql);
        $counter=1;
        while ($row = $result->fetch_array(MYSQLI_NUM)){
          echo "
          <div class='bordered'>
          <h2>Ανακοίνωση $counter <a href='./deleteAnnouncement.php?rowID=$row[0]'>[διαγραφή]</a></h2>
          <p>
          <b>Ημερομηνία:</b> $row[1]<br />
          <b>Θέμα:</b> $row[2]<br />
          $row[3]
          </p>
          </div>
          ";
          $counter++;
          }
          ?> 
          <div align="right">
            <br>
            <a href="./announcementTutor.php"><b>Επιστροφή στην κορυφή της σελίδας</b></a>
            <br>
          </div>
      </main>
    </div>
  </body>
</html>
