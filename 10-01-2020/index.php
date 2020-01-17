<?php
  session_start();

 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Tabela - user</h1>

    <?php

    //$conn = mysqli_connect("localhost", "root", "", "komis");
    $conn = mysqli_connect("localhost", "janusz", "zaq1@WSX", "komis");

    mysqli_set_charset($conn, "utf8");
    $sql = "SELECT id, name, surname, birthday FROM `user` WHERE 1";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if (isset($_SESSION['result'])) {
      echo $_SESSION['result'];
      unset($_SESSION['result']);
    }

echo <<< TABLE
      <table>
        <tr>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>

        </tr>

TABLE;

    while($row = mysqli_fetch_assoc($result)){
      echo <<< ROW
      <tr>
        <td>$row[name]</td>
        <td>$row[surname]</td>
        <td>$row[birthday]</td>
        <td><a href="./scripts/delete_user.php?id=$row[id]">Usuń</a></td>
      </tr>

ROW;
    }

     ?>
   </table>

      <h3>Dodaj użytkownika</h3>
      <form action="./scripts/add_user.php" method="post">
        <input type="text" name="name" placeholder="Janusz"><br><br>
        <input type="text" name="surname" placeholder="Nowak"><br><br>
        <input type="text" name="birthday" placeholder="10-01-2020"><br><br>
        <input type="submit" name="button" value="Dodaj użytkownika">
      </form>





  </body>
</html>
