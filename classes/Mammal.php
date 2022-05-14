<?php

require_once 'iMammal.php';

//public etc. == Zugriffmodifikatoren / Access modifiers

class Mammal {
  protected $name;
  protected $color;
  protected $heigth;
  protected $weight;
  protected $age;

  function __construct($name, $color, $height, $weight, $age) {
    $this->name = $name;
    $this->color = $color;
    $this->height = $height;
    $this->weight = $weight;
    $this->age = $age;
  }


function getName() {
  return $this->name;
}

function getColor() {
  return $this->color;
}

function getAge() {
  return $this->age.' Years old';
}

//Height
function getHeight() {
  return $this->height.' cm';
}

function setHeight($height) {
  if($height > 0) {
    $this->height = $height;
  }
}

//Weight
function getWeight(){
  return $this->weight.' kg';
}

function setWeight($weight){
  if($weight > 0 && $weight < 15) {
    $this->weight = $weight;
  }
}



function eat($food){
  return $this->name;
  }

function move(){
  
}

function breath(){
  
}



/*  function catchMouse() {
  return $this->energy;
} */



/* 
function setEnergy($newEnergy) {
  if(($newEnergy) > 2) {
    $this->energy = $newEnergy;
    return true;
  } else {
    return false;
  }
} 
*/



/* function catchMouse() {
  $this->energyLevel -= $catch[$this->getCatch] * $number;
}
 */


/* 
function catchM($num) {
  $this->energyLevel -= $items[$this->catch] *$num;
} */


}




?>