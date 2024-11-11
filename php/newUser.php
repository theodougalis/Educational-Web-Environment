<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Νέος Χρήστης</title>
    <link rel="stylesheet" href="../css/mycss.css" />
  </head>
  <body>
    <div class="login">
      <h1>Προσθήκη νέου χρήστη</h1>
      <form action="../php/insertUser.php" method="post">
        Όνομα:
        <br />
        <input type="text" name="name" />
        <br /><br>
        Επώνυμο:
        <br />
        <input type="text" name="surname" />
        <br /><br>
        Username(email):
        <br />
        <input type="email" name="email" />
        <br /><br>
        Κωδικός:
        <br />
        <input type="text" name="password" />
        <br />
        <br>
        <input type="radio" id="tutor" name="role" value="Tutor">
        <label for="tutor">Tutor</label><br><br>
        <input type="radio" id="student" name="role" value="Student">
        <label for="student">Student</label><br><br>


        <input type="submit" value="Προσθήκη" />
      </form>
    </div>
  </body>
</html>
