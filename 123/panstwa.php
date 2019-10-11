<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">

      <input type="text" name="imie" autofocus autocomplete="off"><br><br>
      <input type="radio" name="kraj" value="pl" checked>Polska
      <input type="radio" name="kraj" value="fr">Francja
      <input type="submit" name="przycisk" value="Wyślij">

    </form>
      <?php
      if (!empty ($_POST['imie']) && !empty($_POST['kraj'])) {
          $imie = $_POST ['imie'];
          $kraj = $_POST ['kraj'];
          $ilosc = strlen($imie);




          switch ($kraj) {
            case 'pl':
              $kraj  = 'Polska';
              break;
              case 'fr':
              $kraj  = 'Francja';

                break;


          }




          $poprawne = trim($imie);
          $ilosc = strlen($poprawne);
          echo "Długość imienia po wyczyszczeniu z białych znaków: $ilosc, imie $poprawne, kraj: $kraj <br><br>";
          $poprawne = ucfirst(strtolower(substr(trim($imie), 0, 10)));
          $ilosc = strlen($poprawne);








      }else{

        echo "Wypełnij pole imię!!";


      }

       ?>





  </body>
</html>
