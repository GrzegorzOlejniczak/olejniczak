<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formularze</title>
  </head>
  <body>

    <form method="get">
      <input type="text" name="name" placeholder="Name"><br><br>
      <input type="text" name="surname" placeholder="Surname"><br><br>
      <input type="number" name="age" placeholder="Age"><br><br>
      <input type="submit" name="button"
      value="confirm"><br><br>
    </form>
    <?php
    if (isset($_GET['button'])){
      if(!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['age']) ){

        $imie = $_GET['name'];
        $nazwisko = $_GET['surname'];
        $wiek = $_GET['age'];

        echo "imie: $imie <br> Nazwisko: $nazwisko<br> Wiek:$wiek";
      }
    }
     ?>

  </body>
</html>
