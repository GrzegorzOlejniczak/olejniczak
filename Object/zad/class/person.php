<?php
    class Person
    {
      public $name;
      public $surname;
      public $birthday;
      public $city;
      /*
      public function setName($name)
      {
        $this->name=$name;

      }
      public function getName()
      {
        return $this->name;
      }
      public function setSurname($surname)
      {
        $this->surname=$surname;

      }
      public function getSurname()
      {
        return $this->surname;
      }
      public function setCity($city)
      {
        $this->city=$city;
      }
      public function getCity()
      {
        return $this->city;
      }
      public function setBirthday($birthday)
      {
        $this->birthdat=$birthday;


      }
      public function getBirthday()
      {
        return $this->birthday;
      }
      */
      public function setAll($name, $surname, $city, $birthday)
      {
        $this->name=$name;
        $this->surname=$surname;
        $this->city=$city;
        $this->birthday=$birthday;
      }

      public function getAll()
      {
            echo <<<SHOW
            <hr>
            Imię: $this->name<br>
            Nazwisko: $this->surname<br>
            Data urodzenia: $this->birthday<br>
            Miejscowość: $this->city
            <hr>
SHOW;
      }

    }










 ?>
