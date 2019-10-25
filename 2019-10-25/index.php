<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <form  method="post">
      <input type="number" name="liczba" placeholder="Podaj liczbę: "><br><br>
      <input type="submit" name="button" value="SEND"><br><br>


    </form>

    <table border="1" cellpadding="21" >
    <?php

   if(isset($_POST['button'])){
      if(!empty($_POST)==['liczba']){
        $suma = 0;
        $liczba = $_POST['liczba'];
        $row = 1;
        $row + $col = $liczba +1;
        $suma1 = 0;


        do {
          $col=1;

          ?><tr> <?php

          do {

            if($col==$row){
              ?>
                <td style=background-color:red;>
                  <?php
                  $x = $row*$col;
                  $suma += $x;
                  echo $x,' ';
                   ?>

                </td>
              <?php
            }else if($col+$row==$liczba+1){
              echo "<td style=background-color:blue;> " ;
              echo ($row * $col);

              $x = $row*$col;
              $suma1 += $x;
              echo"</td>";








            }else{
              ?>
                <td >
                  <?php echo $row*$col,' '; ?>
                </td>
              <?php
            }

            $col++;

          } while ($col <= $liczba);

          ?></tr><?php

          $row++;

        } while ($row <= $liczba);

      }
    }
   ?>
   </table>
   <?php
   if(isset($_POST['button'])){
     echo "<h3 style='color:red;' >suma czerwonych: $suma</h3>";
     echo '<br>';
     echo "<h3 style='color:blue;' >suma niebieskich: $suma1</h3>";
   }

    ?>


  </body>
</html>
