<?php
  require_once("./class/person.php");
  $person=new Person();

  $person->setAll("Grażyna", "Buła", "06-02-1961", "Poznań");
  $person->getAll();



 ?>
