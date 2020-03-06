<?php
  class Zwierze
  {
      public $gatunek;
      public $kraj;
      public $waga;
      public $wzrost;

      function __construct($gatunek, $kraj, $waga, $wzrost)
      {
        $this->gatunek=$gatunek;
        $this->kraj=$kraj;
        $this->waga=$waga;
        $this->wzrost=$wzrost;
        $this->nogi=4;

      }
      public function getAll()
      {
        echo <<<SHOW

        gatunek: $this->gatunek<br>
        Kraj: $this->kraj<br>
        Waga: $this->waga<br>
        Wzrost: $this->wzrost<br>
        Ilosc lap: $this->nogi<br>
          


SHOW;
      }

  }




 ?>
