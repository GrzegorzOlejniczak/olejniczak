<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
    <input type="text" name="imie" placeholder="Imie"><br><br>
    <input type="password" name="haslo" placeholder="Haslo"><br><br>
    <input type="radio" >Polska<br><br>
    <input type="radio" >Grecja<br><br>
    <input type="radio" >Białoruś<br><br>
    <input type="submit" name="button">

  </form>bv
  <?php

  if(isset ($_GET['button'])){
    if(!empty($_GET['name']) && !empty($_GET['haslo']) ){

      $_GET = $imie['Imie'];
      $_GET = $haslo['Haslo'];
      




      echo "imie: $imie";
      echo "imie: $haslo";
    }
  }
   ?>





  </body>
</html>
