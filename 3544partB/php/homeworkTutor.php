<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Εργασίες</title>
    <link rel="stylesheet" href="../css/mycss.css" />
  </head>
  <body>
    <header><h1>Εργασίες Μαθήματος</h1></header>
    <div class="content">
      <ul class="nav">
        <li class="nav-item">
          <a href="../php/homeTutor.php">
            <img src="../img/home.png" width="30" height="30" />
            Αρχική Σελίδα
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/announcementTutor.php">
            <img src="../img/announcement.png" width="30" height="30" />
            Ανακοινώσεις
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/communicationTutor.php">
            <img src="../img/communication.png" width="30" height="30" />
            Επικοινωνία
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/documentsTutor.php">
            <img src="../img/documents.png" width="30" height="30" />
            Έγγραφα Μαθήματος
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/homeworkTutor.php">
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
          <a href="../php/logout.php">
            <img src="../img/logout.png" width="30" height="30" />
            Αποσύνδεση
          </a>
        </li>
      </ul>
      <main>
      <div class="bordered">
          <h3>
            <a href="./newHomework.php">Προσθήκη νέας εργασίας</a>
          </h3>
        </div>
        <?php

        include "db_connection.php";
        $sql = "SELECT * FROM homework";

        $result = mysqli_query($conn, $sql);
        $counter=1;
        while ($row = $result->fetch_array(MYSQLI_NUM)){
          echo "
          <div class='bordered'>
          <h2>Εργασία $counter <a href='./deleteHomework.php?rowID=$row[0]'>[διαγραφή]</a></h2>
          <p>
          <b>Στόχοι εργασίας:</b><br />
          $row[1]<br />
          <a href='$row[2]'>Εκφώνηση</a> <br />
          <b>Παραδοτέα:</b> <br />
          $row[3]<br />
          <b>Προθεσμία Παράδοσης:</b> $row[4]

          </p>
          </div>
          ";
          $counter++;
          }
          ?> 
          <div align="right">
            <br>
            <a href="../php/homeworkTutor.php"
            ><b>Επιστροφή στην κορυφή της σελίδας</b></a>
          <br />
        </div>
      </main>
    </div>
  </body>
</html>
