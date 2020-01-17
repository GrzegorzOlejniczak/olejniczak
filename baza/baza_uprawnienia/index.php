<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="style.css">
  <body>
    <center>
    <h1>Tabela - user</h1>
    <?php
    //  $conn=mysqli_connect("localhost","root","","komis");
      $conn=mysqli_connect("localhost","root","","komis");
      mysqli_set_charset($conn,"utf8"); //POLSKIE ZNAKI

      $sql = "SELECT id,name,surname,birthday FROM `user`";
      $result = mysqli_query($conn,$sql);

if(isset($_SESSION['result'])){
  echo $_SESSION['result'];
  unset($_SESSION['result']);
}

echo <<<table
<table>
  <tr>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Data urodzenia</th>

  </tr>
table;

      while ($row = mysqli_fetch_assoc($result)) {
        echo <<<ROW
        <tr>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birthday]</td>
          <td><a href="../scripts/delete_user.php?id=$row[id]">USUŃ</a></td>
          <td><a href="index.php?update_id=$row[id]">UPDATE</a></td>
        </tr>
ROW;
      }

      //mysqli_close($conn);
     ?>

   </table>
   <hr>

   <h1>Dodaj uzytkownika</h1>
   <form action="../scripts/add_user.php" method="post">
     <input class="form" type="text" name="name" placeholder="Podaj imie"><br><br>
     <input class="form" type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
     <input class="form" type="date" name="birthday" placeholder="Podaj datę urodzenia"><br><br>
     <input id="button" type="submit" name="button" value="Dodaj użytkownika">
   </form>



 <hr>
 <h1>Aktualizacja tabeli - user</h1>
 <?php
      if (isset($_GET['update_id'])) {
        $id = $_GET['update_id'];
        //echo $id;

        require_once('../scripts/connect.php');

        $sql = "SELECT * FROM `user` WHERE id=$id";
        $result =  mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        mysqli_close($conn);
      }


  ?>
 <form action="../scripts/update_user.php" method="post">
   <input class="form" type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
   <input class="form" type="text" name="surname" value="<?php echo $row['surname']; ?>"><br><br>
   <input class="form" type="date" name="birthday" value="<?php echo $row['birthday']; ?>"><br><br>
   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
   <input id="button" type="submit" name="button" value="Aktualizuj">
 </form>
 </center>

  </body>
</html>
