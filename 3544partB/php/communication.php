<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Επικοινωνία</title>
    <link rel="stylesheet" href="../css/mycss.css" />
  </head>
  <body>
    <header><h1>Τρόποι Επικοινωνίας</h1></header>
    <div class="content">
      <ul class="nav">
        <li class="nav-item">
          <a href="./home.php">
            <img src="../img/home.png" width="30" height="30" />
            Αρχική Σελίδα
          </a>
        </li>
        <li class="nav-item">
          <a href="./announcement.php">
            <img src="../img/announcement.png" width="30" height="30" />
            Ανακοινώσεις
          </a>
        </li>
        <li class="nav-item">
          <a href="./communication.php">
            <img src="../img/communication.png" width="30" height="30" />
            Επικοινωνία
          </a>
        </li>
        <li class="nav-item">
          <a href="./documents.php">
            <img src="../img/documents.png" width="30" height="30" />
            Έγγραφα Μαθήματος
          </a>
        </li>
        <li class="nav-item">
          <a href="./homework.php">
            <img src="../img/homework.png" width="30" height="30" />
            Εργασίες
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
        <h2>Αποστολή μηνύματος προς καθηγητή</h2>
        <p>
          Μπορείτε να χρησιμοποιήσετε την παρακάτω φόρμα για να επικοινωνήσετε
          με τον καθηγητή. Παρακαλώ συμπληρώνετε το ακαδημαϊκό σας email, όπου
          και θα δεχτείτε την απάντηση το συντομότερο δυνατό.
        </p>
        
        <form action="./sendEmail.php" method="post">
        Το ακαδημαϊκό σας e-mail: <br><input type="email" name="email"><br><br>
        Θέμα: <br><input type="text" name="subject"><br><br>
          <label for="message">Κείμενο:</label><br />
          <textarea
            id="message"
            name="message"
            style="height: 200px; width: 500px"
          ></textarea>
          <?php if (isset($_GET['error'])) { ?>

          <h1 class="error"><?php echo $_GET['error']; ?></h1>

          <?php } ?>
          <br />
          <input type="submit" value="Αποστολή" />
        </form>
        <h2>Επικοινωνία με αποστολή email</h2>
        <p>
          Εναλλακτικά, μπορείτε να στείλετε email στην παρακάτω διεύθυνση
          ηλεκτρονικού ταχυδρομείου.
          <br />
          <b><a href="https://webmail.auth.gr">tutor@csd.auth.gr</a></b>
        </p>
      </main>
    </div>
  </body>
</html>
