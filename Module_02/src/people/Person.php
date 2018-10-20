<?php

// Namespaces 
namespace InfoEnter\People;

class Person {
    
    private $data = [];
    
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
