<?php
if (isset($_POST['button'])){
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
  $color = $_POST['color'];
  $id = $_POST['id'];


  require_once('./connect.php');

  $sql = "UPDATE `user` SET `name`='$name',`surname`='$surname',`birthday`='$birthday',`color`='$color' WHERE `id`='$id'";

  mysqli_query($conn, $sql);


}
header('location: ../')


 ?>
