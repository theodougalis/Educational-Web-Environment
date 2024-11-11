<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Έγγραφα</title>
    <link rel="stylesheet" href="../css/mycss.css" />
  </head>
  <body>
    <header><h1>Έγγραφα Μαθήματος</h1></header>
    <div class="content">
      <ul class="nav">
        <li class="nav-item">
          <a href="../php/home.php">
            <img src="../img/home.png" width="30" height="30" />
            Αρχική Σελίδα
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/announcement.php">
            <img src="../img/announcement.png" width="30" height="30" />
            Ανακοινώσεις
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/communication.php">
            <img src="../img/communication.png" width="30" height="30" />
            Επικοινωνία
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/documents.php">
            <img src="../img/documents.png" width="30" height="30" />
            Έγγραφα Μαθήματος
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/homework.php">
            <img src="../img/homework.png" width="30" height="30" />
            Εργασίες
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
        <?php

        include "db_connection.php";
        $sql = "SELECT * FROM documents";

        $result = mysqli_query($conn, $sql);
        while ($row = $result->fetch_array(MYSQLI_NUM)){
          echo "
          <div class='bordered'>
          <h2>$row[1] </h2>
          <p>
          $row[2]<br />
          <a href='$row[3]'>Download</a>
          </p>
          </div>
          ";
          }
          ?> 
        <div align="right">
          <br />
          <a href="../php/documents.php"
            ><b>Επιστροφή στην κορυφή της σελίδας</b></a
          >
          <br />
        </div>
      </main>
    </div>
  </body>
</html>
