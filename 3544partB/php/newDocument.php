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
      <h1>Προσθήκη νέου εγγράφου</h1>
      <form action="../php/insertDocument.php" method="post">
        Τίτλος:
        <br />
        <input type="text" name="title" />
        <br /><br>
        Περιγραφή:
        <br />
        <input type="text" name="description" />
        <br /><br>
        path:
        <br />
        <input type="text" name="path" />
        <br /><br>

        <input type="submit" value="Προσθήκη" />
      </form>
    </div>
  </body>
</html>
