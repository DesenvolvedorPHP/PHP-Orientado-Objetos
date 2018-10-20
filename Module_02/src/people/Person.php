<?php

// Namespaces 
namespace InfoEnter\People;

class Person {
    
    private $data = [];
    
    // Metodos interceptadores
    public function __construct() 
    {
        echo 'Classe Instanciada' . PHP_EOL;
    }
    
//    public function __call($method, $proprieties) {
//        var_dump($method, $proprieties);
//    }
    
       
    
        public function setName($name)
    {
        $this->data[] = $name;
    }
    
    public function setAge(int $age)
    {
        $this->data[] = $age;
    }
    
    public function setWeight(float $weight)
    {
        $this->data[] = $weight;
    }    
    
}