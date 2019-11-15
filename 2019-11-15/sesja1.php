<?php
  session_start();
  $_SESSION["name"] = "Janusz";
 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona startowa</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <a href="index.php">Powrót</a><br><br>
    Witamy!
    <?php
    echo $_SESSION['name'];




     ?>
     na stronie
     <?php
      echo "idetyfikator sesji: ", session_id();
      ?>
      <br><a href="./sesja2.php">Sesja2</a>


  </body>
</html>
