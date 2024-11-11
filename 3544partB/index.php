<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Σύνδεση</title>
    <link rel="stylesheet" href="./css/mycss.css" />
  </head>
  <body>
    <div class="login">
      <h1>Σύνδεση Χρήστη</h1>
      <form action="./php/check.php" method="post">
        Username : <input type="text" name="username" />
        <br />
        <br />
        Password : <input type="password" name="password" />
        <br />
        <br />
        <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <input type="submit" value="Login" />
      </form>
    </div>
  </body>
</html>
