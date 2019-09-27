<?php
  $potega = 2 ** 10;
  echo $potega , '<hr>';

  //operatory bitowe: and &, or |, not ~, xor ^, >>,<<


$x = 0.1010;
 echo $x;

 $x = $x >> 1; //101 5
 $x = $x << 2; //10100 20
 echo $x;



 $x = 1;
 $y = 1.0;
 echo gettype($x), '<br>'; //integer
 echo gettype($y), '<br>'; //double


 if ($x == $y)
  echo 'Równe<br>';
  else
    echo 'Różne';
########################################################################

$x = 10;
$y = 100;
$wynik = $x <=> $y;

 echo $wynik;
 ########################################################################
 $x =2;
 echo $x++ ;//2
 echo ++$x;//4
 echo $x;//4
 $y = $x++;
  echo $y;//4
  $y = ++$x;//6
  echo ++$y;//7
  ########################################################################
  //operatory rzutowania
  //bool, int , float, string, array, object, unset
    echo '<hr>';
    $text1 = '123ssd';

    $x1 = (int)$text1;
    echo $x1;
    $x1 = (float)$x1;
    echo $x1, '<br>';
    echo gettype ($x1); //double



    $text2 = -1;
    $x2 = (bool) $text2;
    echo $x2, '<br>';// 1 - true , false

    $x3 = (unset) $text2;
    echo '<hr>', $x3;
    echo gettype($x3); //NULL


    //rozmiar typu integer

      echo PHP_INT_SIZE, '<hr>'; //8

      $w=1;
      //@ operator ignorowania błędów
      echo @$w;
      echo @gettype($w); //null


      $text = 'ZSŁ';
      echo is_string($text);//true
      echo is_bool($text);//true
      echo is_float($text);//true
      echo is_int($text);//true
      echo is_null($text);//true
##################################################

//zmienne superlobalne

//$_GET, $_POST, $_COOKI, $_FILES, $_SESSION, $_SERVER

    echo $_SERVER['SERVER_PORT']; //80


 ?>
