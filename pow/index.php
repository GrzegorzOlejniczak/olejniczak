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
      <select name="city">
        <option>Poznań</option>
        <option>Warszawa</option>
        <option>Kraków</option>
        <option>Katowice</option>
        <option>Zakopane</option>
      </select><br><br>
      <input type="text" name="name" placeholder="Imie"><br><br>
    red  <input type="radio" name="color" value="red">
    green  <input type="radio" name="color" value="green">
    blue  <input type="radio" name="color" value="blue"><br><br>
      <input type="submit" name="button" value="Wyślij">
    </form>

    <?php
        if(isset($_POST['button'])){
          if (empty($_POST['name']) || empty($_POST['color'])  ) {
            echo "<span style='color:red'>Pola nie mogą być puste</span>";
          }else{
            $login = $_POST['name'];
            echo $login."<br>";
            $poprawne = ucwords(strtolower(substr(trim($login),0,10)));
            echo $poprawne;
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['color'] = $_POST['color'];
            $_SESSION['city'] = $_POST['city'];

          //  header("location: dane.php");
          }


        }



     ?>
  </body>
</html>
