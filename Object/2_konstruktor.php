<?php
  class Car
  {
    public $brand;
    public $model;
    public $country;

    function __construct($brand, $model, $country)
    {
      $this->brand=$brand;
      $this->model=$model;
      $this->country=$country;
    }

    public function getAll()
    {
    echo <<<SHOW
          Marka: $this->brand<br>
          Model: $this->model<br>
          Kraj: $this->country
SHOW;
    }


  }

  $vw = new Car("Volkswagen", "Polo", "Polska");

  $vw->getAll();



 ?>
