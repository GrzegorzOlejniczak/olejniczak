<?php
  echo<<<FORM
    <form method="post">

      <input type="text" name="imie" autofocus autocomplete="off"><br><br>
      <input type="radio" name="kraj" value="pl" checked>Polska
      <input type="radio" name="kraj" value="fr">Francja
      <input type="submit" name="przycisk" value="Wyślij">

    </form>
  FORM;


 ?>
