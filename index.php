<?php


// Chamando a Classe
require_once ("Car.php");
require_once ("Motorcycle.php");



// Objetos
$ferrari = new Car("Ferrari","Red");

$ferrari->engine = 488;
$ferrari->setDoors(2);

$mustang = new Car;
$mustang->brand = "Mustang"; 
$mustang->color = "Yellow";
$mustang->engine = 300;
$mustang->setDoors(4);


// Objeto Motocicleta
$m = new Car;
$m->brand = "Honda"; 
$m->color = "Blue";
$m->engine = 150;





//echo $mustang->getEngine("horsepower");
echo $mustang->getDoors();
//echo $ferrari->brand;
//echo $m->color;