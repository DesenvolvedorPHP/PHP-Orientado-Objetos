<?php
/*
 * 01 - Criar um único arquivo para a classe específica. 
 * 02 - Criar o arquivo com a primeira letra maiúscula e de preferência com o nome da classe em questão.
 * 03 - Classe sempre no singular, nunca no plural.
 */

require_once ("IVehicle.php");

/**
 * Description of Vehicle
 *
 * @author Fernando Britto
 */

// Abstract Class
abstract class Vehicle implements IVehicle {
     // Atributos
    public $brand;
    public $color;
    public $engine;
    
    // Protected
    //protected $engine;
    
    
    
    // Metodo Construtor
    public function __construct($brand = null ,$color = null) {
        $this->brand = $brand;
        $this->color = $color;
    }


    
    
    // Metodos
    public function getEngine($type = "horsepower")
    {
        return "{$this->engine} {$type}";
    }
    
    public function getColor(){
        return $this->color;
    }

    

    // Metodos Abstract
    abstract public function getBrand();
    
    
}
