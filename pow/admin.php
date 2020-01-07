<?php
  session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ADMIN</h1>
    <form method="post">
      <input type="text" name="qwe" placeholder="Login">
      <input type="submit" name="button" value="SEND">
    </form>

    <?php if(isset($_POST['buttom'])) {
      $acb = $_POST['qwe'];
      echo $acb;

    }


     ?>

    <?php
      $login = $_SESSION['name'];
      $city = $_SESSION['city'];
      $color = $_SESSION['color'];

      //echo $city, $login, $color;
function show($x){
  echo "<table border='1'>";
  echo "<tr><td>Klucz</td><td>Wartość</td></tr>";
  foreach ($x as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td> <td>$value</td>";
    echo "</tr>";

  }
  echo "</table>";
}
      $tab = array(
        "Miasto" => $city,
        "Kolor" => $color,
        "Imię" => $login


      );
      show($tab);
      sort($tab);
      show($tab);
      rsort($tab);
      show($tab);
      krsort($tab);
      show($tab);



     ?>

  </body>
</html>
