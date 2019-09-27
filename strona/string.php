<?php
$text = <<< T
 zsl -
 Zespół
 szkół
 Łączności
T;

 echo "przed wywolaniem funkcji nl2br:<br>$text";
 echo "<br><br>po wywolaniu funkcji nl2br:<br>";
 echo nl2br($text), '<br>';

 $text = 'jaNUsz';
 //zamina na male litery

 echo strtolower($text), '<br>'; //janusz
 //na duze litery
 echo strtoupper($text), '<br>'; //JANUSZ

 //zamiana pierwszej litrey na duza
 $text = 'raz dwA TRZy';
 echo ucfirst($text), '<br>'; //JRAZ dwa TRZy

 //zamiana wszystkich pierwszych liter na duze
 echo ucwords($text), '<br>'; //RAZ DWA trzy

 $text = 'janusz';
 $firstletter = substr($text,0,1);
 echo $firstletter;
 $lateletter = substr($text,1);
 //$name

 //pierwsza litera imienia duza, pozostale male




?>
