<?php
  session_start();
  //unset($_SESSION["name"]= "Janusz";

 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    Sesja2 <br>
    Witamy!
    <?php
    echo $_SESSION['name'];


     ?>
     na stronie
     <?php
      echo "idetyfikator sesji: ", session_id();
      ?>
      <br><a href="./sesja1.php">Strona startowa</a>


  </body>
</html>
