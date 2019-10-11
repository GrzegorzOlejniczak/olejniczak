<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">

      <input type="text" name="imie" autofocus autocomplete="off"><br><br>
      <input type="submit" name="przycisk" value="Wyślij">

    </form>
      <?php
      if (!empty ($_POST['imie'])) {
          $imie = $_POST ['imie'];
          echo $imie;
      }

       ?>





  </body>
</html>
