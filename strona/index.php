<?php
echo $_SERVER['SCRIPT_NAME']; //
echo $_SERVER['SERVER_PROTOCOL']; ///HTTP/1,1
echo $_SERVER['DOCUMENT_ROOT']; // C:/XAMPP/HTDOCS
//$localfile = $sever['document_root'].$
$localfile = $_SERVER['DOCUMENT_ROOT'];
$localfile .= $_SERVER['SCRIPT_NAME'];

echo'<br>', $localfile;
##################################################
//stałe
//nazwy  z duzych liter

define ('NAME', 'Janusz');
echo '<br>', NAME;

define ('COUNTRY', 'Polska', true);
echo '<br>', COUntry, '<hr>';

##########################################################
//stale predefiniowane

echo PHP_VERSION; //5.6.14
echo gettype (PHP_VERSION), '<br>'; //string

if (PHP_VERSION >5.6){
    echo 'NOwa wersja php';
  }else {

    echo'stara wersja php <br>';
}

echo PHP_OS, '<br>'; //WINNT
echo __LINE__, '<br>'; //34
echo __FILE__, '<br>'; //C:\Users\user\Desktop\xampp-portable-win32-5.6.14-4-VC11\xampp\htdocs\strona\index.php
echo __DIR__ ,'<br>'; //C:\Users\user\Desktop\xampp-portable-win32-5.6.14-4-VC11\xampp\htdocs\strona











 ?>
