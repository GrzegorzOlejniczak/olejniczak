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
          $ilosc = strlen($imie);
          echo "Dane pobrane od użytkownika: $imie, ilosc liter: $ilosc <br>";


          $poprawne = trim($imie);
          $ilosc = strlen($poprawne);
          echo "Długość imienia po wyczyszczeniu z białych znaków: $ilosc, imie $poprawne<br>";
          $poprawne = ucfirst(strtolower(substr(trim($imie), 0, 10)));


          $ilosc = strlen($poprawne);
          echo "Długość imienia po wyczyszczeniu z białych znaków: $ilosc, imie $poprawne<br>";








      }else{

        echo "Wypełnij pole imię!!";


      }

       ?>





  </body>
</html>
