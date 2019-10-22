<?php

class Coches{
	function encender (){
		print "enciende el auto"."<br>";
	}
	function correr(){
		print "El Coche corre"."<br>";
	}
}

$metodos = get_class_methods("Coches");
foreach ($metodos as $metodo) {
	print $metodo."<br>";
}

if (method_exists("Coches", "encender")) {
	print "Enciende el auto"."<br>";
} else {
	print "Apaga el auto"."<br>";
}

