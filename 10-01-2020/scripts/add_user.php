<?php
  if (isset($_POST['button'])  && !empty($_POST['name']) &&!empty($_POST['surname']) && !empty($_POST['birthday'])   ) {

      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $birthday = $_POST['birthday'];

      require_once("./connect/connect.php");

      $sql = "INSERT INTO `user`(``) "
  }else{
    header('location: ../');
  }

 ?>
