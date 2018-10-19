<?php
/*
 * 01 - Criar um único arquivo para a classe específica. 
 * 02 - Criar o arquivo com a primeira letra maiúscula e de preferência com o nome da classe em questão.
 * 03 - Classe sempre no singular, nunca no plural.
 */


/**
 * Description of Vehicle
 *
 * @author Fernando Britto
 */
class Vehicle {
     // Atributos
    public $brand;
    public $color;
    public $engine;
    
    
    
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
}
