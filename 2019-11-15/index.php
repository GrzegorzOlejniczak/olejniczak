<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="container">
        <div id="topblock">
            <a href="sesja1.php"><div class="blooook">SESJE

            </div></a>
            <div class="blooook">AAAAAA</div>
            <div class="blooook">AAAAAA</div>
            <div class="blooook">AAAAAA</div>
            <div class="blooook" style="border-right:none;">AAAAAA</div>
        </div>

        <div id="main">
          <?php

          //sortowanie

          $tab = array(10,1,100, -4, 5,6);
          function Show($x){

              foreach ($x as $key => $value) {
                //echo "<strong>$value</strong> ";
                echo "$key:<strong> $value</strong>";
              }
            echo "<br>";
          }
          Show($tab);
          echo "<hr>";

          //niemalejąco
          echo "niemalejaco ";
          sort($tab);
          Show($tab);
          echo "<hr>";

          //nierosnąco
          rsort($tab);
          Show($tab);
          echo "<hr>";

          //sortowanie tablicy asocjacyjnej
          $tabAssoc = array(
          "name " => "Anna ",
          "surname " => "Nowak ",
          "city " => "Poznań ",
          "age " => "26 "
        );
        Show($tabAssoc);
        asort($tabAssoc);
        Show($tabAssoc);

        arsort($tabAssoc);
        Show($tabAssoc);

        ksort($tabAssoc);
        Show($tabAssoc);
        krsort($tabAssoc);
        Show($tabAssoc);

        //wyswietlanie danych
        var_dump($tab);
        echo"<br>";

        var_dump($tabAssoc);
        echo"<br>";


        print_r($tabAssoc);
        echo "<pre>";
        print_r($tabAssoc);
        echo"</pre>";














           ?>

        </div>
        <div id="footer">wszelkie prawa zastrzeżone &copy copyright 2019</div>




    </div>



  </body>
</html>
