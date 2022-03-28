# questOOP1
<?php

require_once 'Bicycle.php';
$bike = new Bicycle();




$bike->setColor('blue');


// Moving bike
echo '<br><br>';

echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->setcurrentSpeed(24) . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->setcurrentSpeed(24) . ' km/h' . '<br>';

echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider

$rockrider = new Bicycle();

$rockrider->setColor('yellow');


// Instanciation d'un nouvel objet $tornado

$tornado = new Bicycle();

$tornado->setcolor('black');

$tornado->forward();






require_once ('Car.php');
$car = new Car('red',4 ,'Diesel fuel');


echo '<br><br>';

echo $car->forward();

echo '<br> Vitesse de la voiture : ' . $car->setcurrentSpeed(80) . ' km/h' . '<br>';

echo $car->brake();

echo '<br> Vitesse de la voiture : ' . $car->setcurrentSpeed(80) . ' km/h' . '<br>';

echo $car->brake();

?>
