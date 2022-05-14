<?php

require_once 'Mammal.php';
require_once 'iMammal.php';

//extends - sorgt für Vererbung, läuft nur in eine richtung
class Bear extends Mammal implements iMammal {
  private $honey = 100;

function __construct($name, $color, $heigth, $weight, $age, $honey) {
    $this->honey = $honey;

    parent::__construct($name, $color, $heigth, $weight, $age);
}

  function eat($honey) {
    if($honey < 100) {
      echo 'The Bear loves honey';
    }
  }

function move() {
  echo 'The Bear is running fast';
}

}