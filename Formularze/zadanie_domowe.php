<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanie domowe</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="login" placeholder="Login" autofocus autocomplete="off"><br><br>
      <input type="password" name="password" placeholder="Password"><br><br>
      <input type="submit" name="button" value="SEND">

      <?php
        if(isset($_POST)==['button']){
          if((!empty($_POST)==['login']) && (!empty($_POST)==['password'])){
            $login = $_POST['login'];
            $password = $_POST['password'];
            $ilosc = strlen($login);

            echo "Pobrane: ilość znaków: $ilosc, login: $login, password: $password<br>";

            $poprawne = ucfirst(strtolower(substr(trim($login), 0, 10)));
            $ilosc = strlen($poprawne);

            echo "Poprawne dane: ilosc(bez bialych znakow): $ilosc, login: $poprawne, password: $password";



          }else{
            echo "Wypełnij puste pola";
          }


        }


       ?>


    </form>

  </body>
</html>
