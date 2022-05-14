<?php

require_once 'classes/Cat.php';
require_once 'classes/Dog.php';
require_once 'classes/Bear.php';
require_once 'classes/PoohBear.php';

$cat = new Cat('Cat', 'Brown with black spots', 30, 3.5, 1.5,'furious', 8);

/* echo $cat->getName();
echo '<br>';
echo $cat->getColor();
echo '<br>';
echo $cat->getHeight();
echo '<br>';
echo $cat->getWeight();
echo '<br>';
echo $cat->getAge();
echo '<br>'; */
echo $cat->catchMouse(4);
echo '<br>';
echo $cat->setFood(2, 'Chicken');

/* echo $cat->move(10);
$cat->eat('delisious');
echo $cat->getEnergy(2); 


if($cat->setEnergy(5)) {
  echo 'I'm great';
} else {
  echo 'I'm tiered';
} */


/* echo $cat->catchMouse(2);
echo '<br>';
echo $cat->getEnergy();
echo '<br>';
echo $cat->eat(Primar); 
*/



// echo $cat->getEnergy();

// $catch = ['Mouse' => 2];
// $catch[$this->catch];



echo '<br>';
echo '<br>';
echo '<br>';


$dog = new Dog('Dog', 'White with black spots', 50, 7.5, 2.5, 2);

echo $dog->getName();
echo '<br>';
echo $dog->getColor();
echo '<br>';
echo $dog->getHeight();
echo '<br>';
echo $dog->getWeight();
echo '<br>';
echo $dog->getAge();
echo '<br>';
echo $dog->eat(10);
echo '<br>';
echo $dog->move();


echo '<br>';
echo '<br>';
echo '<br>';


$bear = new Bear('Bear', 'Brown', 2000, 500, 5,7);

echo $bear->getName();
echo '<br>';
echo $bear->getColor();
echo '<br>';
echo $bear->getHeight();
echo '<br>';
echo $bear->getWeight();
echo '<br>';
echo $bear->getAge();
echo '<br>';
echo $bear->eat(200);
echo '<br>';
echo $bear->move();


echo '<br>';
echo '<br>';
echo '<br>';


$PoohBear = new Bear('Winni Pooh', 'Brown', 5000, 700, 3, 10, 'red');

echo $PoohBear->getName();
echo '<br>';
echo $PoohBear->getColor();
echo '<br>';
echo $PoohBear->getHeight();
echo '<br>';
echo $PoohBear->getWeight();
echo '<br>';
echo $PoohBear->getAge();
echo '<br>';
echo $PoohBear->eat(100);
echo '<br>';
echo $PoohBear->move();
echo '<br>';
echo $PoohBear->tShirtColour();
echo '<br>';

?> 