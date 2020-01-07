<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="login" placeholder="login"><br><br>
      <input type="password" name="password" placeholder="Hasło"><br><br>
      <input type="submit" name="button" value="Zaloguj">
    </form>
    <?php
    if (isset($_POST['button'])) {
      if(empty($_POST['login']) || empty($_POST['password'])){
        echo "<span style='color:red'>Pola nie mogą być puste</span>";
      }else{
        require 'sprawdz.php';
      }
    }

     ?>

  </body>
</html>
<?php
  $name = $_SESSION['name'];
  $city = $_SESSION['city'];
  $color = $_SESSION['color'];
  //echo $name, $color, $city;

  $tab = array($name, $color, $city);
  $i = 0;
echo "<table border='1'>";
  while($i < count($tab)){
    echo"<tr><td>";
    echo $tab[$i];
    echo "<br>";
    $i++;
    echo"</tr></td>";
  }
  echo "</table>";



 ?>
