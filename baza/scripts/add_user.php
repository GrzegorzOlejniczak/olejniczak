<?php
session_start();
if(isset($_POST['button']) && !empty($_POST['name']) || !empty($_POST['surname']) || !empty($_POST['birthday'])){



  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];

  require_once('connect.php');


  $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
  mysqli_set_charset($conn,"utf8"); //POLSKIE ZNAKI
  $sql = "INSERT INTO `user`(`id`,`name`, `surname`, `birthday`) VALUES (NULL,'$name','$surname','$birthday')";
  //if (mysqli_query($conn,$sql)) {

  //}


  $result = mysqli_query($conn,$sql);
  header("location:../baza_uprawnienia/index.php");
    mysqli_close($conn);
  }
  else
  {

    header("location:../baza_uprawnienia/index.php");
  }
 ?>
