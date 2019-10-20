<?php
class Perro{
	var $nombre;
	var $colorPelo;
	var $corbata = "SI";

	function __construct($nombre="", $pelo="negro"){
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

	function __destruct(){
		print $this->nombre." dice: 'Adios, mundo cruel"."<br>";
	}

	function ladrido(){
		return "miau, miau";
	}

	function tieneCorbata(){
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}

	function saludo(){
		$cadena = "Hola, me llamo ".$this->nombre." y mi color de pelo es ";
		$cadena .= $this->colorPelo;
		return $cadena;
	}
}

class PerroVolador extends Perro{

}

$cucho = new Perro("Cucho", "rosa");
$benito = new PerroVolador("Benito","azul");

print $cucho->saludo()."<br>";
print $benito->saludo()."<br>";

unset($cucho);
unset($benito);

print "El pariente de la clase Perro es ".get_parent_class("Perro")."<br>";
print "El pariente de la clase PerroVolador es ".get_parent_class("PerroVolador")."<br>";
print "<br>";
print is_subclass_of("Perro", "PerroVolador")?"Si":"No";
print "<br>";
print is_subclass_of("PerroVolador", "Perro")?"Si":"No";
print "<br>";




?>