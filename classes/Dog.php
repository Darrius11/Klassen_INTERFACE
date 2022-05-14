<?php

require_once 'Mammal.php';
require_once 'iMammal.php';

//extends - sorgt für Vererbung, läuft nur in eine richtung
class Dog extends Mammal implements iMammal {
  private $hungryLevel = 10;

  function __construct($name, $color, $heigth, $weight, $age, $hungryLevel) {
    parent::__construct($name, $color, $heigth, $weight, $age);
    $this->hungryLevel = $hungryLevel;
}

function eat($hungryLevel) {
  if($hungryLevel > 10) {
    echo 'Dog is enjoying it';
  }
}

function move() {
  echo 'The Dog doesn`t want to walk';
}

}