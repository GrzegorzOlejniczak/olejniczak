<?php
$login = $_POST['login'];
$password = $_POST['password'];
if($login == "Jan" && $password == "123"){
  header("location: admin.php");
}else if($login == "Janusz" && $password =="asd"){
  header("location: user.php");
}else{
  echo "<span style='color:red'>Nie poprawne dane</span>";
}
 ?>
