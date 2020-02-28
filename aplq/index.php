<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h1>Użytkownicy</h1>
    <?php
    require_once('./scripts/connect.php');

    $sql = "SELECT * FROM `user` inner join `color` on `color`.`idcolor`=`user`.`color`";

    $result = mysqli_query($conn, $sql);

    echo <<<TABLE
    <table>
      <tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Kolor</th>
        <th>Data urodzenia</th>


      </tr>


TABLE;


    while ($row = mysqli_fetch_assoc($result)){
      echo <<<ROW
        <tr>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[color]</td>
          <td>$row[birthday]</td>
          <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
          <td><a href="./?updateId=$row[id]">Aktualizuj</a></td>

        </tr>


ROW;
    }
    echo "</table>";



     ?>
      <h1>Dodaj użytkownika</h1>
     <form action="./scripts/add_user.php" method="post">
       <input type="text" name="name" placeholder="Imie">
       <input type="text" name="surname" placeholder="Nazwisko">
       <input type="date" name="birthday">
       <select name="color">
         <?php
         $sql = "SELECT * FROM `color`";
         $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)){
            echo "<option value=\"$row[idcolor]\">$row[color]</option>";
          }
          ?>

       </select>
       <input type="submit" name="button" value="Dodaj">
     </form>

     <?php
      if(isset($_GET['updateId'])){
        $id = $_GET['updateId'];

        $sql = "SELECT * FROM `user` where `id`= '$id'";
        $result = mysqli_query($conn, $sql);

        $user = mysqli_fetch_assoc($result);

echo "<h1>Aktualizuj użytkownika</h1>";
echo <<<FORMUPDATE
<form action="./scripts/update_user.php" method="post">
  <input type="hidden" name="id" value="$user[id]">
  <input type="text" name="name" value="$user[name]">
  <input type="text" name="surname" value="$user[surname]">
  <input type="date" name="birthday" value="$user[birthday]">
  <select name="color">

FORMUPDATE;

$sql = "SELECT * FROM `color`";
$result = mysqli_query($conn, $sql);
 while ($row = mysqli_fetch_assoc($result)){
   echo "<option value=\"$row[idcolor]\">$row[color]</option>";
 }

     ?>

  </select>
  <input type="submit" name="button" value="Dodaj">
</form>











        <?php
      }
      ?>








  </body>
</html>
