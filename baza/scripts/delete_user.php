
<?php
    session_start();
    $id = $_GET['id'];

    require_once('connect.php');
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
    $sql = "DELETE FROM `user` WHERE `user`.`id` = $id";
    $result = mysqli_query($conn,$sql);


    if($result = mysqli_query($conn, $sql)){
      $_SESSION['result'] = "<span style='color:red'>Użytkownik został usunięty</span>";
      header("Location:../baza_uprawnienia/index.php");
    }




    mysqli_close($conn);
?>
