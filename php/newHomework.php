<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Νέα εργασία</title>
    <link rel="stylesheet" href="../css/mycss.css" />
  </head>
  <body>
    <div class="login">
      <h1>Προσθήκη νέας εργασίας</h1>
      <p>TIP: Τα tags της HTML λειτουργούν κανονικά για μορφολόγηση του κειμένου άμα τα συμπεριλάβετε στο κυρίως κείμενο.</p>
      <form action="../php/insertHomework.php" method="post">
      <label for="goals">Στόχοι εργασίας:</label><br />
          <textarea
            id="goals"
            name="goals"
            style="height: 200px; width: 500px"
          ></textarea> <br> <br> 
          Path αρχείου εκφώνησης:
          <br />
          <input type="text" name="path" />
          <br /><br>
          <label for="goals">Παραδοτέα:</label><br />
              <textarea
                id="deliverable"
                name="deliverable"
                style="height: 200px; width: 500px"
            ></textarea> <br> <br> 
            Προθεσμία Παράδοσης <br>
            <b>Προσοχή!</b> Χρησιμοποιήστε αυτή την μορφή (EEEE-MM-HH):
            <br />
            <input type="text" name="deadline" />
        
            

        <input type="submit" value="Προσθήκη" />
      </form>
    </div>
  </body>
</html>
