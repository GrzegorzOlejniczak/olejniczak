<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

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
        require('./4.1forznik.php');

      }

       ?>

  </body>
</html>
