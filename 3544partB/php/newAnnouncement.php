<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Νέα Ανακοίνωση</title>
    <link rel="stylesheet" href="../css/mycss.css" />
  </head>
  <body>
    <div class="login">
      <h1>Προσθήκη νέας ανακοίνωσης</h1>
      <form action="../php/insertAnnouncement.php" method="post">
        Θέμα :
        <br />
        <input type="text" name="subject" />
        <br />
        <label for="maintext">Κυρίως κείμενο:</label><br />
        <textarea
          id="maintext"
          name="maintext"
          style="height: 200px; width: 500px"
        ></textarea>
        <br />

        <input type="submit" value="Δημοσίευση" />
      </form>
      <p>TIP: Τα tags της HTML λειτουργούν κανονικά για μορφολόγηση του κειμένου άμα τα συμπεριλάβετε στο κυρίως κείμενο.</p>
    </div>
  </body>
</html>
