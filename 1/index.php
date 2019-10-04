<?php
    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    echo $lorem, '<hr>';
    $col =wordwrap($lorem, 35, '<br>');
    $col =wordwrap($lorem, 35, '<hr>');

    //czyszczenie bufora
    ob_clean();
    #################################################################################################
    //usuwanie bialych  znakow :| //zamknij ten bnz\;
    $name = 'Kasia';
    $name1 = ' Kasia ';

  echo 'dlogosc zmieej $name:', strlen($name), '<br>';
 echo 'dlugosc zmiennej $name1: ', strlen($name1), '<br>';


 echo strlen(ltrim($name1)); //5
echo strlen(rtrim($name1)); //7
echo strlen(trim($name1)); //665


#################################################################################################
//przeszukiwanie ciagow znakow

$address = 'Poznań, ul. Przełajowa 4, tel. (61) 445-35-20';
$search = strstr($address, 'teI.', true);
echo $search, '<br>'; // ul. Przełajowa 4

$address = 'Poznań, ul. Przełajowa 4, tel. (61) 445-35-20';
$search = strstr($address, 'teI.');
echo $search, '<br>'; //(61) 445-35-20

$address = 'Poznań, ul. Przełajowa 4, tel. (61) 445-35-20';
$search = stristr($address, 'teI.');
echo $search, '<br>'; //(61) 445-35-20

$mail = strstr('zsl@gmail.com','@');
echo $mail, '<br>'; //@gmail.com

$mail = strstr('zsl@gmail.com', 64);
echo $mail, '<br>'; //@gmail.com
#################################################################################################

$ciag1 = 'a';
$ciag2 = 'b';

echo strcmp($ciag1, $ciag2); //-1
echo strcmp ('d', 'a'); //1
echo strcmp ('d', 'd'); //0
echo strcmp ('aac', 'aa'); //1

//pozycja w stringu

echo strpos('abcdedg', 'bc'); //-1
echo strpos('abcdabcd', 'bc'); //-1

//sprawdz czy w ciagu o nazwie text1 znajduje sie ciag text2
$text1 ='abcd';
$text2 ='abcd';
if(strpos($text1, $text2)== false ){
  echo "ciag $text2 nie zostal znaleziony w ciagu $text1",'<hr>';
}else{
  echo "ciag $text2 zostal znaleziony w ciagu $text1",'<hr>';
}
#################################################################################################
//przetwarzanie ciągu znaków szybszy pało
$replace = str_replace('zsl', 'zsk','technikum informatyczne - zsł');

echo $replace,'<br>' ;
//substr

 $surname=substr('Janusz Kowalski',3);
 echo $surname,'<br>';//usz Kowalski

//teraz ja czyli ja
$surname=substr('Janusz Kowalski',-3);
echo $surname,'<br>'; //ski

$surname=substr('Janusz Kowalski',-8, -5);
echo $surname,'<hr>'; //kow

$surname=substr('Janusz Kowalski',7, -3);
echo $surname,'<hr>'; //kowal
 //ile znaków
##############################################################################################
// zamiana polskich znakuw

$login = 'żakol';
$censore = array('ą','ę','ś','ż','ź','ć','ó','ń','ł');
$replace = array('a','e','s','z','z','c','o','n','l');

$newlogin = str_replace($censore, $replace, $login);
echo $newlogin,'<hr>'; //zakol
#################################################################################################


/*
napisz aplikacje cenzurujaca zdanie podane przez uzutkownika
uzytkownik podaje dane w formularzu.
zamien slowa:zsk, zse i zsl na ciag '**#####**'.
Wyswietl dane:
dane bez poprawy:..
dane  z poprawa: ..
*/


//ob_clean();

echo <<< form
<form method="post">
  <center>
    <input type="text" name="dane" placeholder="every vote matters"><br><br>
    <input type="submit" value="confirm">
  </center>
</form>
form;

if(isset($_POST['dane'])){
  $data = $_POST['dane'];
  //echo $data;
  $censore = array('zsk', 'zse', 'zsł');
  $replace = '**####**';
  $correct= str_replace($censore, $replace, $data);

echo "dane bez poprawy: $data<br>";
echo "dane po poprawie: $correct <br>";
}





?>
