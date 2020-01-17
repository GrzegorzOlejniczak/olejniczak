<?php
session_start();
if(isset($_POST['button']) && !empty($_POST['name']) || !empty($_POST['surname']) || !empty($_POST['birthday'])){


  require_once('connect.php');

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
  $id = $_POST['id'];
//  echo $id;

  $conn = mysqli_connect($host, $db_user, $db_password, $db_name);

  $sql = "UPDATE `user` SET `name`='$name',`surname`='$surname',`birthday`= '$birthday' WHERE id='$id'";


  mysqli_query($conn,$sql);
  $_SESSION['result'] = "<span style='color:red'>Użytkownik został zmodyfikowany</span>";
  header("location:../baza_uprawnienia/index.php");







}else{

      header("location:../baza_uprawnienia/index.php");
}





 ?>
