<?php


// Chamando a Classe
require_once ("Car.php");


// Objetos
$ferrari = new Car;
$ferrari->brand = "Ferrari"; 
$ferrari->color = "Red";
$ferrari->engine = 300;

$mustang = new Car;
$mustang->brand = "Mustang"; 
$mustang->color = "Yellow";
$mustang->engine = 300;


var_dump($mustang);