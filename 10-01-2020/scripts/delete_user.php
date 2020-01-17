<?php
  session_start();
  require_once('./connect/connect.php');
$conn = mysqli_connect("localhost", "root", "", "komis");

  $id = $_GET['id'];
    $sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";

  if ($result = mysqli_query($conn, $sql)){
    $_SESSION['result'] = "<span style='color:red'>Użytkownik został usunięty</span>";
    header('location: ../index.php');
  }


/*
Usuwanie użytkownika wykonaj za pomocą użytkownika utworzonego w bazie danych o nazwie anna (zmień uprawnienia).
Utworz nowy plik connect.php znajdujący się w folderze connect, wykorzystaj ten plik przy połączeniu z bazą w pliku delete_user.php
*/
 ?>
