<?php

require_once 'Mammal.php';
require_once 'iMammal.php';

//extends - sorgt für Vererbung, läuft nur in eine richtung
class Cat extends Mammal implements iMammal {
  private $grantLevel = 70;
  private $greatMeal = ['Mouse' => 10, 'Bird' => 20, 'Fish' => 30];
  private $items = ['Chicken' => 10, 'Tuna' => 20, 'Fly' => 30];


function __construct($name, $color, $heigth, $weight, $age, $grandLevel , $energyLevel) {
    $this->grandLevel = $grandLevel;
    $this->energyLevel = $energyLevel;

    parent::__construct($name, $color, $heigth, $weight, $age);
}

  
function eat($grandLevel) {
  if($grandLevel > 80) {
    echo 'The Cat loves Fish';
  }
}

function move() {
  echo 'The Cat is furious';
}

function catchMouse($number) {
  $this->energyLevel -= 10 * $number;
  echo $this->name.' Current EnergyLevel is '.$this->energyLevel;
}

function setFood($number, $food) {
  if(array_key_exists($food, $this->greatMeal)) {
    $this->energyLevel += $this->greatMeal[$food] * $number;
    if($this->energyLevel >= 100) {
      $this->energyLevel = 100;
    }
    return $this->name.' New EnergyLevel is '.$this->energyLevel;
  } else {
    return 'I do not love this, my EnergyLevel is '.$this->energyLevel;
  }
}

}


?>