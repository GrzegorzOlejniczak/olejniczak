<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>PĘTLA</title>
  </head>
  <body>
  <form  method="post">
    <input type="number" name="choinka" placeholder="Podaj liczbe">
    <input type="submit" name="button" value="SEND"><hr>

    <input type="password" name="haslo" placeholder="haslo">
    <input type="submit" name="button" value="SEND NOODLES">

  </form>

      <?php

        //PĘTLA
        //wyświetl liczby parzyste z przedziału <1;15> w porządku malejącym
        for ($i=15; $i > 0 ; $i--) {
          if($i%2==0){
              echo "$i<br>";}}

//użytkownik podaje wysokość choinki
          if(!empty($_POST)==['choinka']){

            $choinka=$_POST['choinka'];
            for ($i=1; $i < $choinka; $i++) {
              for($a=1; $a <= $i; $a++){
                echo "$";
              }
              echo "<br>";
            }
            echo "||<br>";


//magiczny dywan
          for ($i=1; $i < $choinka ; $i++) {
            if($i%2==0){
              for ($a=1; $a < $choinka; $a++) {
                echo "#";}
            }else{
              for ($a=1; $a < $choinka; $a++) {
                echo "$";}
            }
            echo"<br>";
          }

          /*
          Użytkownik podaje z klawiatury hasło przynajmnjiej raz
          Ma 3 próbu na odgadnięcie hasła
          Po trzeciej próbie wyświetli się komunikat: "Podales 3 razy błędne hasło"
          Jeśli odgadnie hasło wcześniej to wyświetlamy komunikat: "Prawidlowe haslo, proba: ..."
          */



          $truhaslo="okoń";
          $a=1;
          do {
            $zgadywane=$_POST['haslo'];
            if($zgadywane==$truhaslo){
              echo "Prawidlowe hasło, próba:";
              break;
            }else{$a++;
              echo"Podałeś 3 razy błędne hasło";
              break;
            }
          } while ($a <= 3);


        








/*
                                                 ****
                                                ****** //ksiezyc
                                                 ****

                                                   ^
                                                  ***
                                                 *****
                                                 **$**
                                                 **$**
                                                 **$**     //RAKIETA
                                                 *****
                                               *********
                                              **|******|**
                                              **|******|**
                                                ^^^^^^^
                                                 ^^^^^
                                                  ^^^
                                                   ^



                                                  ****
                                                 ****** //Ziemia
                                                  ****
*/

}

?>
  </body>
</html>
