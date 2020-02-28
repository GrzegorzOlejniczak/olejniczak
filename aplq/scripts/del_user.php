<?php
  $id = $_GET['id'];
  //echo $id;

  require_once('./connect.php');
  $sql = "DELETE FROM `user` WHERE `id`=$id";

  mysqli_query($conn, $sql);

  header('location: ../')
 ?>
