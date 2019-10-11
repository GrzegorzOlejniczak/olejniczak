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

          //sanityzacja kodu (czyszczenie)

          //usuwanie bialych znakow (trim)
          $poprawne = trim($imie);
          $ilosc = strlen($poprawne);



          //ograniczenie do 10 znakow (substr)
          $poprawne = substr($poprawne, 0, 10);


          //zamiana na male litery (strtolower)
          $poprawne = strtolower($poprawne);


          //zamiana litrey na duza (ucfirst)
          $poprawne = ucfirst($poprawne);
          echo "Długość imienia po wyczyszczeniu z białych znaków: $ilosc, imie $poprawne<br>";








      }else{

        echo "Wypełnij pole imię!!";


      }

       ?>





  </body>
</html>
