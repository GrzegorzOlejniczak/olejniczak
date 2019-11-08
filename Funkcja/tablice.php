<?php
  //tablice indeksowane numerycznie

  $colors = array('Red', 'Green', 'Blue');
  $colors[3] = 'Magenta';


  for ($i=0; $i < count($colors); $i++) {
    $elem = $i + 1;
    echo "Element $elem: $colors[$i]<br>";



  }

  function showArray($colors){
        for ($i=0; $i < count($colors); $i++) {


          $elem = $i + 1;
          echo "Element $elem: $colors[$i]<br>";



      }

  }
  showArray($colors);

  foreach ($colors as $value) {
    echo $value, '<br>';
  }

  foreach ($colors as $key => $value) {
    echo "$key $value <br>";
  }
  foreach ($colors as $key => $value) {
    $elem = $key + 1;
    echo "Element $elem: $value<br>";
  }

##############################################
  //tablice asocajcyjne
  $data = array(
    'imie' => 'Janusz',
    'nazwisko' => 'Nowak',
    'wiek' => 20
  );
  function showArrayAssoc($tab){
    foreach ($tab as $key => $value) {
      echo "$key: $value<br>";
    }
  }
  showArrayAssoc($data);









 ?>
