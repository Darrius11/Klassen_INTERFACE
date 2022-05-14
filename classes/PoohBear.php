<?php

require_once 'Mammal.php';
require_once 'iMammal.php';

//extends - sorgt für Vererbung, läuft nur in eine richtung
class PoohBear extends Mammal implements iMammal {
private $lovingHoney = 1000;

function __construct($name, $color, $heigth, $weight, $age, $lovingHoney) {
    $this->lovingHoney = $lovingHoney;

    parent::__construct($name, $color, $heigth, $weight, $age);
}

  function eat($lovingHoney) {
    if($lovingHoney < 1000) {
      echo 'Winni Pooh loves honey';
    }
  }

function move() {
  echo 'Winni Pooh is lazy';
}

function tShirtColour() {
  if($this->tShirtColour == 'red') {
    return $this->tShirtColour == 'yellow';
  } else {
    $this->tShirtColour == 'green';
    echo 'This T-ShirtColor is ';
  }
}

}