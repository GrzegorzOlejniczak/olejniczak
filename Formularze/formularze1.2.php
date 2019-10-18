<?php
  if(isset($_POST)==['button']){
    if((!empty($_POST)==['name']) && (!empty($_POST)==['password'])){

          $name = $_POST['name'];
          $password = $_POST['password'];
          $country = $_POST['country'];
          $ilosc = strlen($name);

          switch ($country) {
            case 'PL':
              $country = 'Polska';
              break;
            case 'GR':
              $country = 'Grecja';
              break;
            case 'BI':
              $country = 'Białoruś';
              break;
          }
          echo"Dane przed poprawą: ilosc znakow: $ilosc, Imie: $name, kraj: $country<br>";



          $poprawne = ucfirst(strtolower(substr(trim($name),0, 10)));
          $ilosc = strlen($name);

          echo"dane po poprawie: $ilosc, imie $poprawne, kraj: $country";
echo<<<END
      <h1>PODSUMOWANIE</h1>
      <table border="1" cellpading="10" cellspacing="0">
      <tr>
        <td>Imie</td>  <td>$name</td>
      </td>
      <tr>
      <td>kraj</td>  <td>$country</td>
    

      </td>





      </table>






END;

      }

  }

 ?>
