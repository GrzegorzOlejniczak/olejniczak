<?php


//data
echo date('Y'),"<br>";
echo date('y'),"<br>";
echo date("Y-m-d"),"<br>";
echo date("Y-M-D"),"<br>";
echo date("d-m-y"),"<br>";
echo date("e"),"<br>";
echo date("F"),"<br>";

//czas
echo date("g"),"<br>";
echo date("G"),"<br>";
echo date("h"),"<br>";
echo date("H"),"<br>";


//minuty

echo date("i"),"<br>";
echo date("I"),"<br>"; //czas letni 1 lub zimowy 0

echo date("j"),"<br>"; //dzien miesiaca
echo date("l"),"<br>"; //dzien tygodnia
echo date("L"),"<br>"; //rok przestepny=0
echo date("m"),"<br>"; //miesiac z zerem na poczatku
echo date("n"),"<br>"; //miesiac bez zera na poczatku
echo date("O"),"<br>"; //przesuniecie czasu
echo date("o"),"<br>"; //rok
echo date("P"),"<br>"; //roznica do czasu


echo date("t"),"<br>"; //liczba dni w miesiacu
echo date("T"),"<br>"; //strefa czasowa
echo date("U"),"<br>"; //czas od 1970
echo date("s"),"<br>"; //sekundy
echo date("S"),"<br>"; //dni tygodnia
echo date("w"),"<br>"; //ktory dzien tygodnia
echo date("W"),"<br>"; //numer tyygodnia
echo date("z"),"<br>"; //dzien roku



//getdate()

$data = getdate();

  echo"<pre>";
  echo print_r($data);

  echo"</pre>";
  echo '<br>';

  $weekDay = $data['wday'];
  switch ($weekDay) {
    case 1:
      $weekDay = "Poniedziałek";
      break;
    case 5:
      $weekDay = "Piątek";
      break;


  }
  echo $weekDay,"<br>";


/*wyswietl na ekranie date i czas w formacie :
Dzien: 22 listopada 2019
Godzina: 19:46
dzien tygodnia: piątek
*/
  $mday = $data['mday'];
  $mon = $data['mon'];
  $year = $data['year'];
  $hours = $data['hours'];
  $minutes = $data['minutes'];
  switch ($mon){
    case 1:
    $mon = "styczeń";
    break;
    case 11:
    $mon = "listopad";
    break;
  }
  echo "Dzień: $mday $mon $year <br>";

  echo "Godzina: $hours:$minutes<br>";
  $weekDay = $data['wday'];
  switch ($weekDay) {
    case 1:
      $weekDay = "Poniedziałek";
      break;
    case 5:
      $weekDay = "Piątek";
      break;
    }
    echo "Dzien tygodnia: $weekDay";



 ?>
