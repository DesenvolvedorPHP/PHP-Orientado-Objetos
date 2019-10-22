<?php 

/* 
	A partir de la versión 5.0 de PHP contamos con la palabra reservada "class"
   	con la cual podemos hacer classes y con ellas la Programación Orientada a 
   	Objetos;
*/

class Coches{

}

/*
$clases = get_declared_classes();
foreach ($clases as $clase) {
	print $clase."<br>";
}
*/


if(class_exists("Coches")):
	echo "La clase Coches SI existe"."<br>";
else:
	echo "La clase Coches NO existe"."<br>";
endif;



